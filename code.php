<?php
   session_start();
   require 'config.php';
   require 'message.php';
    //Delete Lecturer
    if(isset($_POST['delete_lecturer']))
    {
        $lecturer_id = mysqli_real_escape_string($conn,$_POST['delete_lecturer']);
        
        $query = "DELETE FROM  lecturer WHERE id = '$lecturer_id' ";
        $query_run = mysqli_query($conn,$query);
 
        if($query_run)
        {
 
        $_SESSION['message'] = "Lecturer deleted Successfully";
        header("Location: lecturer_monitor.php?page=");
        exit(0);
        }
        else{
        $_SESSION['message'] = "Lecturer not deleted";
        header("Location: lecturer_monitor.php?page=");
        exit(0);
        }
 
    }

   //Delete Student
   if(isset($_POST['delete_student']))
   {
       $student_id = mysqli_real_escape_string($conn,$_POST['delete_student']);
       
       $query = "DELETE FROM  student WHERE id = '$student_id' ";
       $query_run = mysqli_query($conn,$query);

       if($query_run)
       {

       $_SESSION['message'] = "Student deleted Successfully";
       header("Location: student_monitor.php?page=");
       exit(0);
       }
       else{
       $_SESSION['message'] = "Student not deleted";
       header("Location: student_monitor.php?page=");
       exit(0);
       }

   }


  //update lecturer
  if(isset($_POST['update_lecturer']))
  {
    $lecturer_id = mysqli_real_escape_string($conn, $_POST['lecturer_id']);
    $staffNum = mysqli_real_escape_string($conn, $_POST['staffNum']);
    $idNum = mysqli_real_escape_string($conn, $_POST['idNum']);
    $lecturerSurname = mysqli_real_escape_string($conn, $_POST['lecturerSurname']);
    $lecturerName = mysqli_real_escape_string($conn,$_POST['lecturerName']);
    $lecturerEmail = mysqli_real_escape_string($conn, $_POST['lecturerEmail']);
    $lecturerPassword = ($_POST['lecturerPassword']);
    $confirmPassword = ($_POST['confirmPassword']);

    //Validating ID Number
    $correct = true;
		if (strlen($idNum) !== 13 || !is_numeric($idNum) ) {
      $_SESSION['message'] =  "Wrong ID Number.Please enter the correct ID number";
      header("Location: lecturer-edit.php");
			
			$correct = false; die();
		}
		else
		{
			
			$year = substr($idNum, 0,2);
		    $currentYear = date("Y") % 100;
		    $prefix = "19";
			echo $idNum;
			echo "<br>";
			
	       
             if ($year < $currentYear)
			 
		     $prefix = "20";
	          $id_year = $prefix.$year;
			 			

           $id_month = substr($idNum, 2,2);
           $id_date = substr($idNum, 4,2);

           $id_month_int = (int)$id_month;
           $id_date_int = (int)$id_date;

           $id_month_int = (int)$id_month;
           $id_date_int = (int)$id_date;

           if($id_month_int > 12)
           {
            $_SESSION['message'] =  "ID number does not appear to be authentic - month part not valid";
            header("Location: lecturer-edit.php");
            $correct = false; die();

           }
           else if($id_date_int > 31)
           {
            $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
            header("Location: lecturer-edit.php");
            $correct = false; die();
            
           }

		   $fullDate = $id_date. "-" . $id_month. "-" . $id_year;
		   
		   echo $fullDate;
		   
		   	if (!$id_year == substr($idNum, 0,2) && $id_month == substr($idNum, 2,2) && $id_date == substr($idNum, 4,2)) {
			  //

          $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
          header("Location: lecturer-edit.php");
			  $correct = false;
		    }
		   $genderCode = substr($idNum, 6,4);
       $gender = (int)$genderCode < 5000 ? "Female" : "Male";
		   
		   echo "<br>";
		   echo $gender;
		   echo "<br>";
		   
		   
		   

           $citzenship = (int)substr($idNum, 10,1)  === 0 ? "citizen" : "resident";
		   echo $citzenship;

			  if ($correct){
                echo nl2br( "\nSouth African ID Number:   ". $idNum .
                '<br/>  Birth Date:   ' . $fullDate.
                '<br>  Gender:  ' . $gender .
                '<br>  SA Citizen:  ' . $citzenship);
                }
			
			
		}

         $query = "UPDATE lecturer SET staffNum ='$staffNum', idNum ='$idNum',lecturerSurname = '$lecturerSurname',lecturerName = '$lecturerName', lecturerEmail = '$lecturerEmail', lecturerPassword = '$lecturerPassword' 
         WHERE id ='$lecturer_id' ";

            $query_run = mysqli_query($conn, $query); 

            if($query_run)
            {

            $_SESSION['message'] = "Lecturer updated Successfully";
            header("Location: lecturer_monitor.php?page=");
            exit(0);
            }
            else{
            $_SESSION['message'] = "Lecturer not updated";
            header("Location: lecturer_monitor.php?page=");
            exit(0);
            }

      

  }

   //update student
   if(isset($_POST['update_student']))
   {
      $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
      $studentNum = mysqli_real_escape_string($conn, $_POST['studentNum']);
      $studName = mysqli_real_escape_string($conn, $_POST['studName']);
      $studSurname = mysqli_real_escape_string($conn, $_POST['studSurname']);
      $studID = mysqli_real_escape_string($conn,$_POST['studID']);
      $studEmail = mysqli_real_escape_string($conn, $_POST['studEmail']);
      $studPassword = ($_POST['studPassword']);
      $studConPassword = ($_POST['studConPassword']);

      if($studPassword != $studConPassword)
      {
        $_SESSION['message'] =  "The password entered does not match";
        header("Location: student-edit.php?");
      }
       
       //Validating ID Number for South African Citizeans
	 $correct = true;
      if (strlen($studID) !== 13 || !is_numeric($studID) ) {
        $_SESSION['message'] =  "Wrong ID Number.Please enter the correct ID number";
        header("Location: student-edit.php?");
        
        $correct = false; die();
      }
      else
      {
        
        $year = substr($studID, 0,2);
          $currentYear = date("Y") % 100;
          $prefix = "19";
        echo $studID;
        echo "<br>";
        
            
                if ($year < $currentYear)
          
            $prefix = "20";
              $id_year = $prefix.$year;
                

              $id_month = substr($studID, 2,2);
              $id_date = substr($studID, 4,2);

              $id_month_int = (int)$id_month;
              $id_date_int = (int)$id_date;

              if($id_month_int > 12)
              {
              $_SESSION['message'] =  "ID number does not appear to be authentic - month part not valid";
              header("Location: student-edit.php?");
              $correct = false; die();

              }
              else if($id_date_int > 31)
              {
              $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
              header("Location: student-edit.php?");
              $correct = false; die();
              
              }


          $fullDate = $id_date. "-" . $id_month. "-" . $id_year;
          
          echo $fullDate;
          
            if (!$id_year == substr($studID, 0,2) && $id_month == substr($studID, 2,2) && $id_date == substr($studID, 4,2)) {
          //

            $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
            header("Location: student-edit.php?");
          $correct = false;
          }
          $genderCode = substr($studID, 6,4);
          $gender = (int)$genderCode < 5000 ? "Female" : "Male";
          
          echo "<br>";
          echo $gender;
          echo "<br>";
          
          
          

              $citzenship = (int)substr($studID, 10,1)  === 0 ? "citizen" : "resident";
          echo $citzenship;

          if ($correct){
                  echo nl2br( "\nSouth African ID Number:   ". $studID .
                  '<br/>  Birth Date:   ' . $fullDate.
                  '<br>  Gender:  ' . $gender .
                  '<br>  SA Citizen:  ' . $citzenship);
                  }
        
        
   }


      $query = "UPDATE student SET studentNum ='$studentNum', studName ='$studName',studSurname = '$studSurname',studID = '$studID', studEmail = '$studEmail', studPassword = '$studPassword' 
                WHERE id ='$student_id' ";

      $query_run = mysqli_query($conn, $query); 
      
      if($query_run)
      {

        $_SESSION['message'] = "Student updated Successfully";
        header("Location: student_monitor.php?page=");
        exit(0);
      }
      else{
        $_SESSION['message'] = "Student not updated";
        header("Location: student_monitor.php?page=");
        exit(0);
      }

   }



  //Log in admin
  if(isset($_POST['log_in_admin']))
   {
    $admin_id = mysqli_real_escape_string($conn, $_POST['admin_id']);
    //$studName = mysqli_real_escape_string($conn, $_POST['studName']);
    //$studSurname = mysqli_real_escape_string($conn, $_POST['studSurname']);
    //$studID = mysqli_real_escape_string($conn,$_POST['studID']);
    //$studEmail = mysqli_real_escape_string($conn, $_POST['studEmail']);
    $admin_password = ($_POST['admin_password']);
    //$studConPassword = md5($_POST['studConPassword']);

    $query  = "SELECT * FROM admin WHERE admin_id = '$admin_id' AND admin_password = '$admin_password' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    

   if( $count >0)
   {
     $_SESSION['message'] =  "you have successfully logged in";
    header("Location: dashboard.php");
    echo 'Login Success';

   }
   else{
    $_SESSION['message'] =  "wrong id or password!please try again";
    header("Location: log_in_admin.php");
    echo 'Login Failed';
          
   }
};


 // Log in Lecturer
 if(isset($_POST['log_in_lecturer']))
   {
    $staffNum = mysqli_real_escape_string($conn, $_POST['staffNum']);
    //$studName = mysqli_real_escape_string($conn, $_POST['studName']);
    //$studSurname = mysqli_real_escape_string($conn, $_POST['studSurname']);
    //$studID = mysqli_real_escape_string($conn,$_POST['studID']);
    //$studEmail = mysqli_real_escape_string($conn, $_POST['studEmail']);
    $lecturerPassword = ($_POST['lecturerPassword']);
    //$studConPassword = md5($_POST['studConPassword']);

    $query  = "SELECT * FROM lecturer WHERE staffNum = '$staffNum' AND lecturerPassword = '$lecturerPassword' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    

   if( $count >0)
   {
     $_SESSION['message'] =  "you have successfully logged in";
    header("Location: logged_in_lecturer.php");
    echo 'Login Success';

   }
   else{
    $_SESSION['message'] =  "wrong staff number or password!please try again";
    header("Location: log_in_lecturer.php");
    echo 'Login Failed';
          
   }
};
 
 

