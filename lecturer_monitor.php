<?php
 session_start();
 require 'config.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="myAssetCss/bootstrap.css" rel="stylesheet" />

    <title>Lecturer Pagination</title>
  </head>
  <body>
    <h1>Lecturer Monitor</h1>
    <?php include('message.php')?>

    <a href="dashboard.php" class="btn btn-danger float-end mb-3">BACK</a>
    <a href="lecturer.php?page=" class="btn btn-info float-end mx-4 mb-3">Add User</a>

    <table class="table">
  <thead class="bg-dark text-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Lecturer Name</th>
      <th scope="col">Lecturer Surname</th>
      <th scope="col">Lecturer ID Number</th>
      <th scope="col">Staff Number</th>
      <th scope="col">Lecturer Email</th>
      <th scope="col">Lecturer Password</th>
      <th scope="col">Lecturer Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
       
     // @include 'config.php';


    $sql = "Select * from lecturer";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    $numPages = 4;
    $totalNumPages = ceil($num/$numPages);
   
    ///creating pagination buttons
    for($btn=1;$btn<= $totalNumPages;$btn++)
    {
       echo '<button class="btn btn-dark mx-1 mb-3"><a href="lecturer_monitor.php?page='.$btn.'" class="text-light">'.$btn.'</a></button>';
    }
    
    if($_GET['page'])
    {

        $page=$_GET['page'];
        //echo $page;
    }
    else{
        $page = 1;
    }

    $startingLimit = ($page-1)*$numPages;
    $sql ="SELECT * from lecturer limit ".$startingLimit.','.$numPages;
    $result = mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($result)) {
        # code...

        echo ' <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['lecturerName'].'</td>
        <td>'.$row['lecturerSurname'].'</td>
        <td>'.$row['idNum'].'</td>
        <td>'.$row['staffNum'].'</td>
        <td>'.$row['lecturerEmail'].'</td>
        <td>'.$row['lecturerPassword'].'</td>
        <td>
            <a href="lecturer-view.php?id= '.$row['id'].'" class="btn btn-info btn-sm">View</a>
            <a href="lecturer-edit.php?id= '.$row['id'].' " class="btn btn-success btn-sm">Edit</a>
            <form action="code.php" method="post" class="d-inline">
               <button type="submit"  name="delete_lecturer" value=" '.$row['id'].' " class="btn btn-danger btn-sm">Delete</button>

            </form>
        </td>
      </tr>';
    }

    ?>

   

  </tbody>
</table>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>