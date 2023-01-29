<?php
$con=new mysqli('localhost:3308','root','','wwedemo');
if($con){
    echo".";
}else
{
    die(mysqli_error($con));
} 
?>
