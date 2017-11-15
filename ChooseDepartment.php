<?php

session_start();

$username1 = $_SESSION['username1'];
echo 'Hello    '.$_SESSION['username1'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registeration";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM `Departement`";
$result =mysqli_query($conn,$query);



$conn->close();
?>

  <html>
  <link rel="stylesheet" type="text/css" href='css/registeration_css.css'>
    <head>
      <meta charset="utf-8">
      <title> choose department    </title>
    </head>
    <body>
	<h3> <?php echo "Hello  ".$username1 ?> </h3>
      <div name="department" class="department">
	   <div class="department_center" >
<label> Choose Department</label>

<form name= "chooseDepartment" action="submitDepartment.php" method="post">

<select name="dept_id" style=" height:45px; width:120px" >
  <?php while($row = mysqli_fetch_array($result)):;?>
    <option value="<?php echo $row[0];?>"> <?php echo $row[1];?> </option>
  <?php endwhile ; ?>
</select>
<br>
<button id="submit" type="submit"> submit </button>
</br>

<form>
</div>
</div>

    </body>
  </html>
