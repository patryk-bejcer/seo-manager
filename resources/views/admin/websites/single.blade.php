<!-- Single website template -->
@extends('layouts.dashboard')

@section('page_heading',$website->website_name)

@section('section')

    <div class="col-sm-12">

        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif

            <ul class="nav nav-pills" style="margin-bottom:20px;">
                <li><a href="{{ url('admin/posts/' . $website->id . '/create') }}"  class=""  href="#">Add new post</a></li>
            </ul>

        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">
                    List of all posts
                    @if($website->cms_type == 'wp') (Wordpress) @endif
                    @if($website->cms_type == 'lcms') (Lumi CMS) @endif
                </h3>
            </div>


            @if($website->cms_type == 'wp')
                @include('admin.websites.posts.wordpress.index')
            @elseif($website->cms_type == 'lcms')
                @include('admin.websites.posts.lumicms.index')
            @elseif($website->cms_type != 'lcms' && 'wp')
                @include('admin.websites.posts.other.single')
            @endif

        </div>

@endsection
