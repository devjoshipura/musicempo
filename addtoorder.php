<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once("./include/config.php");
$subqry="SELECT address FROM user WHERE ID='".$_SESSION['loginid']."'"; 
$subres=mysqli_query($conn,$subqry);
$subrow=mysqli_fetch_row($subres);
$address="home";
date_default_timezone_set('Asia/Kolkata');
$currentdate=date("Y/m/d h:i:s");
$qry="SELECT * FROM cart WHERE userid='".$_SESSION['loginid']."'"; 
$res=mysqli_query($conn,$qry);
while($row=mysqli_fetch_assoc($res)){
    print_r($row);
    $subqry="INSERT INTO orders (productid,userid,cartid,quantity,date,address,status) VALUES ('".$row['productid']."','".$_SESSION['loginid']."','".$row['ID']."','".$row['quantity']."','".$currentdate."','".$subrow[0]."','active')";
   echo $subqry;
    $subres=mysqli_query($conn,$subqry);
    header("location:order.php");
}
?>