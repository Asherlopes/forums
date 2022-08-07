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
    $id= $_GET['cat_id'];
   // $cat_id=$row["category_id"];
    $sql = "SELECT * FROM `category` WHERE category_id = $id";
    $result = mysqli_query($conn, $sql);
  
      // We can fetch in a better way using the while loop
     
      while($row = mysqli_fetch_assoc($result)){
      //  $cat_id=$row["category_id"];
      
      $c_name=$row['c_name'];
      $c_desc=$row['c_description'];
      // need to display the title n description from database by using category id
         
       
      }
    
    ?>
   <div class="container my-4 "  >
   <div class="jumbotron bg-light text-center " >
  <h1 class="display-4">welcome to <?php echo"$c_name"?> forums</h1>
  <p class="lead"><?php echo"$c_desc"?></p>
  <button type="submit" class="btn btn-success">Know more</button>
</div>
</div>
<?php

//if(isset($_POST['post'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
  $id=$_GET['cat_id'];
  $title = $_POST['thread_name'];
   $title = str_replace("<", "&lt;", $title);
   $title = str_replace(">", "&gt;", $title); 
  $desc = $_POST['thread_desc'];
   $desc = str_replace("<", "&lt;", $desc);
   $desc = str_replace(">", "&gt;", $desc); 
  // echo"$id";
 $sql=" INSERT INTO `explore` ( `thread_name`, `thread_desc`, `thread_cat_id`) VALUES ( '$title', '$desc', '$id')";


//$sql=" INSERT INTO `explore` ( 'thread_cat_id',`thread_name`, `thread_desc`) VALUES ('$cat_id','$title', '$desc')";
$result = mysqli_query($conn,$sql);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success!</strong> Question submitted succesfully soon people will answer your question!!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   
}else{
    echo "not submitted".mysqli_error($conn);
}
}


?>



<DIV class="container">

<div class="jumbotron">
<form action="<?php echo $_SERVER['REQUEST_URI']?>" method ="post">
  <div class="form-group">
    <h2>Ask a Question</h2>
    <label for="title">Question Title:</label>
    <input type="text" class="form-control" placeholder="Enter title" id="name" name="thread_name">
  </div>
  <div class="form-group">
    <label for="desc">Description:</label>
    <textarea type="text" class="form-control" placeholder="Enter description" id="desc" name="thread_desc"></textarea>
  </div>
  <div class="form-group form-check">
  
  </div>
  <button type="submit" class="btn btn-success" >Submit</button>
</form>
    </div>
</DIV>








<h2 class="text-center" >Browse questions</h2>




<?php
 $id= $_GET['cat_id'];
$sql = "SELECT * FROM `explore` WHERE thread_cat_id = $id";
    $result = mysqli_query($conn, $sql);
  
      // We can fetch in a better way using the while loop
     $no_result = true;
      while($row = mysqli_fetch_assoc($result)){
      $no_result = false;
        //  $cat_id=$row["category_id"];
      $question=$row['thread_name'];
      $thread_desc=$row['thread_desc'];
      $user_id =$row['thread_user_id'];
     $time=$row['created_at'];
      // need to display the title n description from database by using category id
    echo'  <div class="container  ">
      <div class="media border p-3 ">
        <img src="149071.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:20px;">
        <div class="media-body">
          <h5> <a href="thread.php?thread_id='.$row['thread_id'].' " class="text-dark"> <small><i>  '. $question .'?</i></small></a></h5>
      
          <p>'. $thread_desc .'.</p>
        </div>
      </div>
      </div>';
    

      }
if($no_result){
  //echo"no result found";
  echo' <div class="container">
  <div class="jumbotron">
  <h1>NO RESULT FOUND!!</h1>
  <p>BE THE FIRST PERSON TO ASK THE QUESTION</p>
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

<!-- extra script for paggination-->


  








</body>

</html>