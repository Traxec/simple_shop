@extends('users.app')
@section('title','账户中心')
@section('path')
    <li class="text-muted">账户中心</li>
@stop

@section('right-content')
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <div class="panel panel-default">
            <div class="panel-heading bg-default">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i>
                    个人资料
                </h4>
            </div>
            @include('common.error')
            <div class="panel-body info">
                <form action="{{ route('users.update', $user->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">E-Mail 地址</label>
                        <div class="col-md-4">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name-field" class="col-md-2 control-label">用户名</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" id="name-field" placeholder="请输入您的用户名" value="{{ old('name', $user->name )}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar-field" class="col-md-2 control-label">用户头像</label>
                        <div class="col-md-4">
                            <img id="show" src="{{ $user->avatar ?: asset('images/avatar.png') }}" style="width:60px;height:60px;cursor:pointer" onclick="document.getElementById('avatar-field').click()" class="img-circle" alt="hello">
                            <input type="file" name="avatar" class="hide" id="avatar-field" value="{{ old('avatar', $user->avatar) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">保存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>

    </div>
@stop

@section('scripts')
    <script>
        $('#avatar-field').change(function(e){
            $('#show').attr('src', window.URL.createObjectURL(e.target.files[0]))
        })
    </script>
@stop
