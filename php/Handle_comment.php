<?php 
//session_start();
include '../php/dbConn.php'; 
include '../php/functions.php';
$item_id=$_GET['item_id'];
$OrderNum=$_GET['order_id'];
$recommend=$_POST['recommend'];
$comment=$_POST['comment'];
$Time=time();
$new_status=1;
if(commentValidInput($recommend,$comment)){
    echo "<script type='text/javascript'>alert('please fill all the blanks');</script>";
}else{
    //change the order comment status so one item can't be commented twice
    $sql_status="update Order_item set comment_status='{$new_status}' where OrderNum={$OrderNum} and item_id={$item_id}";	
    if(mysqli_query($db,$sql_status)){
    }else{
        echo "<script type='text/javascript'>alert('fail to update!');</script>";
        }
    
    
    
    $sql1="insert into comments(item_id, recommend, comment, time) 
    values('$item_id','$recommend','$comment', '$Time')"; 
    if(mysqli_query($db,$sql1)){
        //echo "<script type='text/javascript'>alert('Successfully commented!');</script>";
        header("location:../php/OrderList.php");
    }else{
        echo "<script type='text/javascript'>alert('fail to comment!');</script>";
        }
}
?>