<?php
        session_start();
        $name = $_POST["Name"];
        $password_1 = $_POST["password"];

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

      $sql  ="SELECT * FROM User WHERE username='$name' && password='$password_1'";
$result=$conn->query($sql);
       if($result->num_rows > 0 )
        {
          $sql_dept_id = "SELECT dept_id FROM USER WHERE username='$name' && password='$password_1' ";
$result_id = $conn->query($sql_dept_id);
echo $result_id;
          if( $result_id=="")
          {
            $_SESSION['varname'] = $name;
            header('Location: ChooseDepartment.php');
          //  echo'fadyyyyyyyyyyyyyy';
          }
          else {
            echo'malyan';
          }

            echo' SUCEES';
        }
        else
        {
            echo 'The username or password are incorrect!';
        }


 ?>
