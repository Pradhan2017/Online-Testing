function adminvalidate()
{
 var flag=true;
 var username=document.getElementsByName("username")[0];
 var password=document.getElementsByName("password")[0];
 var errormsg=document.getElementById("errormsg");
 errormsg.style.color="red";
 if(username.value.length==0)
  flag=false;
  
 if(password.value.length==0)
  flag=false;

 if(flag)
   errormsg.innerHTML="";
 else
  errormsg.innerHTML="*Either username/password is blank or incorrect";
 return(flag);
}