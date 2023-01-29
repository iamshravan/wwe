<?php
include 'connect.php';
if(isset($_POST['submit'])){
 
  $division=$_POST['division'];
  $pgday=$_POST['pgday'];
  $pgdate=$_POST['pgdate'];
  $pghour=$_POST['pghour'];
  $Venue=$_POST['Venue'];

  $sql ="insert into division(division,pgday,pgdate,pghour,Venue) values('$division','$pgday','$pgdate',$pghour,'$Venue') ";
  $result=mysqli_query($con,$sql);
  if($result){
   // echo "Data inserted sucessfully";
   header('location:display1.php');
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
    <label>Division</label>
    <input type="text" class="form-control" 
     placeholder="Enter Division / House show" name="division" autocomplete="off">
 </div>
 <div class="form-group">
    <label>Programing Day</label>
    <input type="text" class="form-control" 
     placeholder="Enter Programming day" name="pgday"  autocomplete="off">
 </div>  
 <div class="form-group">
    <label>Program date</label>
    <input type="date" class="form-control" 
     placeholder="Enter the on air date" name="pgdate" autocomplete="off">
 </div>
 <div class="form-group">
    <label>Programming Hours</label>
    <input type="number" class="form-control" 
     placeholder="Enter Broadcasting time" name="pghour"  autocomplete="off">
 </div>
 <div class="form-group">
    <label>Venue</label>
    <input type="text" class="form-control" 
     placeholder="Enter the venue" name="Venue"  autocomplete="off">
 </div>
  <button type="submit" class="btn btn-primary " name="submit">Submit</button>
</form>
    </div>

  </body>
</html>