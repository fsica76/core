<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('APP_NAME', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <aside id="sidebar">
        <div class="sidebar-header">
            <h3>{{ config('APP_NAME', 'Laravel') }}</h3>
            <strong>{{ config('APP_NAME', 'Laravel') }}</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{route('home')}}">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="{{route('core.index')}}">
                    <i class="fa fa-link"></i>
                    <span>Core</span>
                </a>
            </li>

            <li>

                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-cogs"></i>
                    <span>Config</span>
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">

                    <li><a href="{{route('configs.users.index')}}">Users</a></li>
                    <li><a href="{{route('configs.roles.index')}}">Roles</a></li>
                    <li><a href="{{route('configs.permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
        </ul>

    </aside>


    <div class="container-fluid container-full p0">
        <nav class="navbar navbar-expand navbar-blue w-100">
            <a id="sidebarCollapse" class="btn navbar-btn float-left"><i class="fas fa-bars"></i></a>


            <div class="collapse navbar-collapse d-flex justify-content-end mr-5" id="navbarNavDropdown">

                <ul class="navbar-nav d-flex justify-content-end">

                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarconfig" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user()->imagen_thumb)
                                <img src="{{ Auth::user()->imagen_thumb }}" class="img-user img-responsive rounded-circle" alt="" width="40px">
                                @else
                                {{--<img src="img/perfil-azul.png" class="img-user img-responsive rounded-circle" alt="">--}}
                                    <i class="icon-user fas fa-user rounded-circle"></i>
                                @endif

                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu">
                               @if(!env('SSO_AUTH'))
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                @else
                                    <a class="dropdown-item" href="{{env('SSO_MDS_URL')}}/auth/logout?redirect={{route('home')}}">
                                        <em class="icon-logout"></em>
                                        <span>Cerrar sesión</span>
                                    </a>
                                @endif

                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </nav>

        <div class="m-3">

            <div class="row">

                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> </a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>

            @if (count($errors) > 0)
                <div class="row">
                    <div class="col-12">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{$error}}</strong>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            

        <div class="row m-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                         @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


@include('core.js')

@yield('js')


</body>
</html>
