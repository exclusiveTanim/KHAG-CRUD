<?php
   include('database.php');
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
   //session_start();
   $user_check = $_SESSION['login_user'];
   //echo "From check User :".$user_check;
   
   $sql = mysqli_query($conn,"SELECT id,firstname FROM Student WHERE email='$user_check'");
   
   $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
   
   $login_session = $row['firstname'];
   $login_user_id = $row['id'];
   //echo "From Session PHP: ".$login_session;
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>