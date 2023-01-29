<?php
include 'connect.php';
if(isset($_GET['deletename'])){
    $division=$_GET['deletename'];

    $sql="delete from division where SIno='$division'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"deleted sucessfully";
       header('location:display1.php');
    }else{
        die(mysqli_error($con));
    }
}