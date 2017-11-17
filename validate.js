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
	var pass=document.getElementById( "passwordCheck" ).innerHTML.trim();
	var Email=document.getElementById( "Email_status" ).innerHTML.trim();

  if(($( "#sign_up_form" ).valid())==true && (name=="Valid") &&(pass=="passwordsMatch" ) && (Email!="NotValid")){

  return true;
  }
  else if(pass!="passwordsMatch")
  {
	  alert("Passwords do not match");
	  return false;
  }
    else
    {   
    alert("please check your informaion");
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
  $( '#name_status' ).html("NotValid");
  return false;
 }

}
//validating two passwords match
function confirmPass()
{
	var pass=document.getElementById( "password1" ).value;
	var confirmPass=document.getElementById( "confirmPassword" ).value;
	if(pass==confirmPass)
	{ 
       
		$( '#passwordCheck' ).html("passwordsMatch");
		 return true;
	}
	else 
	{
		$( '#passwordCheck' ).html("");
		return false;
	}
	
}

function checkEmail()
{
 var Email=document.getElementById( "Email" ).value;
 if(Email)
 {
  $.ajax({ 
  type: 'post',
  url: 'registeration.php',
  data: {
   Email:Email,
  },
  success: function (response) {
   $( '#Email_status' ).html(response);
   if(response=="NotValid")	
  {
	   $( '#Email_status' ).html("NotValid");
    return false;	
   }
   else
	   {
		     $( '#Email_status' ).html(" ");
    return true;	
   }
   
  }
  });
 }
 else
 {
  $( '#Email_status' ).html(" ");
  return false;
 }

}

