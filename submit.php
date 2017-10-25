<?php
//fetching data from user
$username = $POST['username'];
$password = $POST['password'];
$email = $POST['email'];

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

$sql = "INSERT into User( username,email,password ) values ('$username','$password','$email')";
<
mysqli_query($db,$sql);

?>
