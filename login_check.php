<?php 
session_start();
include("include/config.php");
extract($_POST);
print_r($_POST);

$qry="SELECT * FROM user WHERE email='".$email."'AND password='".md5($password)."'";
$res=mysqli_query($conn,$qry);
$count=mysqli_num_rows($res);
$row=mysqli_fetch_row($res);
if($count>0){
    $_SESSION['loginstatus']=true;
    $_SESSION['loginid']=$row[0];
    header("location:index.php");
}
?>