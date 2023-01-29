<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <center><h1><b>Pay.Per.Views</b></h1></center>
  <center><h5>Now.Then.Forever</h5></center>
    <div class= "container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card.header">
                        
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="searchdata" class="form-control" placeholder="Seacrh record (Division,Program day)" autocomplete ="off">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <button  type ="submit" name="filterbutton" class="btn-link my-7">Seacrh</button>
                                <button class="btn-link my-7"><a href="display1.php" class="text-blue">Back</a>
</button>
                            </div>
                            
                        </form>
                        <table class="table table-bordered" >
                            <thead>
                                <tr>
                                <th scope="col">Division</th>
                                <th scope="col">Program day</th>
                                <th scope="col">Program date</th>
                                <th scope="col">Program hours</th>
                                <th scope="col">Venue</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $connection = mysqli_connect ("localhost:3308","root","","wwedemo");
                                if(isset($_POST['filterbutton']))
                                {
                                    $value_filter = $_POST['searchdata'];
                                    $query = "select * from division where concat(division,pgday) like '%$value_filter%' ";
                                    $query_run = mysqli_query($connection, $query);
                                    if(mysqli_num_rows( $query_run) > 0)
                                    {
                                        while($row = mysqli_fetch_array( $query_run))
                                        {
                                           
                                            ?>
                                            <tr>
                                            <td><?php  echo $row['division']; ?></td>
                                            <td><?php  echo $row['pgday']; ?></td>
                                            <td><?php  echo $row['pgdate']; ?></td>
                                            <td><?php  echo $row['pghour']; ?></td>
                                            <td><?php  echo $row['Venue']; ?></td>
                                         
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="6">no record found</td>
                                        </tr>
                                        <?php
                                    }
                                }

                                ?>
                        
                            
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
     </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>