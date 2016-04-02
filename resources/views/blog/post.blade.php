@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $post->title }}</h1>

            <div>
                <time datetime="{{ $post->created_at->toDateTimeString() }}">{{ $post->created_at->toFormattedDateString() }}</time>
                @if(Auth::check())
                    <a href="{{ route('editBlogPost', [$post->slug]) }}" class="btn btn-default">Edit</a>
                    <form method="POST" action="{{ route('destroyBlogPost', [$post->id]) }}">
                        {!!  csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete (no warning)</button>
                    </form>
                @endif
            </div>
            <article>{!! $post->body !!}</article>
        </div>
    </div>
@stop