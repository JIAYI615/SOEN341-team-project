<?php
include '../functions.php';
session_start();
$id=$_GET['id'];
$_SESSION['shops'][$id]['ShopQ']++;
CartAdd($_SESSION['shops'][$id]['ShopQ'], $_SESSION['shops'][$id]['quantity']);
//if($_SESSION['shops'][$id]['ShopQ']>$_SESSION['shops'][$id]['quantity']){
//    $_SESSION['shops'][$id]['ShopQ']=$_SESSION['shops'][$id]['quantity'];
//}
echo "<script>location='../p4_shopCart.php'</script>";
?>