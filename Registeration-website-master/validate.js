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

//function for checking if the form is valid or not
function valid_sign_in(){
	var name=document.getElementById( "Name" ).innerHTML;
  if(($( "#sign_in_form" ).valid())==true&& name =="Valid") {
    alert("true");
  return true;
  }
    else
    {   alert ("false");
      return false;
}
}
 

//function for checking if the form is valid or not
function valid_sign_up(){
	var name=document.getElementById( "name_status" ).innerHTML;

  if(($( "#sign_up_form" ).valid())==true&& name =="Valid") {
    alert("Valid");
  return true;
  }
    else
    {   
           alert("Username Already exists")
      return false;
}
}

//mo7awlaa fashaaa lel login
/*function check_name_password ()
{
 var name=document.getElementById( "Name" ).value;
 var pass=document.getElementById( "password" ).value; 
 if(name&&pass)
 {
  $.ajax({ 
  type: 'post',
  url: 'registeration.php',
  data: {
   user_name1:name,
   pass:pass,
  },
  success: function (response) {
   $( '#name_status1' ).html(response);
   
   if(response=="Valid")	
   {
    return true;	
   }
   else
   {
	   
    return false;	
   }
  }
  });
 
 }
 else
 {
  $( '#name_status1' ).html("wrong");
  return false;
 }
 return true;
}

*/

//validating the sign in form
function checkname()
{
 var name=document.getElementById( "Name_sign_up" ).value;
 if(name)
 {
  $.ajax({ 
  type: 'post',
  url: 'registeration.php',
  data: {
   user_name:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="Valid")	
   {
    return true;	
   }
   else
   {
	   
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("wrong");
  return false;
 }

}
