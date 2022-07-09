<?php

include_once '../connection/connect.php';
session_start();

if(isset($_POST['login'])){
    $username=$_POST['email-or-username'];
    $password=$_POST['password'];

    if(empty($usename) && empty($password)){
        echo '<div class="alert alert-danger">username and password require </div>'; 
    }
    else{
        $password=md5($password);
        $query="SELECT * from user WHERE username='$username' AND password='$password' OR email='$username' AND password='$password'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            $user=mysqli_fetch_assoc($result);
            $_SESSION['user_id']=$user['id'];
            $_SESSION['user_name']=$user['username'];
            
            header("Location:../index.php");
            
            
        }
        else{
            echo '<div class="alert alert-danger">Error in username or password </div>'; 
            header('Location:login.php');
        }
    }


}


?>