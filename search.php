<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
</head>
<body>

<?php
    require("partials/header.php");
    include("partials/db_connect.php");
    ?>

<?php 
      $noresults = true;
        $query = $_GET["search"];
     //   $sql = "SELECT * FROM `explore` where thread_name = $query ";
        $sql = "SELECT * from explore where match (thread_name, thread_desc) against ('$query')"; 
        $result = mysqli_query($conn, $sql);
        echo '<h4>SEARCHING RESULT FOR : '.$query.'</h4>';
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['thread_name'];
            $desc = $row['thread_desc']; 
         //   $thread_id= $row['thread_id'];
          //  $url = "thread.php?thread_id=". $thread_id;
          $url = " thread.php?thread_id=". $row['thread_id'] ;
         // "thread.php?threadid=". $thread_id;
            $noresults = false;
            // echo $title;
            // Display the search result
           //  echo '<h4>SEARCHING RESULT FOR : '.$query.'</h4>';
            echo '<div class="jumbotron jumbotron-fluid">
            <div class="result">
            <h3><a href="'. $url. '" class="text-dark">'. $title. '</a> </h3>
                        <p>'. $desc .'</p>
                  </div>
                  </div>'; 
            }
        if ($noresults){
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Results Found</p>
                        <p class="lead"> Suggestions: <ul>
                                <li>Make sure that all words are spelled correctly.</li>
                                <li>Try different keywords.</li>
                                <li>Try more general keywords. </li></ul>
                        </p>
                    </div>
                 </div>';
        }        
    ?>






<?php

require("partials/footer.php");

?>
</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</html>

