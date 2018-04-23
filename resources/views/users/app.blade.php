@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ol class="breadcrumb">
                <li><a class="text-muted" href="">首页</a></li>
                @yield('path')
            </ol>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-md-2 left-menu">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="text-center">
                        <li><h4><strong>用户中心</strong></h4></li>
                        <li><a href="#" class="text-muted {{ active_class(if_route('users.edit')) }}">个人资料</a></li>
                        <li><a href="#" class="text-muted">个人中心</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('right-content')
    </div>
@stop
