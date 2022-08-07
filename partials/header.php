<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


    <title></title>
  </head>
  <body>

 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iForums</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="contact.php">contact us</a></li>
            <li><a class="dropdown-item" href="about.php">about us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
      </ul>




 <form class="d-flex" action="search.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success me-2" type="submit" >Search</button>
      </form>
      <a href="#"  button class="btn btn-success me-2" type="submit" data-bs-toggle="modal" data-bs-target="#signupModal">Sign up</button></a>
      <a href="#"  button class="btn btn-success me-2" type="submit" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button></a>

    </div>
  </div>
</nav>
<?php
include("partials/loginmodal.php");
include("partials/signupmodal.php");
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo'<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <strong>success!</strong> Now you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
 
}


if(isset($_GET['signuppassword']) && $_GET['signuppassword']=="false"){
  echo'<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <strong>Oops!</strong> please enter same password.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['alreadyuser']) && $_GET['alreadyuser']=="true"){
  echo'<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
  <strong>Oops!</strong> You have already registered please login else use different email.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>


  
</html>
 