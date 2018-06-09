<!-- Create new website template -->
@extends('layouts.dashboard')

@section('page_heading','Add new website')

@section('section')

    <div class="col-md-4">

        @if(!empty($errors->first()))
            <div class="row col-lg-12">
                <div class="alert alert-danger">
                    <span>{{ $errors->first() }}</span>
                </div>
            </div>
        @endif

        <form action="{{ route('websites.update', ['id' => $website->id ]) }}" method="POST" role="form">

            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
                <label>Website Name</label>
                <input name="website_name" class="form-control" placeholder="Enter website name" value="{{ $website->website_name }}">
            </div>

            <div class="form-group">
                <label>CMS System</label>
                <select name="cms_type" class="form-control">
                    <option selected value="{{$website->cms_type}}">{{ $website->cms_type }}</option>
                    <option value="">No system</option>
                    <option value="wp">Wordpress</option>
                    <option value="ocms">October CMS</option>
                    <option value="lcms">Lumi CMS</option>
                    <option value="drupal">Drupal</option>
                    <option value="joomla">Joomla</option>
                </select>
            </div>

            <div class="form-group">
                <label>Database Username</label>
                <input name="db_user" class="form-control" placeholder="Enter database user" value="{{ $website->db_user }}">
            </div>

            <div class="form-group">
                <label>Database Name</label>
                <input name="db_name" class="form-control" placeholder="Enter database name " value="{{ $website->db_name }}">
            </div>

            <div class="form-group">
                <label>Database Password</label>
                <input name="db_pass" class="form-control"  value="{{ $website->db_pass }}">
            </div>

            <div class="form-group">
                <label>Database Host</label>
                <input name="db_host" class="form-control" placeholder="Enter database host" value="{{ $website->db_host }}">
            </div>

            <div class="form-group">
                <label>Database Port</label>
                <input name="db_port" class="form-control" placeholder="Enter database port" value="3306">
            </div>

            <div class="form-group">
                <label>Table Prefix</label>
                <input name="db_prefix" class="form-control"  value="{{ $website->db_prefix }}">
            </div>

            <div class="form-group">
                <label>Database charset</label>
                <input name="db_charset" class="form-control" placeholder="Enter prefix table in database" value="utf8">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

        </form>

    </div>

@endsection
