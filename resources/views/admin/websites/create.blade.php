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

        <form action="{{ route('websites.store') }}" method="POST" role="form">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Website Name</label>
                <input name="website_name" class="form-control" placeholder="Enter website name" value="{{ old('website_name') }}">
            </div>

            <div class="form-group">
                <label>CMS System</label>
                <select name="cms_type" class="form-control">
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
                <input name="db_user" class="form-control" placeholder="Enter database user" value="{{ old('db_user') }}">
            </div>

            <div class="form-group">
                <label>Database Name</label>
                <input name="db_name" class="form-control" placeholder="Enter database name " value="{{ old('db_name') }}">
            </div>

            <div class="form-group">
                <label>Database Password</label>
                <input name="db_pass" class="form-control" placeholder="Enter database password" value="{{ old('db_pass') }}">
            </div>

            <div class="form-group">
                <label>Database Host</label>
                <input name="db_host" class="form-control" placeholder="Enter database host" value="{{ old('db_host') }}">
            </div>

            <div class="form-group">
                <label>Database Port</label>
                <input name="db_port" class="form-control" placeholder="Enter database port" value="3306">
            </div>

            <div class="form-group">
                <label>Table Prefix</label>
                <input name="db_prefix" class="form-control" placeholder="Enter prefix table in database" value="{{ old('db_prefix') }}">
            </div>

            <div class="form-group">
                <label>Database charset</label>
                <input name="db_charset" class="form-control" placeholder="Enter prefix table in database" value="utf8">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

        </form>

    </div>

@endsection
