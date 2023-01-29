<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $age=$_POST['age'];
  $sex=$_POST['sex'];
  $height=$_POST['height'];
  $weight=$_POST['weight'];
  $finisher=$_POST['finisher'];
  $status=$_POST['status'];

  $sql ="insert into superstar( name,age,sex,height,weight,finisher,status) values('$name',$age,'$sex',$height,$weight,'$finisher','$status') ";
  $result=mysqli_query($con,$sql);
  if($result){
   // echo "Data inserted sucessfully";
   header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required 
    meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
     <title></title>
  </head>
  <body>
  <center><h1><b>WWE SUPERSTARS</b></h1></center>
  <center><h5>Now.Then.Forever</h5></center>
    <body bgcolor="yellow">
    <div class="container">
        <form method="post">
  <div class="form-group">
    <label><b>Superstar Name</b></label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Name"  name="name" autocomplete="off">
 </div>
 <div class="form-group">
    <label><b>Age</b></label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Age" name="age"  autocomplete="off">
 </div>  
 <div class="form-group">
    <label><b>Sex</b></label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar sex" name="sex">
 </div>
 <div class="form-group">
    <label><b>Height</b></label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar height" name="height"  autocomplete="off">
 </div>
 <div class="form-group">
    <label><b>Weight</b></label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Weight" name="weight"  autocomplete="off">
 </div>
 <div class="form-group">
    <label></b>Finisher</b></label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Finisher" name="finisher"  autocomplete="off">
 </div>
 <div class="form-group">
    <label><b>Availability</b></label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar status" name="status">
 </div>
 
  <button type="submit" class="btn-link " name="submit">Submit</button>
</form>
    </div>

  </body>
</html>