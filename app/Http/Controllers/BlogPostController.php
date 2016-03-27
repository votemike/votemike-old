<?php

namespace Votemike\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Votemike\BlogPost;
use Votemike\Http\Requests;

class BlogPostController extends Controller
{
    public function index()
    {
        $query = BlogPost::latest();
        if (!Auth::check()) {
            $query->active();
        }
        $posts = $query->paginate(10);

        return view('blog.posts')->withPosts($posts);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $post = new BlogPost();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->active = $request->has('active');

        Auth::user()->blogPosts()->save($post);

        return redirect(route('showBlogPost', [$post->slug]));
    }

    public function show($slug)
    {
        $post = BlogPost::whereSlug($slug)->firstOrFail();

        return view('blog.post')->withPost($post);
    }

    public function edit($slug)
    {
        $post = BlogPost::whereSlug($slug)->firstOrFail();

        return view('blog.edit')->withPost($post);
    }

    public function update(Request $request, $id)
    {
        $post = BlogPost::findOrFail($id);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->active = $request->has('active');
        $post->save();

        return redirect(route('showBlogPost', [$post->slug]));
    }

    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();

        return redirect(route('showBlogPosts'));
    }
}
