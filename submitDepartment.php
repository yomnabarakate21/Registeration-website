<?php

$dept_id = $_POST['dept_id'];
session_start();
$username1 = $_SESSION['username1'];
//connection parameters to database.


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registeration";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$update= "UPDATE `User` SET `dept_id`='$dept_id' WHERE `username`='$username1' ";
if ($conn->query($update) === TRUE) {

echo 'succeed';
header('Location: Course.php');


} else 
    echo "Error: " . $update . "<br>" . $conn->error;

$conn->close();

?>