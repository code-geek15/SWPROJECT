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

    <title>Admin Page</title>
  </head>
  <body>
      <div class="container mt-5">
      <?php include('message.php')?>
         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Register Admin
                            <a href="choose.php" class="btn btn-danger float-end">BACK</a>
                        </h4>

                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label>Admin Name</label>
                                <input type="text" name="admin_fullName" class="form-control" required placeholder="Enter your Full Name">
                            </div>

                            <div class="mb-3">
                                <label>Admin Surname</label>
                                <input type="text" name="admin_surname" class="form-control" required placeholder="Enter your Surname">
                            </div>

                            <div class="mb-3">
                                <label>Admin ID Number</label>
                                <input type="text" name="admin_id" class="form-control" required placeholder="Enter your ID Number">
                            </div>


                            <div class="mb-3">
                                <label>Admin Email</label>
                                <input type="text" name="admin_email" class="form-control" required placeholder="Enter your Email">
                            </div>

                            <div class="mb-3">
                                <label>Admin Password</label>
                                <input type="password" name="admin_password" class="form-control" required placeholder="Enter your password">
                            </div>

                            <div class="mb-3">
                                <label>Confirm Password</label>
                                <input type="password" name="adminConPass" class="form-control" required placeholder="Confirm your password">
                            </div>


                            <div class="mb-3">
                                <button type="submit" name="register_admin" class="btn btn-primary">Register Admin</button>
                                <p>already have an account? <a href="log_in_admin.php">Login now</a></p>
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