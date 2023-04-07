<?php
 session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Pagination</title>
  </head>
  <body>
    <h1>Student Details</h1>
    <?php include('message.php')?>

    <a href="dashboard.php" class="btn btn-danger float-end mb-3">BACK</a>
    <a href="student.php?page=" class="btn btn-info float-end mx-4 mb-3">Add Student</a>

    <table class="table">
  <thead class="bg-dark text-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">ID Number</th>
      <th scope="col">Student Number</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
       
      @include 'config.php';


    $sql = "Select * from student";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    $numPages = 5;
    $totalNumPages = ceil($num/$numPages);
   
    ///creating pagination buttons
    for($btn=1;$btn<= $totalNumPages;$btn++)
    {
       echo '<button class="btn btn-dark mx-1 mb-3"><a href="student_monitor.php?page='.$btn.'" class="text-light">'.$btn.'</a></button>';
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
    $sql ="SELECT * from student limit ".$startingLimit.','.$numPages;
    $result = mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($result)) {
        # code...

        echo ' <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['studName'].'</td>
        <td>'.$row['studSurname'].'</td>
        <td>'.$row['studID'].'</td>
        <td>'.$row['studentNum'].'</td>
        <td>'.$row['studEmail'].'</td>
        <td>'.$row['studPassword'].'</td>
        <td>
            <a href="student-view.php?id= '.$row['id'].' " class="btn btn-info btn-sm">View</a>
            <a href="student-edit.php?id= '.$row['id'].' " class="btn btn-success btn-sm">Edit</a>
            
            <form action="code.php" method="post" class="d-inline">
                  <button type="submit"  name="delete_student" value=" '.$row['id'].' " class="btn btn-danger btn-sm">Delete</button>

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