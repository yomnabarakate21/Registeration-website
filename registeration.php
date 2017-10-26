<!DOCTYPE html>
<html>
<head>
<title> Registeration system  </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="validate.js"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

<div name ="sign_up" class="sign_up">
  <h2> Sign Up </h2>
  <form method="post" onsubmit= "valid_sign_up()" action="submit.php" name="sign_up_form" id="sign_up_form">
    <div class="sign_up_input" name="sign_up_input">
  <label> Username </label>
  <input type="text" name="Name">
  <br>
  <label> Email</label>
  <input type="text" name="email">
  <br/>
  <label> Password </label>
  <input type="password" name="password">
  <br>
  <label> Confirm password </label>
  <input type="password" name="password_1">
  <br>
</form>
<div id="buttons">
<button id="sign_in_btn" type="button"> Sign in </button>
<button id="submit_btn" type="submit"> Submit </button>
</div>
</div>
</div>
<div class="sign_in" name="sign_in" >
  <h2>Sign in </h2>
<form method="post" action="login.php" id="sign_in_form">
  <label> Username </label>
  <input type="text" name="Name">
  <br>
  <label> Password </label>
  <input type="password" name="password">
  <br>
  <input type="submit" value="sign in">
  <br/>
</form>
</div>

<script>
  $(".sign_in").hide();
$(document).ready(function(){
  $("#sign_in_btn").click(function(){
    $(".sign_up").hide();
      $(".sign_in").show();
});
});

$( "#sign_in_form" ).validate({
  rules: {
    Name: {
      required: true
    }
, password: {
  required: true
}

  }
});
</script>





</body>

</html>
