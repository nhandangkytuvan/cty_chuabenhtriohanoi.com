<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Network Room 146HN</title>

    <!-- Styles -->
    @yield('css')
    <link href="{{ asset('public/css/app/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/app/myapp.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/app/checkbox.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('public/js/app/app.js') }}"></script>
    <script src="{{ asset('public/js/app/angular.min.js') }}"></script>
    <script src="{{ asset('public/js/app/angular-route.min.js') }}"></script>
    <script src="{{ asset('public/js/app/jquery.form.min.js') }}"></script>
    <script src="{{ asset('public/js/app/jquery.popupoverlay.min.js') }}"></script>
    <script src="{{ asset('public/js/app/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('public/js/app/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/js/app/autosize/dist/autosize.min.js') }}"></script>
    <!-- <script src="{{ asset('public/js/app/clipboard/dist/clipboard.min.js') }}"></script> -->
    <!-- <script src="{{ asset('public/js/app/myclipboard.js') }}"></script> -->
    <!-- <script src="{{ asset('public/js/app/overlay.js') }}"></script> -->
    <script src="{{ asset('public/js/app/myangular.js') }}"></script>
    <script src="{{ asset('public/js/app/myapp.js') }}"></script>
    <!-- Scripts -->
    @yield('js')
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body ng-app="myApp">
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-top">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Network Room 146HN
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-top">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="col-sm-3">
                @yield('menu')
            </div>
            <div class="col-sm-6">
                @yield('content')
            </div>
            <div class="col-sm-3">
                @yield('search')
            </div>
        </div>
    </div>
    <!-- Modal -->
    @yield('modal')
    
</body>
</html>
