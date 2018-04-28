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
            @foreach($Goods_categories as $Goods_category)
                @if($Goods_category->id<10)
                    <li class="pull-left"><a href="#home" data-toggle="tab">{{ $Goods_category->name }}</a></li>
                @endif
            @endforeach
            <div class="clearfix"></div>
        </ul>
    </div>
    <div class="menu">
        {{-- @foreach($Goods_categories as $Goods_category) --}}
            {{-- @if($Goods_category->parent_id>=10) --}}
                <ul class="container" id="home">
                    <li class="pull-left">
                        <a href=""><img src="{{asset('./images/4f00675caefd0d4177892ad18bfc2df6.png')}}" alt=""><p>哆啦A梦</p></a>
                    </li>
                </ul>
                <ul class="container" id="page">
                    <li class="pull-left">
                        <a href=""><img src="{{asset('./images/4f00675caefd0d4177892ad18bfc2df6.png')}}" alt=""><p>哆啦A梦</p></a>
                    </li>
                </ul>
            {{-- @endif --}}
        {{-- @endforeach --}}
    </div>
</nav>
