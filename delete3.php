<?php
include 'connect.php';
if(isset($_GET['deletename'])){
    $cname=$_GET['deletename'];

    $sql="delete from championship where SIno='$cname'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"deleted sucessfully";
       header('location:display3.php');
    }else{
        die(mysqli_error($con));
    }
}