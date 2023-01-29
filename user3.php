<?php
include 'connect.php';
if(isset($_POST['submit'])){

  $cname=$_POST['cname'];
  $csname=$_POST['csname'];
  $dname=$_POST['dname'];
  $rank=$_POST['rank'];
  $captured=$_POST['captured'];

  $sql ="insert into championship(cname,csname,dname,rank,captured) values('$cname','$csname','$dname',$rank,'$captured') ";
  $result=mysqli_query($con,$sql);
  if($result){
   // echo "Data inserted sucessfully";
   header('location:display3.php');
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
    <body bgcolor="yellow">
    <div class="container my-5">
        <form method="post">
  <div class="form-group">
    <label>Championship Name</label>
    <input type="text" class="form-control" 
     placeholder="Enter Title" name="cname" autocomplete="off">
 </div>
 <div class="form-group">
    <label>Superstar name</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Name" name="csname"  autocomplete="off">
 </div>  
 <div class="form-group">
    <label>Division</label>
    <input type="text" class="form-control" 
     placeholder="Enter Division" name="dname" autocomplete="off">
 </div>
 <div class="form-group">
    <label>Rank</label>
    <input type="number" class="form-control" 
     placeholder="Enter The Title Rank" name="rank"  autocomplete="off">
 </div>
 <div class="form-group">
    <label>Captured</label>
    <input type="date" class="form-control" 
     placeholder="Enter Updated Capture date" name="captured"  autocomplete="off">
 </div>
 
  <button type="submit" class="btn btn-primary " name="submit">Submit</button>
</form>
    </div>

  </body>
</html>