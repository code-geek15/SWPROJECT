<?php
 session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    -->

    
    <!-- Bootstrap CSS -->
    <link href="myAssetCss/bootstrap.css" rel="stylesheet" />

   

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />


    <title>Lecturer Page</title>
  </head>
  <body>
      <div class="container mt-5">
      <?php include('message.php')?>
         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Register Lecturer
                            <a href="choose.php" class="btn btn-danger float-end">BACK</a>
                        </h4>

                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label>Lecturer Name</label>
                                <input type="text" name="lecturerName" class="form-control" required placeholder="Enter your name">
                            </div>

                            <div class="mb-3">
                                <label>Lecturer Surname</label>
                                <input type="text" name="lecturerSurname" class="form-control" required placeholder="Enter your surname">
                            </div>


                            <div class="mb-3">
                                <label>Lecturer Email</label>
                                <input type="text" name="lecturerEmail" class="form-control" required placeholder="Enter your email">
                            </div>


                            <div class="mb-3">
                                <label>Staff Number</label>
                                <input type="text" name="staffNum" class="form-control" required placeholder="Enter your staff number">
                            </div>

                            <div class="mb-3">
                                <label>Lecturer ID Number</label>
                                <input type="text" name="idNum" class="form-control" required placeholder="Enter your ID Number">
                            </div>
                            
                            <div class="mb-3">
                                <label>Lecturer Password</label>
                                <input type="password" name="lecturerPassword" class="form-control" required placeholder="Enter your password">
                            </div>

                            <div class="mb-3">
                                <label>Confirm Lecturer Password</label>
                                <input type="password" name="confirmPassword" class="form-control" required placeholder="Confirm your password">
                            </div>


                            <div class="mb-3">
                                <button type="submit" name="register_lecturer" class="btn btn-primary">Register Lecturer</button>
                                <p>already have an account? <a href="log_in_lecturer.php">login now</a></p>
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