// Log in Student
   if(isset($_POST['log_in_Student']))
   {
    $studentNum = mysqli_real_escape_string($conn, $_POST['studentNum']);
    //$studName = mysqli_real_escape_string($conn, $_POST['studName']);
    //$studSurname = mysqli_real_escape_string($conn, $_POST['studSurname']);
    //$studID = mysqli_real_escape_string($conn,$_POST['studID']);
    //$studEmail = mysqli_real_escape_string($conn, $_POST['studEmail']);
    $studPassword = ($_POST['studPassword']);
    //$studConPassword = md5($_POST['studConPassword']);

    $query  = "SELECT * FROM student WHERE studentNum = '$studentNum' AND studPassword = '$studPassword' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    

   if( $count >0)
   {
    $_SESSION['message'] =  "you have successfully logged in";
    header("Location: logged_in_student.php");
    echo 'Login Success';

   }
   else{
    $_SESSION['message'] =  "wrong student number or password! please try again";
    header("Location: log_in_student.php");
    echo 'Login Failed';
          
   }
};

//Registering Admin
   if(isset($_POST['register_admin']))
   {
    $admin_fullName = mysqli_real_escape_string($conn, $_POST['admin_fullName']);
    $admin_surname = mysqli_real_escape_string($conn, $_POST['admin_surname']);
    $admin_id = mysqli_real_escape_string($conn, $_POST['admin_id']);
    $admin_email = mysqli_real_escape_string($conn,$_POST['admin_email']);
    $admin_password =  ($_POST['admin_password']);
    $adminConPass = ($_POST['adminConPass']);
    
    //Validating ID Number
    $correct = true;
		if (strlen($admin_id) !== 13 || !is_numeric($admin_id) ) {
      $_SESSION['message'] =  "Wrong ID Number.Please enter the correct ID number";
      header("Location: admin.php");
			
			$correct = false; die();
		}
		else
		{
			
			$year = substr($admin_id, 0,2);
		    $currentYear = date("Y") % 100;
		    $prefix = "19";
			echo $admin_id;
			echo "<br>";
			
	       
             if ($year < $currentYear)
			 
		     $prefix = "20";
	          $id_year = $prefix.$year;
			 			

           $id_month = substr($admin_id, 2,2);
           $id_date = substr($admin_id, 4,2);

           $id_month_int = (int)$id_month;
           $id_date_int = (int)$id_date;

           $id_month_int = (int)$id_month;
           $id_date_int = (int)$id_date;

           if($id_month_int > 12)
           {
            $_SESSION['message'] =  "ID number does not appear to be authentic - month part not valid";
            header("Location: admin.php");
            $correct = false; die();

           }
           else if($id_date_int > 31)
           {
            $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
            header("Location: admin.php");
            $correct = false; die();
            
           }

		   $fullDate = $id_date. "-" . $id_month. "-" . $id_year;
		   
		   echo $fullDate;
		   
		   	if (!$id_year == substr($admin_id, 0,2) && $id_month == substr($admin_id, 2,2) && $id_date == substr($admin_id, 4,2)) {
			  //

          $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
          header("Location: admin.php");
			  $correct = false;
		    }
		   $genderCode = substr($admin_id, 6,4);
       $gender = (int)$genderCode < 5000 ? "Female" : "Male";
		   
		   echo "<br>";
		   echo $gender;
		   echo "<br>";
		   
		   
		   

           $citzenship = (int)substr($admin_id, 10,1)  === 0 ? "citizen" : "resident";
		   echo $citzenship;

			  if ($correct){
                echo nl2br( "\nSouth African ID Number:   ". $admin_id .
                '<br/>  Birth Date:   ' . $fullDate.
                '<br>  Gender:  ' . $gender .
                '<br>  SA Citizen:  ' . $citzenship);
                }
			
			
		}
  

    $query = "INSERT INTO admin (admin_id,admin_fullName,admin_surname,admin_email,admin_password) VALUES
    ('$admin_id','$admin_fullName', '$admin_surname','$admin_email', '$admin_password')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] =  "Admin have been registered successfully";
      header("Location: admin.php");
    }
    else{
        
        $_SESSION['message'] =  "Admin have not been successfully registered";
        header("Location: admin.php");
        exit(0);
    }

   };

