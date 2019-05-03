<!DOCTYPE html>
<html lang="sk">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--jQuery Datatables CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">


    <link rel="stylesheet" type="text/css" href="Login/css/style.css">

    <title>Hlavná stránka</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark color-black">
        <a class="navbar-brand" href="https://147.175.121.210:4171/files/SkuskoveZadanie/WebTech2/index.php"> <img height="60"  alt="logo" src="Login/img/logo.png"> </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <h1 class="text-white">INFORMATION PORTAL</h1>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item">
                <a class="nav-link" id="svk" href="#"> <img src="Login/img/sk.png" height="30" alt="sk"></a>
            </li>
        </ul>
    </nav>

</header>
<div class="login-form">
    <form enctype="multipart/form-data" action="#" method="post">
        <div class="avatar">
            <i class="fa fa-user-circle-o fa-5x"></i>
        </div>
        <h2 class="text-center">Please Sign In</h2>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">

        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submitLoginLDAP" id="ldap" class="btn btn-primary btn-lg btn-block"><i class="fa fa-graduation-cap"></i> Sign in</button>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>