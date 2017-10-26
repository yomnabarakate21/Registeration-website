
<?php
//fetching data from user
$name = $_POST['Name'];
$password = $_POST['password'];
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

$sql = "INSERT into User( username,email,password ) values ('$name','$email',$password')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
