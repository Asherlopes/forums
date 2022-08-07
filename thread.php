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
    <!--header-->
    <?php
    require("partials/header.php");
    include("partials/db_connect.php");
    ?>

    <?php
     //  $cat_id=$row["category_id"];
    $id= $_GET['thread_id'];
   // $cat_id=$row["category_id"];
  // "SELECT * FROM `category` WHERE category_id = $id"
    $sql = "SELECT * FROM `explore` WHERE thread_id = $id";
    $result = mysqli_query($conn, $sql);
  
      // We can fetch in a better way using the while loop
     
      while($row = mysqli_fetch_assoc($result)){
      //  $cat_id=$row["category_id"];
      $t_name=$row['thread_name'];
      $t_desc=$row['thread_desc'];
      // need to display the title n description from database by using category id
      
      }
    
    ?>


<div class="container my-4">
  <div class="jumbotron">
    <h1><?php echo $t_name ?></h1>      
    <p><?php echo $t_desc ?></p>
    <hr class="my-4">
<p><b>Posted by Asher </b></p>

    </div>
    </div>
<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
  $id=$_GET['thread_id'];
  $comment = $_POST['comment'];
 // $desc = $_POST['thread_desc'];
 //  echo"$id";
 //$sql=" INSERT INTO `comment` ( `comment`, `thread_id`) VALUES ( '$comment','$id')";
 $sql="INSERT INTO `comment` ( `comment`, `thread_id`) VALUES ('$comment','$id')";

//$sql=" INSERT INTO `explore` ( 'thread_cat_id',`thread_name`, `thread_desc`) VALUES ('$cat_id','$title', '$desc')";
$result = mysqli_query($conn,$sql);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Comment Posted Succesfully!!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   
}else{
    echo "not submitted".mysqli_error($conn);
}
}


?>





    <div class="container">
  <h2 >Add Comments</h2>     
</div>
<div class="container">

<form action="<?php echo $_SERVER['REQUEST_URI']?>" method='post'>
  <div class="form-group">
   <B> <label for="comment"> COMMENT:</label></B>
    <textarea name="comment" id="title" cols="30" rows="2" class="form-control"placeholder="Enter comment"></textarea>
  </div>

 
  <button type="submit" class="btn btn-success">POST</button>
</form>

</div>

<h2 class="text-center" >Discussions</h2>

<?php
 $id= $_GET['thread_id'];
$sql = "SELECT * FROM `comment` WHERE thread_id = $id";
    $result = mysqli_query($conn, $sql);
  
      // We can fetch in a better way using the while loop
     $no_result = true;
      while($row = mysqli_fetch_assoc($result)){
      $no_result = false;
        //  $cat_id=$row["category_id"];
      $comment=$row['comment'];
        $comment = str_replace("<", "&lt;", $comment);
        $comment = str_replace(">", "&gt;", $comment); 
      $time = $row['comment_time'];
      // need to display the title n description from database by using category id
    echo'  <div class="container  ">
      <div class="media border p-3 ">
        <img src="149071.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:20px;">
        <div class="media-body">
        <p>Posted at: '.$time.'</p>
          <h5>  <small><i>  '. $comment .'.</i></small></a></h5>
         
        </div>
      </div>
      </div>';
    

      }
if($no_result){
  //echo"no result found";
  echo' <div class="container">
  <div class="jumbotron">
  <h1>NO COMMENTS FOUND!!</h1>
  <p>BE THE FIRST PERSON TO ADD THE COMMENT</p>
</div>
</div>
  ';
}

?>

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

