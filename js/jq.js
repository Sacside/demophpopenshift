// JavaScript Document
jQuery(document).ready(function(){
	jQuery('.register').on('click touchstart',function(e){
		var val				=	true;
		var username		=	jQuery("#username").val();
		var useremail		=	jQuery("#useremail").val();
		var userpassword	=	jQuery("#pwd").val();
		if(username=="" || useremail=="" || userpassword=="")
		{
			alert("All the fields are required");
			val				=	false;
		}
		
		if(!validateEmail(useremail))
		{
			alert("Please enter a valid email address");
			val				=	false;
		}
		var url1		=	'ajax.php';
		if(val)
		{
			var data = {"username": username,"useremail": useremail,"userpassword": userpassword};
			 jQuery.ajax({
					  type: "POST",
					  dataType: "json",
					  url: url1,
					  data: data,
					  success: function(result){
						  if(result['usernmemsg']==1)
						  {
							  alert("This user name is taken, please enter another user name.");
							  jQuery("#username").val("");
						  }
						 
						  if(result['useremail']==1)
						  {
							   alert("This email address already exists, please click login the login button to signin");
							  jQuery("#useremail").val("");
						  }
						  if(result['sucess']==0)
						  {
							   alert("Successfully Registered. Your login request was sent to the site administrator for approval. An approval email will be sent to your email address shortly.");
							  jQuery("#useremail").val("");
							   jQuery("#username").val("")
							    jQuery("#pwd").val("")
							  location.assign("index.php");

						  }
					  }
			   });
		}
	});
	
	jQuery(".loginbtn").click(function(){
		var lusername	=	jQuery("#lusername").val();
		var lpwd		=	jQuery("#lpwd").val();
		var val			=	true;
		if(lusername=="" || lpwd=="")
		{
			alert("All the fields input are required");
			val			=	false;
		}
		if(val)
		{
			var url1		=	'ajax.php';
			var data = {"lusername": lusername,"lpwd": lpwd};
			 jQuery.ajax({
					  type: "POST",
					  dataType: "json",
					  url: url1,
					  data: data,
					  success: function(result){
						  if(result['msg']==1)
						  {
							  location.assign("profile.php");
						  }
						  else
						  {
							  alert("Your username or password doesn't match what we have on file. Try signing in again, or choose Forgot password? for help.");
						  }
					  }
			   });
		}
	});
	
});
function validateEmail(email){
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

	if(!valid) {
        return false;
    } else {
    	return true;
    }
}