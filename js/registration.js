function uservalidate()
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
  errormsg.innerHTML="*Password is blank or incorrect";
 return(flag);
}
function checkname(str)
{

 str=str.trim();
 if(str.length==0)
 {
     document.getElementById("spanmsg").style.color="blue";
	 document.getElementById("spanmsg").innerHTML="Write username...";
	 document.getElementById("submit").disabled=true;
 }
 else
 {
 
  var req= new XMLHttpRequest();
  req.open("get","http://localhost/phpbatch/test4/checkname.php?username="+str,true);
  req.send();
  req.onreadystatechange=function(){
   if(req.status==200 && req.readyState==4)
   {
    if((req.responseText)=="user hai")
	{
	 document.getElementById("spanmsg").style.color="red";
	 document.getElementById("spanmsg").innerHTML="Username already exists";
	 document.getElementById("submit").disabled=true;
	}
	else 
	{
	 document.getElementById("spanmsg").style.color="green";
	 document.getElementById("spanmsg").innerHTML="Perfect!!!";
	 document.getElementById("submit").disabled=false;
	}
   }
  }
 }
}