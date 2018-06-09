<!-- All websites template -->
@extends('layouts.dashboard')

@section('page_heading','Websites')

@section('section')



    <div class="col-sm-8">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">
                    List of all added pages
                </h3>

            </div>

            <div class="panel-body">
                <table class="table table-condensed table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Website name</th>
                        <th>CMS type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($websites as $website)
                    <tr>
                        <td>
                            <a href="{{route('websites.show', ['id' => $website->id])}}">{{$website->website_name}}</a>
                        </td>
                        <td>
                            @if($website->cms_type == 'wp') Wordpress @endif
                            @if($website->cms_type == 'lcms') Lumi CMS @endif
                        </td>
                        <td>

                            <a href="{{ url('admin/posts/' . $website->id . '/create') }}" type="button" class="btn btn-success btn-sm" title="Add new post"><i class="fa fa-plus"> Add post</i></a>
                            <a href="{{ route('websites.show', ['id' => $website->id ]) }}" type="button" class="btn btn-primary btn-sm" title="Show all posts"><i class="fa fa-search"> Show posts</i></a>
                            <a href="{{ route('websites.edit', ['id' => $website->id ]) }}" type="button" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"> Edit</i></a>

                            <a
                               onclick="event.preventDefault();
                               document.getElementById('delete-form_{{$website->id}}').submit();"
                               type="button" class="btn btn-danger btn-sm" title="Delete this site from DB"><i class="fa fa-trash"> Delete</i>
                            </a>

                            <form id="delete-form_{{$website->id}}" class="confirm_delete" action="{{ url('admin/websites/' . $website->id ) }}" method="POST" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit">
                            </form>

                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>

    </div>

    </div>



@endsection
