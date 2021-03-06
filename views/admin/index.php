<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
</head>

<body class="text-center" style="background-image: url('https://img.wallpapersafari.com/desktop/1920/1080/34/41/WG4Hvm.jpg');">

    <br><br><br><br><br>
    <form class="form-signin">
        <a class="font-weight-bold fw-bold text-uppercase" style="font-size: 30px;" href="?controller=pages&action=home">Vaccine center</a>
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <input type="hidden" name="controller" value="admin">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="signIn">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
    </form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>