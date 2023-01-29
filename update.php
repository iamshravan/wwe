<?php
include 'connect.php';
$name=$_GET['updatename'];
$sql="select * from superstar where name='$name'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$age=$row['age'];
$sex=$row['sex'];
$height=$row['height'];
$weight=$row['weight'];
$finisher=$row['finisher'];
$status=$row['status'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $age=$_POST['age'];
  $sex=$_POST['sex'];
  $height=$_POST['height'];
  $weight=$_POST['weight'];
  $finisher=$_POST['finisher'];
  $status=$_POST['status'];

  $sql ="update superstar set name='$name',age=$age,sex='$sex',height=$height,weight=$weight,finisher='$finisher',status='$status' where name='$name'";
  $result=mysqli_query($con,$sql);
  if($result){
   //echo "Data updated sucessfully";
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
    <body bgcolor="yellow">
    <div class="container my-5">
        <form method="post">
  <div class="form-group">
    <label>Superstar Name</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Name" name="name" autocomplete="off" value=<?php echo $name;?>>
 </div>
 <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Age" name="age"  autocomplete="off" value=<?php echo $age;?>>
 </div>  
 <div class="form-group">
    <label>Sex</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar sex" name="sex" autocomplete="off" value=<?php echo $sex;?>>
 </div>
 <div class="form-group">
    <label>Height</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar height" name="height"  autocomplete="off" value=<?php echo $height;?>>
 </div>
 <div class="form-group">
    <label>Weight</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Weight" name="weight"  autocomplete="off" value=<?php echo $weight;?>>
 </div>
 <div class="form-group">
    <label>Finisher</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Finisher" name="finisher"  autocomplete="off" value=<?php echo $finisher;?>>
 </div>
 <div class="form-group">
    <label>Status</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar status" name="status" value=<?php echo $status;?>>
 </div>
 
  <button type="submit" class="btn btn-primary " name="submit">update</button>
</form>
    </div>

  </body>
</html>