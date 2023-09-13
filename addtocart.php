<?php
session_start();
include("./include/config.php");
$qry="INSERT INTO cart (productid,userid,quantity) VALUES ('".$_REQUEST['prodid']."','".$_SESSION['loginid']."',1)";
$res=mysqli_query($conn,$qry);
if($res){
    echo "true";
    header("location:cart.php");
}
else{
    echo "false";
}
?>