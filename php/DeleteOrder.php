<?php 
include '../php/header.php'; 
include '../php/dbConn.php'; 
$order_id=$_GET['Order_id'];

$cancel = mysqli_query($db,"select * from soen341.Orders where orderNum = '$order_id'");
$records = mysqli_fetch_array($cancel);
$sql2="insert into canceled_orders(orderNum, user_id, time, TotalCost, Payment, ship_address,Status) 
    values('{$records['orderNum']}','{$records['user_id']}','{$records['time']}', '{$records['TotalCost']}', '{$records['Payment']}', '{$records['ship_address']}','{$records['Status']}')";
if(mysqli_query($db,$sql2)){

}else{
        echo "<script type='text/javascript'>alert('delete cancel order');</script>";
    }

//$records = mysqli_query($db,"delete from soen341.Order_item where OrderNum = '$order_id'");
$records2 = mysqli_query($db,"delete from soen341.Orders where orderNum = '$order_id'");

//if($records){

//}else{
//    echo "<script type='text/javascript'>alert('delete order items fail');</script>";
//}

if($records2){

}else{
    echo "<script type='text/javascript'>alert('delete order items fail');</script>";
}
header("location:../php/OrderList.php");
?>