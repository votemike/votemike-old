@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Latest Posts</h1>

            @foreach($posts as $post)
                <div class="list-group">
                    <div class="list-group-item">
                        <h3><a href="{{ route('showBlogPost', [$post->slug]) }}">{{ $post->title }}</a>
                            @if(!Auth::guest() && $post->author_id == Auth::user()->id)
                                <button class="btn" style="float: right">
                                    @if($post->active)
                                        <a href="{{ route('editBlogPost', [$post->slug]) }}">Edit Post</a>
                                    @else
                                        <a href="{{ route('editBlogPost', [$post->slug]) }}">Edit Draft</a>
                                    @endif
                                </button>
                            @endif
                        </h3>
                        <p>
                            <time datetime="{{ $post->created_at->toDateTimeString() }}">{{ $post->created_at->toFormattedDateString() }}</time>
                        </p>
                    </div>
                    <div class="list-group-item">
                        <article>
                            {!! str_limit($post->body, 1500, $end = '....... <a href='.route('showBlogPost', [$post->slug]).'>Read More</a>') !!}
                        </article>
                    </div>
                </div>
            @endforeach

            {!! $posts->render() !!}
        </div>
    </div>
@stop