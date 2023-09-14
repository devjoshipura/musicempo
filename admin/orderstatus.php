<?php
include("./include/config.php");
$qry="update orders set status='delivered' where ID='".$_REQUEST['id']."'";
$res=mysqli_query($conn,$qry);
if($res){
    header("location:order.php");
}
else{
    header("location:order.php");
}
?>