
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
<center><h1><b>CREWMATES</b></h1></center>
  <center><h5>The place where the champs work</h5></center>
<div class="container">
    <button class="btn-link"><a href="user2.php" class="text-blue">Add crewmates</a>
</button>
<button class="btn-link"><a href="hom.html" class="text-blue" align=left>Home</a>
</button>
<button class="btn-link my-7"><a href="search2.php" class="text-blue">search</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Crew ID</th>
      <th scope="col">Crew name</th>
      <th scope="col">Division</th>
      <th scope="col">Designation</th>
      <th scope="col">Email</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="select * from cast";
$result=mysqli_query($con,$sql);
if($result){
  
    while( $row=mysqli_fetch_assoc($result)){;
        $cid=$row['cid'];
        $cname=$row['cname'];
        $divison=$row['divison'];
        $cdesg=$row['cdesg'];
        $cphone=$row['cphone'];
        echo '<tr>
        <th scope="row">'.$cid.'</th>
        <td>'.$cname.'</td>
        <td>'.$divison.'</td>
        <td>'.$cdesg.'</td>
        <td>'.$cphone.'</td>
        <td>
        <button class="btn-link"><a href="update2.php? updatename='.$cid.'" class="text-blue">Update</a></button>
        <button class="btn-link"><a href="delete2.php? deletename='.$cid.'" class="text-blue">Delete</a></button>
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