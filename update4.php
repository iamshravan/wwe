<?php
include 'connect.php';
$gnum=$_GET['updatename'];
$sql="select * from gear where gnum=$gnum";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$gnum=$row['gnum'];
$gsname=$row['gsname'];
$gtitle=$row['gtitle'];
$pyro=$row['pyro'];
$theme=$row['theme'];
$prop=$row['prop'];
if(isset($_POST['submit'])){
  $gnum=$_POST['gnum'];
  $gsname=$_POST['gsname'];
  $gtitle=$_POST['gtitle'];
  $pyro=$_POST['pyro'];
  $theme=$_POST['theme'];
  $prop=$_POST['prop'];

  $sql ="update gear set gnum=$gnum,gsname='$gsname',gtitle='$gtitle',pyro='$pyro',theme='$theme',prop='$prop' where gnum=$gnum ";
  $result=mysqli_query($con,$sql);
  if($result){
   // echo "Data inserted sucessfully";
   header('location:display4.php');
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
    <label>Gear Number</label>
    <input type="number" class="form-control" 
     placeholder="Enter Gear Number" name="gnum" autocomplete="off" value=<?php echo $gnum ;?>>
 </div>
 <div class="form-group">
    <label>Superstar Name</label>
    <input type="text" class="form-control" 
     placeholder="Enter Superstar Name" name="gsname"  autocomplete="off" value=<?php echo $gsname ;?>>
 </div>  
 <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" 
     placeholder="Enter Title name" name="gtitle" autocomplete="off" value=<?php echo $gtitle ;?>>
 </div>
 <div class="form-group">
    <label>Pyro</label>
    <input type="text" class="form-control" 
     placeholder="Enter Pyro Settings" name="pyro"  autocomplete="off" value=<?php echo $pyro ;?>>
 </div>
 <div class="form-group">
    <label>Theme</label>
    <input type="text" class="form-control" 
     placeholder="Enter Theme Setup" name="theme"  autocomplete="off" value=<?php echo $theme ;?>>
 </div>
 <div class="form-group">
    <label>Prop</label>
    <input type="text" class="form-control" 
     placeholder="Enter Prop If Any" name="prop"  autocomplete="off" value=<?php echo $prop ;?>>
 </div>
 
  <button type="submit" class="btn btn-primary " name="submit">update</button>
</form>
    </div>

  </body>
</html>