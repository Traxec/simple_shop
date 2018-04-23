@extends('users.app')
@section('title','个人中心')
@section('path')
    <li class="text-muted">个人中心</li>
@stop

@section('right-content')
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <div class="panel panel-default">
            <div class="panel-body info">
                <div class="pull-left col-md-4">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-circle" src="http://yanxuan.nosdn.127.net/c3a03895c73694d922310c76e4915cdb.png?imageView&quality=95" 
                                                                 alt="Media Object">
                        </a>
                        <div class="media-body">
                            <span>{{$user->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right col-md-8">
                    {{-- <div class="panel panel-default col-md-6"><div class="panel-body">1</div></div> --}}
                    {{-- <div class="panel panel-default col-md-6"><div class="panel-body">2</div></div> --}}
                    <p class="text-muted col-md-6">1</p>
                    <p class="text-muted col-md-6">2</p>
                    <p class="text-muted col-md-6">3</p>
                </div>
            </div>
        </div>
        <hr>

        {{-- 用户发布的内容 --}}
        <div class="panel panel-default">
            <div class="panel-heading bg-success">
                我的订单
            </div>
            <div class="panel-body">
                暂无数据 ~_~
            </div>
        </div>

    </div>
@stop
