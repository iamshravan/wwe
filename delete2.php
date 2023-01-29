<?php
include 'connect.php';
if(isset($_GET['deletename'])){
    $cid=$_GET['deletename'];

    $sql="delete from cast where cid='$cid'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"deleted sucessfully";
       header('location:display2.php');
    }else{
        die(mysqli_error($con));
    }
}