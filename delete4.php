<?php
include 'connect.php';
if(isset($_GET['deletename'])){
    $gnum=$_GET['deletename'];

    $sql="delete from gear where gnum='$gnum'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"deleted sucessfully";
       header('location:display4.php');
    }else{
        die(mysqli_error($con));
    }
}