
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
  <center><h1><b>WWE SUPERSTARS</b></h1></center>
  <center><h5>Now.Then.Forever</h5></center>
<div class="container">
    <button class="btn-link"><a href="user.php" class="text-blue">Add Superstar</a>
</button>
<button class="btn-link my-7"><a href="hom.html" class="text-blue">Home</a>
</button>
</button>
<button class="btn-link my-7"><a href="search.php" class="text-blue">Search</a>
</button>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">Superstar Name</th>
      <th scope="col">Age</th>
      <th scope="col">Sex</th>
      <th scope="col">Height</th>
      <th scope="col">Weight</th>
      <th scope="col">Finisher</th>
      <th scope="col">Availability</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="select * from superstar";
$result=mysqli_query($con,$sql);
if($result){
  
    while( $row=mysqli_fetch_assoc($result)){
        $name=$row['name'];
        $age=$row['age'];
        $sex=$row['sex'];
        $height=$row['height'];
        $weight=$row['weight'];
        $finisher=$row['finisher'];
        $status=$row['status'];
        echo '<tr>
        <th scope="row">'.$name.'</th>
        <td>'.$age.'</td>
        <td>'.$sex.'</td>
        <td>'.$height.'</td>
        <td>'.$weight.'</td>
        <td>'.$finisher.'</td>
        <td>'.$status.'</td>
        <td>
        <button class="btn-link"><a href="update.php? updatename='.$name.'" class="text-blue">Update</a></button>
        <button class="btn-link"><a href="delete.php? deletename='.$name.'" class="text-green">Delete</a></button>
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