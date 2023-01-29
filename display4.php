
<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<center><h1><b>GEAR SETUP</b></h1></center>
  <center><h5>Now.Then.Forever</h5></center>
<div class="container">
    <button class="btn-link"><a href="user4.php" class="text-blue">Add Gear Set</a>
</button>
<button class="btn-link"><a href="hom.html" class="text-blue" align=left>Home</a>
</button>
<button class="btn-link my-7"><a href="hom.html" class="text-blue">search</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Gear Number</th>
      <th scope="col">Superstar Name</th>
      <th scope="col">Title</th>
      <th scope="col">Pyro</th>
      <th scope="col">Theme</th>
      <th scope="col">Prop</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="select * from gear";
$result=mysqli_query($con,$sql);
if($result){
  
    while( $row=mysqli_fetch_assoc($result)){
        $gnum=$row['gnum'];
        $gsname=$row['gsname'];
        $gtitle=$row['gtitle'];
        $pyro=$row['pyro'];
        $theme=$row['theme'];
        $prop=$row['prop'];
        echo '<tr>
        <th scope="row">'.$gnum.'</th>
        <td>'.$gsname.'</td>
        <td>'.$gtitle.'</td>
        <td>'.$pyro.'</td>
        <td>'.$theme.'</td>
        <td>'.$prop.'</td>
        <td>
        <button class="btn-link"><a href="update4.php? updatename='.$gnum.'" class="text-blue">Update</a></button>
        <button class="btn-link"><a href="delete4.php? deletename='.$gnum.'" class="text-blue">Delete</a></button>
      </td>
      </tr>';
    }
}



?>
   
  </tbody>
</table>
</div>
    
</body>
</html>