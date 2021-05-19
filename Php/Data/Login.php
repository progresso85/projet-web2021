<?php
   session_start();
   include "Config.php";

   if(isset($_POST['email']) && isset($_POST['password'])){
      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }
      $email = validate($_POST['email']);
      $password = validate($_POST['password']);

      if(empty($email)){
         header("Location: ../View/LoginView.php?error=Email is required");
         exit();
      }else if(empty($password)){
         header("Location: ../View/LoginView.php?error=Password is required");
         exit();
      }else{
         $sql = "SELECT * FROM User WHERE email='$email' AND password='$password'";

         $result = mysqli_query($conn, $sql);

         if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['password'] === $password){
               $_SESSION['email'] = $row['email'];
               $_SESSION['lastName'] = $row['lastName'];
               header("Location: ../View/AccountView.php");
               exit();
            }else{
               header("Location: ../View/LoginView.php?error=Incorrect email and password");
               exit();
            }
         }else{
            header("Location: ../View/LoginView.php?error=Incorrect email and password");
            exit();
         }
      }
   }else{
      header("Location: ../View/LoginView.php");
      exit();
   }
?>