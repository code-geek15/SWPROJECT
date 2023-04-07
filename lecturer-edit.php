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

    <title>Lecturer update Page</title>
  </head>
  <body>
      <div class="container mt-5">
      <?php include('message.php')?>
         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Lecturer
                            <a href="lecturer_monitor.php?page=" class="btn btn-danger float-end">BACK</a>
                        </h4>

                    </div>
                    <div class="card-body">
                        <?php
                             if(isset($_GET['id']))
                             {
                                 //$student_id = mysqli_real_escape_string($conn,$_GET['id']);
 
                                 $lecturer_id = mysqli_real_escape_string($conn,$_GET['id']);
                                 $query = "SELECT * FROM lecturer WHERE id = '$lecturer_id' ";
                                 $query_run = mysqli_query($conn, $query);
 
                                 if(mysqli_num_rows($query_run) > 0)
                                 {
                                     $lecturer = mysqli_fetch_array($query_run);
                                     //print_r($student);
                                     ?>
                                        <form action="code.php" method="post">
                                     
                                                <input type="text" name="lecturer_id" hidden value="<?= $lecturer['id']?>" class="form-control" required placeholder="Enter your name">
                                         

                                            <div class="mb-3">
                                                <label>Lecturer Name</label>
                                                <input type="text" name="lecturerName" value="<?= $lecturer['lecturerName']?>" class="form-control" required placeholder="Enter your name">
                                            </div>

                                            <div class="mb-3">
                                                <label>Lecturer Surname</label>
                                                <input type="text" name="lecturerSurname" value="<?= $lecturer['lecturerSurname']?>" class="form-control" required placeholder="Enter your surname">
                                            </div>


                                            <div class="mb-3">
                                                <label>Lecturer Email</label>
                                                <input type="text" name="lecturerEmail" value="<?= $lecturer['lecturerEmail']?>" class="form-control" required placeholder="Enter your email">
                                            </div>


                                            <div class="mb-3">
                                                <label>Staff Number</label>
                                                <input type="text" name="staffNum" value="<?= $lecturer['staffNum']?>" class="form-control" required placeholder="Enter your staff number">
                                            </div>

                                            <div class="mb-3">
                                                <label>Lecturer ID Number</label>
                                                <input type="text" name="idNum" value="<?= $lecturer['idNum']?>" class="form-control" required placeholder="Enter your ID Number">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label>Lecturer Password</label>
                                                <input type="password" name="lecturerPassword" class="form-control" required placeholder="Enter your password">
                                            </div>

                                            <div class="mb-3">
                                                <label>Confirm Lecturer Password</label>
                                                <input type="password" name="confirmPassword"  class="form-control" required placeholder="Confirm your password">
                                            </div>


                                            <div class="mb-3">
                                                <button type="submit" name="update_lecturer"  class="btn btn-primary">Update Lecturer</button>
                                            
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