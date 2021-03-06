<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action = $_GET['action'];
} else {
  $controller = 'pages';
  $action = 'home';
}
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VaccineServicePoint</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- <script src="sweetalert2.all.min.js"></script> -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <?php if ($controller != "admin" or $action != "index") {
    require_once("navber.php");
  } ?>
  <?php
  // echo "controller = " . $controller . ", action = " . $action;
  ?>
  <?php require_once("routes.php") ?>


</html>