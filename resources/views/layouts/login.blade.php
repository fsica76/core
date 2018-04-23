<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME', 'MDS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>
<body>


    <nav class="navbar navbar-expand navbar-blue w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ env('APP_NAME', 'MDS') }}
            </a>
        </div>
    </nav>



    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-md-2">
                 @yield('content')
            </div>
        </div>
    </div>

 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
