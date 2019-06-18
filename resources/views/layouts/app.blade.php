<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
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


<!-- <div class="uk-margin-remove" uk-grid>
    <div class="uk-width-auto@m uk-padding-large uk-card uk-card-default uk-card-body">
        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
       
        <li class="uk-nav-header">Navigation</li>
        <li class="uk-parent">
            <a href="#">NEWS</a>
            <ul class="uk-nav-sub">
                <li><a href="{{route('listnews')}}"><span uk-icon="icon:list"></span>LIST</a></li>
                <li>
                    <a href="{{route('getnews')}}" uk-toggle><span uk-icon="icon:plus"></span>ADD</a>
                </li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#">EVENTS</a>
            <ul class="uk-nav-sub">
                <li><a href="#"><span uk-icon="icon:list"></span>LIST</a></li>
                <li>
                    <a href="#modal2" uk-toggle><span uk-icon="icon:plus"></span>ADD</a>
                </li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#">ARTISTS</a>
            <ul class="uk-nav-sub">
                <li><a href="#"><span uk-icon="icon:list"></span>LIST</a></li>
                <li>
                    <a href="#modal2" uk-toggle><span uk-icon="icon:plus"></span>ADD</a>
                </li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#">VIDEOS</a>
            <ul class="uk-nav-sub">
                <li><a href="#"><span uk-icon="icon:list"></span>LIST</a></li>
                <li>
                    <a href="{{url('/admin/videos/getform')}}" uk-toggle><span uk-icon="icon:plus"></span>ADD</a>
                </li>
            </ul>
        </li>
        </ul>
    </div> -->

    <div class="uk-width-expand@m">
        @yield('content')

    </div>

</div>
        
    </div>
    <!-- // -->
<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    @yield('script')
</body>
</html>
