<?php
include("include/config.php");
extract($_POST);

$qry="INSERT INTO user (name,email,password) VALUES ('".$name."','".$email."','".md5($password)."')";
$res=mysqli_query($conn,$qry);
if($res){
    header("location:login.php");
}
else{
    header("location:register.php");
}
?>