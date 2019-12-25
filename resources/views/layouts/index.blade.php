@include('layouts.header')
    @section('navigation')

    <div class="m-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <a class="navbar-brand" href="#"><i class="fas fa-bars"></i> Home<span class="sr-only">(current)</span></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            <form class="form-inline my-2 my-lg-2" method="GET" action="{{route('search')}}">
                    <input class="form-control mr-sm-2" id="q" name="q" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mr-0">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.login') }}">{{ __('Đăng nhập') }}</a>
                            </li>
                            @if (Route::has('user.register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.register') }}">{{ __('Đăng kí') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('user.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                       
                    <li class="nav-item cart-item">
                    <a class="nav-link btn btn btn-outline-success" href="{{route('carts.index')}}">View Cart<i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        @if(session('success_message'))
            <div class="alert alert-success">
            <strong>{{session('success_message')}}</strong>
            </div>
        @endif 
    </div>
    <div class="space20"></div>

    @show

    @yield('content')

    @include('layouts.footer')