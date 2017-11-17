<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "registeration";
$conn = new mysqli($host, $user, $pass,$dbname);


//check duplicate username 
if(isset($_POST['user_name']))
{
 $name=$_POST['user_name'];

 $checkdata=" SELECT `username` FROM `user` WHERE `username`='$name' ";

  $get_username=$conn->query($checkdata);

	   if($get_username->num_rows > 0 ){   //Indicates username failure

  echo "User Name Already Exist";
 }
 else
 {
  echo "Valid";
 }
 exit();
}

//check duplicate email
if(isset($_POST['Email']))
{
 $Email=$_POST['Email'];

 $checkEmail=" SELECT `email` FROM `user` WHERE `email`='$Email' ";

  $get_Email=$conn->query($checkEmail);

	   if($get_Email->num_rows > 0 ){   //Indicates username failure

  echo "NotValid";
 }
 else
 {
  echo "Valid";
 }
 exit();
}


if(isset($_POST['name'])&&isset($_POST['pass']))
{
 $name=$_POST['name'];
 $pass=$_POST['pass'];
 $pass =md5($pass);
 
 $checkpassword=" SELECT * FROM `user` WHERE `username`='$name'&& `password`='$pass'";
 

  $getpassword=$conn->query($checkpassword);

	   if($getpassword->num_rows < 1 ){   //Indicates username failure

  echo "User Name or password do not match";
 }
 else
 {
  echo "Valid";
 }
 exit();
}
 ?>

<!DOCTYPE html>
<html>
<head>

<title> Registeration system  </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="validate.js"></script>
<link rel="stylesheet" type="text/css" href='css/registeration_css.css'>
<script type="text/javascript" src="js/jquery.js"></script>




</head>

<body>

<div name ="sign_up" class="sign_up">
  <h2> Sign Up </h2>
  <div class="container">
    <div class="left"></div>
    <div class=right>
      <div class="formbox">
     <form id="sign_up_form" action="submit.php" method="post" onsubmit="return valid_sign_up();"  name="sign_up_form"  >
    <div class="sign_up_input" name="sign_up_input">
  <label> Username </label>
  <br>
  <input type="text" name="Name" id= "Name_sign_up" onkeyup="checkname();">
   <span  id="name_status"></span>
  <br>
  <label> Email</label>
  <br>
  <input type="text" name="email" id=Email onkeyup="checkEmail();">
  <span id="Email_status"></span>
  <br/>
  <label> Password </label> 
   <br>
  <input type="password" name="password" id="password1">
  <br>
  <label> Confirm password </label>
  <br>
  <input type="password" name="password_1" id="confirmPassword" onkeyup="confirmPass();" >
  <span   id="passwordCheck" ></span>
  <br>
  <div id="buttons">
  <input id="submit_btn" type="submit" value="submit">
  <button id="sign_in_btn" type="button"> Sign in </button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="sign_in" name="sign_in" >
  <h2>Sign in </h2>
  <div class="sign_in_container">
    <div class="sign_in_left"></div>
    <div class="sign_in_right">
<form method="post" action="login.php" id="sign_in_form" onsubmit="return valid_sign_in();"  >
  <label> Username </label>
  <input type="text" name="Name" id = "Name">
     <span  id="name_status1"></span>
  <br>
  <label> Password </label>
  <input type="password" name="password" id="password" onkeyup="checkpassword();">
     <span  id="password_status"></span>
	 
  <br>
  <input type="submit" value="sign in">
  <br/>
</form>
</div>
</div>

<script>
  $(".sign_in").hide();
$(document).ready(function(){
  $("#sign_in_btn").click(function(){
    $(".sign_up").hide();
      $(".sign_in").show();
});
});


</script>





</body>

</html>
