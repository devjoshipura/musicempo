<?php
include_once("include/config.php");
if (isset($_POST['submit']) && ($_POST['submit'] == "add")) {
    extract($_POST);

    $filename = $_FILES['image']['name'];
    $newname = time() . '-' . $filename;
    $path = '../image/category/' . $newname;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        $catqry = "INSERT INTO category(categoryname,image) VALUES ('" . $categoryname . "','" . $newname . "')";
        mysqli_query($conn, $catqry);
        header("location:category.php");
    }
} elseif ($_POST['submit'] && $_POST['submit'] == "edit") {
    print_r($_POST);
    echo "<br>";
    print_r($_FILES);
    echo "<br>";
    extract($_POST);
    if ($_FILES['image']['name'] == NULL) {
        $qry = "UPDATE category SET categoryname='" . $categoryname . "' WHERE ID='" . $id . "'";
        $res = mysqli_query($conn, $qry);
        header("location:category.php");
    } else {
        $cquery = "SELECT * FROM category WHERE ID='" . $id . "'";
        $cres = mysqli_query($conn, $cquery);
        $drow = mysqli_fetch_assoc($cres);
        $image = $drow['image'];
        $imgpath = "../image/category/" . $image;
        // print_r($_FILES);
        // echo "<br>";
        // print_r($_POST);
        extract($_POST);
        $filename = $_FILES['image']['name'];
        $newname = time() . '-' . $filename;
        $path = '../image/category/' . $newname;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $qry = "UPDATE category SET categoryname='" . $categoryname . "' , image='" . $newname . "'WHERE ID='" . $id . "'";
            $res = mysqli_query($conn, $qry);
            unlink($imgpath);   
            header("location:category.php");
        }
    }
} elseif ($_REQUEST['val'] == "del") {
    extract($_REQUEST);
    $cquery = "SELECT * FROM category WHERE ID='" . $id . "'";
    $cres = mysqli_query($conn, $cquery);
    $drow = mysqli_fetch_assoc($cres);
    $image = $drow['image'];
    echo $image;
    $imgpath = "../image/category/" . $image;
    unlink($imgpath);   
    print_r($_REQUEST);
    extract($_REQUEST);
    $qry="DELETE FROM category WHERE ID='".$id."' ";
    $res=mysqli_query($conn,$qry);
    header("location:category.php"); 

echo $qry;
}
