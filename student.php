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

    <title>Student Page</title>
  </head>
  <body>

      <div class="container mt-5">
      <?php include('message.php')?>


         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Register Student
                            <a href="choose.php" class="btn btn-danger float-end">BACK</a>
                        </h4>

                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name="studName" class="form-control" required placeholder="Enter your Full Name">
                            </div>

                            <div class="mb-3">
                                <label>Student Surname</label>
                                <input type="text" name="studSurname" class="form-control" required placeholder="Enter your Surname">
                            </div>


                            <div class="mb-3">
                                <label>Student Number</label>
                                <input type="text" name="studentNum" class="form-control " required placeholder="Enter student number">
                            </div>


                            <div class="mb-3">
                                <label>Student ID Number</label>
                                <input type="text" name="studID" class="form-control" required placeholder="Enter your ID number">
                            </div>

                            <div class="mb-3">
                                <label>Student Email</label>
                                <input type="text" name="studEmail" class="form-control" required placeholder="Enter your Email">
                            </div>
                            
                            <div class="mb-3">
                                <label>Student Password</label>
                                <input type="password" name="studPassword" class="form-control" required placeholder="Enter your Password">
                            </div>

                            <div class="mb-3">
                                <label>Confirm Password</label>
                                <input type="password" name="studConPassword" class="form-control" required placeholder="Confirm your password">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="register_Student" class="btn btn-primary">Register Student</button>
                                <p>Already have an account? <a href="log_in_student.php">login now</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

         </div>
      </div>
       

  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>