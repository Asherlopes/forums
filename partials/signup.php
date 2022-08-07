<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_connect.php';
    $user_email = $_POST['user_email'];
    $pass = $_POST['user_password'];
    $cpass = $_POST['user_cpassword'];

    // Check whether this email exists
    $existSql = "select * from `users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
       /* $showError = '<div class="alert alert-warning">
        <strong>Oops!</strong> You have already registered pleasee login or use different email
      </div>';
       // echo $showError;*/
        $showError = true;
        //  echo "success";
        echo '<div class="alert alert-success">
        <strong>Success!</strong>Now you can login
      </div>';
          header("Location: /forum/index.php?alreadyuser=true");
          exit();
      //  header("Location:/forum/index.php");
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_password`, `created_at`) VALUES ( '$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                $showAlert = true;
              //  echo "success";
              echo '<div class="alert alert-success">
              <strong>Success!</strong>Now you can login
            </div>';
                header("Location: /forum/index.php?signupsuccess=true");
                exit();
            }

        }
        else{
         /*   $showError = '<div class="alert alert-success">
            <strong>Oopss!</strong> Pleasee enter same password.
          </div>'; 
            echo $showError;
*/
            $showError = false;
            //  echo "success";
            echo '<div class="alert alert-success">
            <strong>Success!</strong>Now you can login
          </div>';
              header("Location: /forum/index.php?signuppassword=false");
              exit();
        }
    }
   // header("Location: /forum/index.php?signupsuccess=false&error=$showError");

}
?>









