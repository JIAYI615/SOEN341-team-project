<?php
session_start();
include '../php/dbConn.php'; 
$LogEmail=$_POST['LogEmail'];
$LogPassWord=$_POST['LogPassWord'];
include '../php/functions.php';
if(loginValidInput($LogEmail,$LogPassWord)){
    echo "<script type='text/javascript'>alert('please fill all the blanks');</script>";
}else{
$sql= "select * from Users where Email ='$LogEmail' and Password ='$LogPassWord'";
$result = mysqli_query($db,$sql);
if ($result->num_rows>0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION["Username"]=$row["Username"];
    $_SESSION["user_id"]=$row["id"];
    $_SESSION["Email"]=$row["Email"];
    header("location:../php/Homepage.php");
}else{
    header("location:../php/signupForm.php");
}
}

?>