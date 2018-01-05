function validateform()
{

 var flag=true;
 var que=document.getElementsByName("que")[0];
 var optiona=document.getElementsByName("optiona")[0];
 var optionb=document.getElementsByName("optionb")[0];
 var optionc=document.getElementsByName("optionc")[0];
 var optiond=document.getElementsByName("optiond")[0];
 var ans=document.getElementsByName("ans");
 var subject=document.getElementsByName("subject")[0];
 var errormsg=document.getElementById("errormsg");
 errormsg.style.color="red";
 if(que.value.length==0)
   flag=false;
 
 if(optiona.value.length==0)
   flag=false;
 
 if(optionb.value.length==0)
   flag=false;
 
 if(optionc.value.length==0)
  flag=false;
 
 if(optiond.value.length==0)
  flag=false;
 
 if(ans[0].checked||ans[1].checked||ans[2].checked||ans[3].checked);
 else
  flag=false;
 
 if(subject.value.length==0)
  flag=false;
 if(flag==false)
  errormsg.innerHTML="*All fields are mandatory";
 else
  errormsg.innerHTML="";
 return(flag);
}