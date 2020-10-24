<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['login_email'];
   
   $ses_sql = mysqli_query($conn,"select user_email from login where user_email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['user_email'];
   
   if(!isset($_SESSION['login_email'])){
      header("location: ../login.php");
      die();
   }
?>