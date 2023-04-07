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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Edit</title>
  </head>
  <body>

      <div class="container mt-5">
      <?php include('message.php')?>


         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Update
                            <a href="student_monitor.php?page=" class="btn btn-danger float-end">BACK</a>
                        </h4>

                    </div>
                    <div class="card-body">
                       <?php
                            if(isset($_GET['id']))
                            {
                                //$student_id = mysqli_real_escape_string($conn,$_GET['id']);

                                $student_id = mysqli_real_escape_string($conn,$_GET['id']);
                                $query = "SELECT * FROM student WHERE id = '$student_id' ";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $student = mysqli_fetch_array($query_run);
                                    //print_r($student);
                                    ?>
                                        <form action="code.php" method="post">
                                        <!-- <div class="mb-3"> -->
                                                <input type="text" name="student_id" hidden value="<?=$student['id']?>" class="form-control" required placeholder="Enter your Full Name">
                                            

                                            <div class="mb-3">
                                                <label>Student Name</label>
                                                <input type="text" name="studName" value="<?=$student['studName']?>" class="form-control" required placeholder="Enter your Full Name">
                                            </div>

                                            <div class="mb-3">
                                                <label>Student Surname</label>
                                                <input type="text" name="studSurname" value="<?=$student['studSurname']?>"  class="form-control" required placeholder="Enter your Surname">
                                            </div>


                                            <div class="mb-3">
                                                <label>Student Number</label>
                                                <input type="text" name="studentNum" value="<?=$student['studentNum']?>"  class="form-control " required placeholder="Enter student number">
                                            </div>


                                            <div class="mb-3">
                                                <label>Student ID Number</label>
                                                <input type="text" name="studID" value="<?=$student['studID']?>" class="form-control" required placeholder="Enter your ID number">
                                            </div>

                                            <div class="mb-3">
                                                <label>Student Email</label>
                                                <input type="text" name="studEmail" value="<?=$student['studEmail']?>" class="form-control" required placeholder="Enter your Email">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label>Student Password</label>
                                                <input type="password" name="studPassword" value="<?=$student['studPassword']?>" class="form-control" required placeholder="Enter your Password">
                                            </div>

                                            <div class="mb-3">
                                                <label>Confirm Password</label>
                                                <input type="password" name="studConPassword" value="<?=$student['studPassword']?>" class="form-control" required placeholder="Confirm your password">
                                            </div>

                                            <div class="mb-3">
                                                <button type="submit" name="update_student" class="btn btn-primary">update Student</button>
                                            
                                            </div>

                                        </form>

                                    <?php
                                }
                                else{

                                    echo "<h4>No Such ID Exist</h4>";
                                }
                            }
                        
                       ?>        
                    </div>
                </div>
            </div>

         </div>
      </div>
       

  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>