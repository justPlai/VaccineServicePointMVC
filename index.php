<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action = $_GET['action'];
} else {
  $controller = 'pages';
  $action = 'home';
}
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

</head>

<body>
  <!-- navbar -->
  <header>
    <nav class="bg-primary border-bottom navbar navbar-dark navbar-expand-lg py-lg-1">
      <div class="container">
        <a class="fw-bold navbar-brand text-uppercase" href="?controller=pages&action=home" style="font-size: 30px;">Vaccine center</a>
        <a class="nav-link px-lg-3 py-lg-4" href="?controller=center&action=search" style="color: #ffffff;">All centers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-4" aria-controls="navbarNavDropdown-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown-4" class="collapse navbar-collapse" style="width: 32px;">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link px-lg-3 py-lg-4" href="#" style="color: #ffffff;">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-lg-3 py-lg-4" href="?controller=admin&action=editCenterIndex" style="color: #ffffff;  margin-right: 5px; width: 119px;">Edit centers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-lg-3 py-lg-4" href="?controller=admin&action=VaccineIndex" style="color: #ffffff;  width: 119px; margin-left: -17px;">Edit Vaccine</a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
            </li>
          </ul>
          
          
          <b class=" text-white" style="margin-left: 300px;">Nuttawat Juntawong</b>
          <a class="btn btn-light ms-lg-auto ps-4 pe-4 rounded-pill" href="?controller=admin&action=signInPage">Admin</a>
        </div>
        <!-- <div class="collapse navbar-collapse " id="navbarNavDropdown-4">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link px-lg-3 py-lg-4" href="?controller=admin&action=editCenterIndex" style="color: #ffffff;">Edit Center</a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link px-lg-3 py-lg-4" href="?controller=about&action=index" style="color: #ffffff;">About</a>
            </li>

            <li class="nav-item">
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
            </li>
          </ul>
          <a class="btn btn-light ms-lg-auto ps-4 pe-4 rounded-pill" href="?controller=admin&action=signInPage">Admin</a>
        </div> -->
      </div>
    </nav>
  </header>

  <br><?php echo "controller = " . $controller . ", action = " . $action; ?>
  <?php require_once("routes.php") ?>
</body>

</html>