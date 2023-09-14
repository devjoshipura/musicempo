<?php
include("./include/config.php");
$qry="DELETE FROM cart WHERE ID='".$_REQUEST['id']."'";
$res=mysqli_query($conn,$qry);
if($res){
    header("location:cart.php");
}
?>