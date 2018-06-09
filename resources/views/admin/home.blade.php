<!-- Admin Dashboard Index (After Login to panel) -->
@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('section')



    <!-- /.row -->
    <div class="col-sm-12">


        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-globe fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{count($sites)}}</div>
                                <div>Lista twoich stron!</div>
                            </div>
                        </div>
                    </div>
                    <a>
                        <div class="panel-footer">
                            <span data-target="#sites_details"  data-toggle="collapse" class="pull-left">View Details</span>
                            <span  class="pull-right" ><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                            <div class="collapse" id="sites_details">
                                <div class="collapse-panel" style="float:none">
                                    <h4 class="text-left"> nazwa </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"> {{count($posts)}}</div>
                                <div>Liczba twoich notatek</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            {{--<div class="col-lg-3 col-md-6">--}}
                {{--<div class="panel panel-yellow">--}}
                    {{--<div class="panel-heading">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xs-3">--}}
                                {{--<i class="fa fa-shopping-cart fa-5x"></i>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-9 text-right">--}}
                                {{--<div class="huge">124</div>--}}
                                {{--<div>New Orders!</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<a href="#">--}}
                        {{--<div class="panel-footer">--}}
                            {{--<span class="pull-left">View Details</span>--}}
                            {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3 col-md-6">--}}
                {{--<div class="panel panel-red">--}}
                    {{--<div class="panel-heading">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xs-3">--}}
                                {{--<i class="fa fa-support fa-5x"></i>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-9 text-right">--}}
                                {{--<div class="huge">13</div>--}}
                                {{--<div>Support Tickets!</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<a href="#">--}}
                        {{--<div class="panel-footer">--}}
                            {{--<span class="pull-left">View Details</span>--}}
                            {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            </div>
        </div>
        <!-- /.row -->
        <div class="row justify-content-center" style="padding: 15px">
            {{--<div class="col-lg-8">--}}

            {{--@section ('pane2_panel_title', 'Responsive Timeline')--}}
            {{--@section ('pane2_panel_body')--}}

                {{--<!-- /.panel -->--}}



                    {{--<ul class="timeline">--}}
                        {{--<li>--}}
                            {{--<div class="timeline-badge"><i class="fa fa-check"></i>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h4 class="timeline-title">Lorem ipsum dolor</h4>--}}
                                    {{--<p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="timeline-inverted">--}}
                            {{--<div class="timeline-badge warning"><i class="fa fa-credit-card"></i>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h4 class="timeline-title">Lorem ipsum dolor</h4>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="timeline-badge danger"><i class="fa fa-bomb"></i>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h4 class="timeline-title">Lorem ipsum dolor</h4>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="timeline-inverted">--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h4 class="timeline-title">Lorem ipsum dolor</h4>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="timeline-badge info"><i class="fa fa-save"></i>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h4 class="timeline-title">Lorem ipsum dolor</h4>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>--}}
                                    {{--<hr>--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">--}}
                                            {{--<i class="fa fa-gear"></i>  <span class="caret"></span>--}}
                                        {{--</button>--}}
                                        {{--<ul class="dropdown-menu" role="menu">--}}
                                            {{--<li><a href="#">Action</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#">Another action</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#">Something else here</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="divider"></li>--}}
                                            {{--<li><a href="#">Separated link</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h4 class="timeline-title">Lorem ipsum dolor</h4>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="timeline-inverted">--}}
                            {{--<div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h4 class="timeline-title">Lorem ipsum dolor</h4>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                    {{--<!-- /.panel-body -->--}}

                    {{--<!-- /.panel -->--}}
                {{--@endsection--}}
                {{--@include('admin.widgets.panel', array('header'=>true, 'as'=>'pane2'))--}}
            {{--</div>--}}
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">





                @section ('pane3_panel_title', 'Chat')
                @section ('pane3_panel_body')

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" style="max-height: 400px; overflow-y: scroll">
                <ul class="chat">
                    @php
                    $i = 0;
                    @endphp
                    @foreach($messages as $message)
                    <li  class="@if($i % 2 == 0) right @else left @endif clearfix">
                        <div class="chat-body clearfix">
                            <div class="header">

                                <strong class="primary-font">{{$message->getUser()->name}}</strong>
                                <small class="pull-right text-muted">
                                    <i class="fa fa-clock-o fa-fw"></i> {{$message->timeAgo()}}
                                </small>
                            </div>
                            <p>
                               {{$message->body}}
                            </p>
                        </div>
                    </li>
                        @php($i++)
                        @endforeach
                </ul>
            </div>
            <!-- /.panel-body -->
            <div class="panel-footer">
                <div class="input-group d-flex" style="width: 100%;">
                    <form action="{{route('send-message')}}" method="POST" >
                        @CSRF
                        <input hidden name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">

                        <input autocomplete="off" name="body" style="width: 80%;" id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                                        <button class="btn btn-warning btn-sm" id="btn-chat">
                                            Send
                                        </button>
                                    </span>
                    </form>
                </div>
            </div>
            <!-- /.panel-footer -->
        </div>
        <!-- /.panel .chat-panel -->
        @endsection
        @include('admin.widgets.panel', array('header'=>true, 'as'=>'pane3'))
    </div>

    <!-- /.col-lg-4 -->

@stop

