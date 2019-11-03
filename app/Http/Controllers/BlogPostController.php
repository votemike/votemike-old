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
        return redirect('https://votemike.co.uk/', 301);
    }

    public function create()
    {
        return redirect('https://votemike.co.uk/', 301);
    }

    public function store(Request $request)
    {
        return redirect('https://votemike.co.uk/', 301);

    }

    public function show($slug)
    {
        return redirect('https://votemike.co.uk/', 301);

    }

    public function edit($slug)
    {
        return redirect('https://votemike.co.uk/', 301);

    }

    public function update(Request $request, $id)
    {
        return redirect('https://votemike.co.uk/', 301);

    }

    public function destroy($id)
    {
        return redirect('https://votemike.co.uk/', 301);

    }
}
