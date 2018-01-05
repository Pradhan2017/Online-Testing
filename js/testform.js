function getquestions(str)
{

 if(str!="Select Subject")
 {
  
  var req=new XMLHttpRequest();
 
  req.open("post","http://localhost/phpbatch/test4/getquestions.php",true);
  
  str = encodeURIComponent(str);
  req.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   req.send("subject="+str);
  req.onreadystatechange=function(){
   if(req.status==200 && req.readyState==4)
   {
    
    document.getElementById("formdiv").innerHTML=req.responseText;
	document.getElementById("formdiv").style.overflowY="scroll";
   }
  }
 }
}
function validateform()
{
 var flag=true;
 var check_count=0;
  var chk=document.getElementsByClassName("checkboxes");
  for(i=0;i<chk.length;i++)
   if(chk[i].checked) 
     check_count++;
  if(check_count==0 ||check_count>5)
   flag=false;
if(flag==false)   
{
document.getElementById("errormsg").style.color="red";
  document.getElementById("errormsg").innerHTML="Either you have selected none or more than 5 questions";
 }
 return(flag);
}