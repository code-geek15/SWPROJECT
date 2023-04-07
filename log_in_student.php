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
     <link href="myAssetCss/bootstrap.css" rel="stylesheet" />
 
    <title>Log In Student</title>
  </head>
 <body>
      <div class="container mt-5">

      <?php include('message.php')?>
         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Log In
                            <a href="choose.php" class="btn btn-info float-end">BACK</a>
                        </h4>
                        
                    <div class="card-body">
                        <form action="code.php" method="post">

                            <div class="mb-3">
                                <label>Student Number</label>
                                <input type="text" name="studentNum" class="form-control" required placeholder="Enter your student number">
                            </div>


                            <div class="mb-3">
                                <label>Student Password</label>
                                <input type="password" name="studPassword" class="form-control" required placeholder="Enter your password">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="log_in_Student" class="btn btn-primary">Log in Student</button>
                                <p>don't have an account? <a href="student.php">register now</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

         </div>
      </div>

      </div>
       

  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>