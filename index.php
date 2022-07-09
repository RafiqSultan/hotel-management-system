<?php
// *valdiator  of database
include_once "connection\connect.php";
session_start();
if(isset($_SESSION['user_id'])){
$user_id=$_SESSION['user_id'];
$query="SELECT * FROM user WHERE id= '$user_id'";
$result= mysqli_query($conn,$query);
$user=mysqli_fetch_assoc($result);

}
else{
    header('Location:php\login.php');
}



?>