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
	var pass=document.getElementById( "password_status" ).innerHTML;
  if(($( "#sign_in_form" ).valid())==true&& pass =="Valid") {
   
  return true;
  }
    else
    {   alert ("username and password do not match");
      return false;
}
}
 

//function for checking if the form is valid or not
function valid_sign_up(){
	var name=document.getElementById( "name_status" ).innerHTML.trim();

  if(($( "#sign_up_form" ).valid())==true && (name =="Valid") ){
  
  return true;
  }
    else
    {   
           alert("Username Already exists")
      return false;
}
}

//mo7awlaa fashaaa lel login
function checkpassword ()
{
 var name=document.getElementById( "Name" ).value;
 var pass=document.getElementById( "password" ).value; 
 if(pass&&name)
 {
  $.ajax({ 
  type: 'post',
  url: 'registeration.php',
  data: {
   name:name,
   pass:pass,
  },
  success: function (response) {
   $( '#password_status' ).html(response);
   
   if(response=="Valid")	
   {
	   
    return true;	
   }
   else
   {
	     $( '#password_status' ).html("NotValid");
    return false;	
   }
  }
  });
 
 }
 else
 {
  $( '#password_status' ).html("wrong");
  return false;
 }
 return true;
}



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
	   $( '#name_status' ).html("NotValid");
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("Valid");
  return false;
 }

}
