
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
<center><h1><b>CHAMPIONSHIP</b></h1></center>
  <center><h5>Now.Then.Forever</h5></center>
<div class="container">
    <button class="btn-link"><a href="user3.php" class="text-blue">Add Title</a>
</button>
<button class="btn-link"><a href="hom.html" class="text-blue" align=left>Home</a>
</button>
<button class="btn-link my-7"><a href="hom.html" class="text-blue">search</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Championship</th>
      <th scope="col">Superstar </th>
      <th scope="col">Division</th>
      <th scope="col">Rank</th>
      <th scope="col">Last Captured</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="select * from championship";
$result=mysqli_query($con,$sql);
if($result){
  
    while( $row=mysqli_fetch_assoc($result)){
      $SIno=$row['SIno'];
        $cname=$row['cname'];
        $csname=$row['csname'];
        $dname=$row['dname'];
        $rank=$row['rank'];
        $captured=$row['captured'];
        echo '<tr>
        <th scope="row">'.$cname.'</th>
        <td>'.$csname.'</td>
        <td>'.$dname.'</td>
        <td>'.$rank.'</td>
        <td>'.$captured.'</td>
        <td>
        <button class="btn-link"><a href="update3.php? updatename='.$SIno.'" class="text-blue">Update</a></button>
        <button class="btn-link"><a href="delete3.php? deletename='.$SIno.'" class="text-blue">Delete</a></button>
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