//Registering Lecturer
   if(isset($_POST['register_lecturer']))
   {
    $staffNum = mysqli_real_escape_string($conn, $_POST['staffNum']);
    $idNum = mysqli_real_escape_string($conn, $_POST['idNum']);
    $lecturerSurname = mysqli_real_escape_string($conn, $_POST['lecturerSurname']);
    $lecturerName = mysqli_real_escape_string($conn,$_POST['lecturerName']);
    $lecturerEmail = mysqli_real_escape_string($conn, $_POST['lecturerEmail']);
    $lecturerPassword = ($_POST['lecturerPassword']);
    $confirmPassword = ($_POST['confirmPassword']);

    //Validating ID Number
    $correct = true;
		if (strlen($idNum) !== 13 || !is_numeric($idNum) ) {
      $_SESSION['message'] =  "Wrong ID Number.Please enter the correct ID number";
      header("Location: lecturer.php");
			
			$correct = false; die();
		}
		else
		{
			
			$year = substr($idNum, 0,2);
		    $currentYear = date("Y") % 100;
		    $prefix = "19";
			echo $idNum;
			echo "<br>";
			
	       
             if ($year < $currentYear)
			 
		     $prefix = "20";
	          $id_year = $prefix.$year;
			 			

           $id_month = substr($idNum, 2,2);
           $id_date = substr($idNum, 4,2);

           $id_month_int = (int)$id_month;
           $id_date_int = (int)$id_date;

           $id_month_int = (int)$id_month;
           $id_date_int = (int)$id_date;

           if($id_month_int > 12)
           {
            $_SESSION['message'] =  "ID number does not appear to be authentic - month part not valid";
            header("Location: lecturer.php");
            $correct = false; die();

           }
           else if($id_date_int > 31)
           {
            $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
            header("Location: lecturer.php");
            $correct = false; die();
            
           }

		   $fullDate = $id_date. "-" . $id_month. "-" . $id_year;
		   
		   echo $fullDate;
		   
		   	if (!$id_year == substr($idNum, 0,2) && $id_month == substr($idNum, 2,2) && $id_date == substr($idNum, 4,2)) {
			  //

          $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
          header("Location: lecturer.php");
			  $correct = false;
		    }
		   $genderCode = substr($idNum, 6,4);
       $gender = (int)$genderCode < 5000 ? "Female" : "Male";
		   
		   echo "<br>";
		   echo $gender;
		   echo "<br>";
		   
		   
		   

           $citzenship = (int)substr($idNum, 10,1)  === 0 ? "citizen" : "resident";
		   echo $citzenship;

			  if ($correct){
                echo nl2br( "\nSouth African ID Number:   ". $idNum .
                '<br/>  Birth Date:   ' . $fullDate.
                '<br>  Gender:  ' . $gender .
                '<br>  SA Citizen:  ' . $citzenship);
                }
			
			
		}
  


    
    
    

    $query = "INSERT INTO lecturer (staffNum,idNum,lecturerName,lecturerSurname,lecturerEmail,lecturerPassword) VALUES
    ('$staffNum', '$idNum', '$lecturerName','$lecturerSurname', '$lecturerEmail', '$lecturerPassword')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] =  "Lecturer have been registered successfully";
      header("Location: lecturer.php");
    }
    else{

        $_SESSION['message'] =  "Lecturer have not been successfully registered";
        header("Location: lecturer.php");
        exit(0);
    }

};

