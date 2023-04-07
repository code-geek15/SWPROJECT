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
    <h1>Welcome Admin</h1>
      <div class="container mt-5">

      <?php include('message.php')?>
         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <a href="log_in_admin.php" class="btn btn-info float-end">BACK</a>
                        </h4>
             

                </div>
                <a href="admin_choice.php" class="btn btn-info float-start">Press To Monitor Logins</a>
                   <br/>
                <a href="logout.php" class="btn btn-success float-start">Press here to log Out</a>
            </div>

         </div>
      </div>

      </div>
       

  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>