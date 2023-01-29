
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
<center><h1><b>Pay-Per-Views</b></h1></center>
  <center><h5>Now.Then.Forever</h5></center>
<div class="container">
    <button class="btn-link"><a href="user1.php" class="text-blue">Add division info</a>
</button>
<button class="btn-link"><a href="hom.html" class="text-blue" align=left>Home</a>
</button>
</button>
<button class="btn-link my-7"><a href="search1.php" class="text-blue">search</a>
</button>
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Division</th>
      <th scope="col">Program day</th>
      <th scope="col">Program date</th>
      <th scope="col">Program hours</th>
      <th scope="col">Venue</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="select * from division";
$result=mysqli_query($con,$sql);
if($result){
  
    while( $row=mysqli_fetch_assoc($result)){;
        $SIno=$row['SIno'];
        $division=$row['division'];
        $pgday=$row['pgday'];
        $pgdate=$row['pgdate'];
        $pghour=$row['pghour'];
        $Venue=$row['Venue'];
        echo '<tr>
        <th scope="row">'.$division.'</th>
        
        <td>'.$pgday.'</td>
        <td>'.$pgdate.'</td>
        <td>'.$pghour.'</td>
        <td>'.$Venue.'</td>
        <td>
        <button class="btn-link"><a href="update1.php? updatename='.$SIno.'" class="text-blue">Update</a></button>
        <button class="btn-link"><a href="delete1.php? deletename='.$SIno.'" class="text-blue">Delete</a></button>
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