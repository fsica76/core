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
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <aside id="sidebar">
        <div class="sidebar-header">
            <h3>{{ config('app.name', 'Laravel') }}</h3>
            <strong>{{ config('app.name', 'Laravel') }}</strong>
        </div>

        <ul class="list-unstyled components">


            <li class="active">
                <a href="#">
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
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </nav>


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

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>
</html>
