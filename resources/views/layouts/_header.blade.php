<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                简单的生活,没那么累。
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{route('login')}}">登录</a></li>
                    <li><a href="{{route('register')}}">注册</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="{{ Auth::user()->avatar ?: asset('images/avatar.png') }}" class="img-responsive img-circle" width="30px" height="30px">
                            </span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    退出登录
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-default navbar-tab">
    <div class="container"> 
        <a href=""></a>
        <ul>
            <li class="pull-left"><a href="">首页</a></li>
            <li class="pull-left"><a href="" class="selected">首页</a></li>
            <li class="pull-left"><a href="">首页</a></li>
            <li class="pull-left"><a href="">首页</a></li>
            <div class="clearfix"></div>
        </ul>
    </div>
    <div class="menu">
        <ul class="container">
            <li class="pull-left">
                <a href=""><img src="{{asset('./images/4f00675caefd0d4177892ad18bfc2df6.png')}}" alt=""><p>哆啦A梦</p></a>
            </li>
            <li class="pull-left">
                <a href=""><img src="{{asset('./images/8bbcd7de60a678846664af998f57e71c.png')}}" alt=""><p>hello kitty</p></a>
            </li>
            <li class="pull-left">
                <a href=""><img src="{{asset('./images/243e5bf327a87217ad1f54592f0176ec.png')}}" alt=""><p></p></a>
            </li>
            <li class="pull-left">
                <a href=""><img src="{{asset('./images/927bc33f7ae2895dd6c11cf91f5e3228.png')}}" alt=""><p></p></a>
            </li>
            <li class="pull-left">
                <a href=""><img src="{{asset('./images/a0352c57c60ce4f68370ecdab6a30857.png')}}" alt=""><p></p></a>
            </li>
            <li class="pull-left">
                <a href=""><img src="{{asset('./images/ab0df9445d985bf6719ac415313a8e88.png')}}" alt=""><p></p></a>
            </li>
            <li class="pull-left">
                <a href=""><img src="{{asset('./images/fdc048e1bf4f04d1c20b32eda5d1dc6e.png')}}" alt=""><p></p></a>
            </li>
            <li class="pull-left">
                <a href=""><img src="{{asset('./images/fdc048e1bf4f04d1c20b32eda5d1dc6e.png')}}" alt=""><p></p></a>
            </li>
        </ul>
    </div>
</nav>
