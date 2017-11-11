<?php
session_start();



$username1 = $_SESSION['username1'];
echo "hello    ".$_SESSION['username1'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registeration";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//get dept from username
$sql_deptID = "SELECT dept_id FROM USER WHERE username='$username1'  ";

$dept_id = $conn->query($sql_deptID)->fetch_object()->dept_id;


$query = "SELECT * FROM `Course` WHERE `DEPT_ID`='$dept_id'";
$result =mysqli_query($conn,$query);

 mysqli_close($conn);
 
?>

<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>Course ID</th>
    <th>Course Name</th>
	<th>Course Desdription</th>
	<th>instructor Name</th>
	<th>Credit Hours</th>
	<th>Department ID</th>
   </TR>
   <?php while($row = mysqli_fetch_array($result)):;?>
   <tr> 
   <td><?php echo $row[0];?> </td>
   <td><?php echo $row[1];?> </td>
   <td><?php echo $row[2];?> </td>
   <td><?php echo $row[3];?> </td>
   <td><?php echo $row[4];?> </td>
   <td><?php echo $row[5];?> </td>
	
   </tr>
   <?php endwhile ; ?>
  <table/>

</body>
</html>  
   
   
  