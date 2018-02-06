<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <title>{{env('APP_NAME')}}</title>
</head>
<header>
    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
        </div>
    </nav>
</header>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-2" style="margin-top: 50px">
            <div class="list-group">
                <a href="" type="button" class="list-group-item list-group-item-action">Home</a>
                <a href="{{route('configs.users.index')}}" type="button" class="list-group-item list-group-item-action">Users</a>
                <a href="{{route('configs.profiles.index')}}" type="button" class="list-group-item list-group-item-action">Profiles</a>
                <a href="{{route('myProject.index')}}" type="button" class="list-group-item list-group-item-action">MyProject</a>


            </div>
        </div>
        <div class="col-10">
          @yield('content')
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Font -->
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</body>
</html>