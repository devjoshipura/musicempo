<?php   
    session_start();
    include("./include/config.php");
    extract($_POST);
    $qry="INSERT INTO contact (name,email,subject,message) VALUES ('".$name."','".$email."','".$subject."','".$message."')";
    $res=mysqli_query($conn,$qry);
    if($res){
        $_SESSION['contactadd']=true;
        header("location:contact.php");
    }
?>