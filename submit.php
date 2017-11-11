
<?php
session_start();

//fetching data from user
$name = $_POST['Name'];
$pass= $_POST['password'];
$email = $_POST['email'];

//connection parameters to database.
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

//encrypt password
 $pass = md5($pass);
 
$sql = "INSERT into User( username,email,password ) values ('$name','$email','$pass')";
if ($conn->query($sql) === TRUE) {

$_SESSION['username1'] = $name;


header('Location: ChooseDepartment.php');


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
