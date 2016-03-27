@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Edit Post</h1>

            @include('errors')
            <form method="POST" action="{{ route('updateBlogPost', [$post->id]) }}">
                {!!  csrf_field() !!}
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="title" name="title" id="title" class="form-control"
                           value="{{ old('title', $post->title) }}"
                           required>
                </div>

                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea type="body" name="body" id="body" class="form-control"
                              required>{{ old('body', $post->body) }}</textarea>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="active" {{ old('active', $post->active) ? 'checked' : '' }}> Active
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">Update Post</button>
                </div>
            </form>
        </div>
    </div>
@stop