<!-- Create new website template -->
@extends('layouts.dashboard')

@section('page_heading','Add new post (WP) - ' . $website->website_name )

@section('section')

    <div class="col-md-9">

        @if(!empty($errors->first()))
            <div class="row col-lg-12">
                <div class="alert alert-danger">
                    <span>{{ $errors->first() }}</span>
                </div>
            </div>
        @endif

        <form action="{{ url( 'admin/posts/' . $website->id ) }}" method="POST" role="form">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Post Title</label>
                <input name="post_title" class="form-control" placeholder="Enter post title" value="{{ old('post_title') }}">
            </div>

            <div class="form-group">
                <label>Post URL</label>
                <input name="post_name" class="form-control" placeholder="Enter post url (post-name-title) " value="{{ old('post_name') }}">
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea name="post_content" class="ckeditor form-control" placeholder="Enter post content " value="{{ old('post_content') }}"></textarea>
            </div>

            <script src="{{url('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
            <script>
                CKEDITOR.replace( '.ckeditor' );
            </script>

            <button type="submit" class="btn btn-primary">Create new post</button>

        </form>

    </div>

@endsection
