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
    <title>forums!!!</title>
</head>

<body>
    <?php
    require("partials/header.php");
    include("partials/db_connect.php");
    ?>
    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="https://source.unsplash.com/2400x700/?coding,imac" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="https://source.unsplash.com/2400x700/?coding,windows" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x700/?coding,microsoft" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-3 ">
        <h2 class=text-center>welcome to forums</h2>
        <div class=row>
            <!--loop-->
            <?php
     $sql = "SELECT * FROM `category`";
     $result = mysqli_query($conn, $sql);
   
       // We can fetch in a better way using the while loop
      
       while($row = mysqli_fetch_assoc($result)){
          //  echo var_dump($row);
       // echo ".$row['category_id'].";
           $desc= $row["c_description"];
         //  $cat_id=$row["category_id"];
      echo
     '  <div class="col-md-4">
       <div class="card my-2" style="width: 18rem; ">
    
         <img src="https://source.unsplash.com/1000x600/?coding,'.$row["c_name"].'" class="card-img-top " alt="...">
          <div class="card-body">
           <h5 class="card-title">'.$row["c_name"].'</h5>
         <p class="card-text">'.substr($desc,0,100).'....</p>
          <a href="explore.php?cat_id='.$row["category_id"].'" class="btn btn-primary">Explore</a>
  
 </div>
 </div>
 </div>';
   
    
       }
    
    ?>





        </div>
    </div>



    <!--footer-->
    <?php

require("partials/footer.php");

?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->




</body>

</html> 