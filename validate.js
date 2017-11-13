$(function(){
  //validating the sign_up_form
$( "#sign_up_form" ).validate({
  errorClass: "my-error-class",
   validClass: "my-valid-class",
  rules: {
    Name: {
      required: true,

    }
, email: {
  required: true,
  email: true
}

  }
});

//function for checking if the form is valid or not
function valid_sign_up(){
  if(($( "#sign_up_form" ).valid())==true) {
    alert("true");
  return true;}
    else
    {   alert("false");
      return false;
}
}
//validating the sign in form


});
