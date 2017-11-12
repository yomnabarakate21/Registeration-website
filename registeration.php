<!DOCTYPE html>
<html>
<head>
<style>
body{
  background-image: url('images/image.jpg');
  background-repeat: no-repeat;
margin: 0;
padding:0;
background-size: cover;
}
h2 {
    color: white;
    text-align: center;
    margin-top: 200px;
    margin-bottom: 50px;
    text-decoration-style: wavy;
    font-size: 100px;
}


.container{
  width:50%;
  height:400px;
  background:white;
  margin: 0 auto;
  border: 2px solid #fff;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);

}
.container .left {
  float:left;
  width:50%;
  height: 400px;
  background: url('images/books.jpg');
  background-size: cover;
  box-sizing: border-box;
}
.container .right{
  float:right;
  width:50%;
  height:400px;
  box-sizing: border-box;
  background-color: Brown;
}
.formbox{
width:100%;
padding:80px 40px;
box-sizing: border-box;
height: 400px;
background:#fff;
}
.formbox label {
  margin:0;
  padding:0;
  font-weight: bold;
  font-size:20px;
  color: #a6af13;
}
input {
  margin-left: 20px;
  display: inline-block;
}
button{
  background-color:#a6af13;
  border-radius: 50%;
  font-size: 20px;
  font-weight: bold;
  padding:10px;
  margin-top: 20px;
  border-width: thick;

}

</style>
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
  <div class="container">
    <div class="left"></div>
    <div class=right>
      <div class="formbox">
     <form method="post" onsubmit= "valid_sign_up()" action="submit.php" name="sign_up_form" id="sign_up_form">
    <div class="sign_up_input" name="sign_up_input">
  <label> Username </label>
  <br>
  <input type="text" name="Name">
  <br>
  <label> Email</label>
  <br>
  <input type="text" name="email">
  <br/>
  <label> Password </label>
  <br>
  <input type="password" name="password">
  <br>
  <label> Confirm password </label>
  <br>
  <input type="password" name="password_1">
  <br>
</form>
<div id="buttons">
<button id="sign_in_btn" type="button"> Sign in </button>
<button id="submit_btn" type="submit"> Submit </button>
</div>
</div>
</div>
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
