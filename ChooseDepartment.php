<?php
session_start();
//$user = $_send['name'];

//connection parameters to database.
$username1 = $_SESSION['varname'];
echo $username1;


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

if(isset($_POST['dept_id'])){
$select = $_POST['dept_id'];



}


$conn->close();



?>

<script>
$("#submit").click(function(){
  <?php
$update= "UPDATE `User` SET `dept_id`=[dept_id] WHERE `username`=[username1] ";
echo $update;
echo' ana kalb';
?>
});
</script>




  <html>
    <head>
      <meta charset="utf-8">
      <title> choose department    </title>
    </head>
    <body>
      <div name="department" class="department">
<label> choose Department</label>
<form name= "chooseDepartment" action="ChooseDepartment.php" method="post">
<select name="dept_id">
  <?php while($row = mysqli_fetch_array($result)):;?>
    <option value="<?php echo $row[0];?>"> <?php echo $row[1];?> </option>
  <?php endwhile ; ?>
</select>
<br>
<button id="submit" type="submit"> submit </button>
</br>
<form>
      </div>

    </body>
  </html>
