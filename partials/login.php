

<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_connect.php';
    $email = $_POST['login_email'];
    $user_pass = $_POST['login_password'];
     
    $sql = "Select * from users where user_email='$email'";
    $result = mysqli_query($conn, $sql);
   // echo " $email";
  // echo " $user_pass";
    //$pass = $row['user_password'];
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($user_pass, $row['user_password'])){
            session_start();
           $_SESSION['loggedin'] = true;
         //   $_SESSION['s_no'] = $row['s_no'];
            $_SESSION['user_email'] = $email;
          //  $_SESSION['loggedin'] = true;
            echo "logged in". $email;
        } 
        else{
          echo " error";
    }
        //header("Location: /forum/index.php");  
    }
    //echo "error";
   // header("Location: /forum/index.php");  
}

?>