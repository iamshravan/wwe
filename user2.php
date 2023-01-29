<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $cid=$_POST['cid'];
  $cname=$_POST['cname'];
  $divison=$_POST['divison'];
  $cdesg=$_POST['cdesg'];
  $cphone=$_POST['cphone'];
  $sql="insert into cast (cid,cname,divison,cdesg,cphone) values('$cid','$cname','$divison','$cdesg','$cphone')";
  $result=mysqli_query($con,$sql);
  if($result){
   // echo "Data inserted sucessfully";
   header('location:display2.php');
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
  <center><h1><b>CREWMATES</b></h1></center>
  <center><h5>The place where the champs work</h5></center>
    <body bgcolor="yellow">
    <div class="container my-5">
        <form method="post">
  <div class="form-group">
    <label>ID</label>
    <input type="text" class="form-control" 
     placeholder="Enter ID" name="cid" autocomplete="off">
 </div>
 <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" 
     placeholder="Enter name" name="cname"  autocomplete="off">
 </div>  
 <div class="form-group">
    <label>Division</label>
    <input type="text" class="form-control" 
     placeholder="Enter divison" name="divison" autocomplete="off">
 </div>
 <div class="form-group">
    <label>Designation</label>
    <input type="text" class="form-control" 
     placeholder="Enter designation" name="cdesg"  autocomplete="off">
 </div>
 <div class="form-group">
    <label>Mail</label>
    <input type="email" class="form-control" 
     placeholder="Enter phone" name="cphone"  autocomplete="off">
 </div>
 
  <button type="submit" class="btn-link " name="submit">submit</button>
</form>
    </div>

  </body>
</html>