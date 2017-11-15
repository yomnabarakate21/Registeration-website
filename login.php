

<?php


        session_start();
		//get data
		    $name = $_POST["Name"];
        $pass = $_POST["password"];
        $pass =md5($pass);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registeration";

        //connection to databse
        $conn = new mysqli($servername, $username, $password, $dbname);


	   // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

         $sql  ="SELECT password FROM User WHERE username='$name' ";
         $get_username=$conn->query($sql);

	   if($get_username->num_rows < 1 ){   //Indicates username failure
       
  header('Location: registeration.php');
   }
   else{

		// get password from result
   $get_password = mysqli_fetch_array($get_username);


   // Validate that password is correct
   if($pass != $get_password['password']){
      //Success! Username and password confirmed
	  echo 'Wrong Password ';
   }
	  else
	  {
	   //get dept id
          $sql_dept_id = "SELECT dept_id FROM USER WHERE username='$name' && password='$pass' ";

                   $result_id = $conn->query($sql_dept_id)->fetch_object()->dept_id;

          if( $result_id=="")
          {

			  //no dept id
            $_SESSION['username1'] = $name;
            header('Location: ChooseDepartment.php');


          }
          else {

			  $_SESSION['username1'] = $name;
            header('Location: Course.php');
          }

        }
   }
      $conn->close;



 ?>
