<?php
include 'connect.php';
$cid=$_GET['updatename'];
$sql="select * from cast where cid='$cid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$cid=$row['cid'];
$cname=$row['cname'];
 $divison=$row['divison'];
 $cdesg=$row['cdesg'];
 $cphone=$row['cphone'];

if(isset($_POST['submit'])){
  $cid=$_POST['cid'];
  $cname=$_POST['cname'];
  $divison=$_POST['divison'];
  $cdesg=$_POST['cdesg'];
  $cphone=$_POST['cphone'];
  $sql="update cast set cid='$cid',cname='$cname',divison='$divison',cdesg='$cdesg',cphone='$cphone' where cid='$cid'";
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
    <body bgcolor="yellow">
    <div class="container my-5">
        <form method="post">
  <div class="form-group">
    <label>ID</label>
    <input type="text" class="form-control" 
     placeholder="Enter ID" name="cid" autocomplete="off" value=<?php echo $cid ;?>>
 </div>
 <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" 
     placeholder="Enter name" name="cname"  autocomplete="off" value=<?php echo $cname ;?>>
 </div>  
 <div class="form-group">
    <label>Division</label>
    <input type="text" class="form-control" 
     placeholder="Enter divison" name="divison" autocomplete="off" value=<?php echo $divison ;?>>
 </div>
 <div class="form-group">
    <label>Designation</label>
    <input type="text" class="form-control" 
     placeholder="Enter designation" name="cdesg"  autocomplete="off" value=<?php echo $cdesg ;?>>
 </div>
 <div class="form-group">
    <label>Mail</label>
    <input type="email" class="form-control" 
     placeholder="Enter phone" name="cphone"  autocomplete="off" value=<?php echo $cphone ;?>>
 </div>
 
  <button type="submit" class="btn btn-primary " name="submit">update</button>
</form>
    </div>

  </body>
</html>