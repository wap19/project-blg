<!-- create.blade.php -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('judul')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arial:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="container text-center" style="margin-top:10%;">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h2>Login</h2></div>
        <hr>
        <div class="col-sm-4"></div>
            <div class="card-body col-sm-4 text-left">
                <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                </div>
                <a class="btn btn-primary btn-block" href="index.html">Login</a>
                </form>
            </div>
        <div class="col-sm-4"></div>
        </div>
    </div>
</div>

</body>
</html>