//Registering Student
   if(isset($_POST['register_Student']))
   {
    $studentNum = mysqli_real_escape_string($conn, $_POST['studentNum']);
    $studName = mysqli_real_escape_string($conn, $_POST['studName']);
    $studSurname = mysqli_real_escape_string($conn, $_POST['studSurname']);
    $studID = mysqli_real_escape_string($conn,$_POST['studID']);
    $studEmail = mysqli_real_escape_string($conn, $_POST['studEmail']);
    $studPassword = ($_POST['studPassword']);
    $studConPassword = ($_POST['studConPassword']);
   
    
    //Validating ID Number for South African Citizeans
	 $correct = true;
		if (strlen($studID) !== 13 || !is_numeric($studID) ) {
      $_SESSION['message'] =  "Wrong ID Number.Please enter the correct ID number";
      header("Location: student.php");
			
			$correct = false; die();
		}
		else
		{
			
			$year = substr($studID, 0,2);
		    $currentYear = date("Y") % 100;
		    $prefix = "19";
			echo $studID;
			echo "<br>";
			
	       
             if ($year < $currentYear)
			 
		     $prefix = "20";
	          $id_year = $prefix.$year;
			 			

           $id_month = substr($studID, 2,2);
           $id_date = substr($studID, 4,2);

           $id_month_int = (int)$id_month;
           $id_date_int = (int)$id_date;

           if($id_month_int > 12)
           {
            $_SESSION['message'] =  "ID number does not appear to be authentic - month part not valid";
            header("Location: student.php");
            $correct = false; die();

           }
           else if($id_date_int > 31)
           {
            $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
            header("Location: student.php");
            $correct = false; die();
            
           }


		   $fullDate = $id_date. "-" . $id_month. "-" . $id_year;
		   
		   echo $fullDate;
		   
		   	if (!$id_year == substr($studID, 0,2) && $id_month == substr($studID, 2,2) && $id_date == substr($studID, 4,2)) {
			  //

          $_SESSION['message'] =  "ID number does not appear to be authentic - date part not valid";
          header("Location: student.php");
			  $correct = false;
		    }
		   $genderCode = substr($studID, 6,4);
       $gender = (int)$genderCode < 5000 ? "Female" : "Male";
		   
		   echo "<br>";
		   echo $gender;
		   echo "<br>";
		   
		   
		   

           $citzenship = (int)substr($studID, 10,1)  === 0 ? "citizen" : "resident";
		   echo $citzenship;

			  if ($correct){
                echo nl2br( "\nSouth African ID Number:   ". $studID .
                '<br/>  Birth Date:   ' . $fullDate.
                '<br>  Gender:  ' . $gender .
                '<br>  SA Citizen:  ' . $citzenship);
                }
			
			
		}
     



    $query = "INSERT INTO student (studentNum,studName,studSurname,studID,studEmail,studPassword) VALUES
    ('$studentNum', '$studName', '$studSurname','$studID', '$studEmail', '$studPassword')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] =  "Student have been registered successfully";
      header("Location: student.php");
    }
    else{
        $_SESSION['message'] =  "Student have not been successfully registered";
        header("Location: student.php");
        exit(0);
    }

   };
