<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest('student')
                            @if (Route::has('student.login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('student.login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('student.register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('student.register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                         <ul class="navbar-nav mr-0">
                            <li><a class="navbar-brand" href="{{ route('student.home',Auth::guard('student')->user()->id) }}">Home</a></li>
                            <li><a class="navbar-brand" href="{{ route('student.profile',Auth::guard('student')->user()->id) }}">Profile</a></li>
                            <li><a class="navbar-brand" href="{{ route('student.course.register',Auth::guard('student')->user()->id) }}">Registration</a></li>
                            <li><a class="navbar-brand" href="{{ route('student.grade',Auth::guard('student')->user()->id) }}">Grade Result</a></li>
                            <li><a class="navbar-brand" href="{{ route('student.service',Auth::guard('student')->user()->id) }}">Student Services</a></li>
                          </ul>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('student')->user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('student.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('student.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
