<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/phpbatch/test4/index.html');
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 $q="select distinct subject from question";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 
 
?>
<html>
 <head>
  <title> Create Test Paper</title>
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <script type="text/javascript" src="./js/testform.js"></script>
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="http://localhost/phpbatch/test4/logout.php">Logout</a><br/>  
   <a href="http://localhost/phpbatch/test4/adminhome.php">Back to Control Pannel</a><br/>
   <a href="http://localhost/phpbatch/test4/managetests.php">Back to Manage Tests</a><br/>
    </div>
  <div id="section">
  <h1>Control Pannel:Manage Tests:Create Test Paper</h1>
  
  <table cellspacing="50px">
	 <tr>
	  <td>Select Subject</td>
	  <td><select name="subject" onchange="getquestions(this.value)">
	      <option>Select Subject</option>
	     <?php 
			for($i=1;$i<=$row_count;$i++)
			{
			 $row=mysqli_fetch_array($result);
			?> 
		    <option><?php echo $row['subject']; ?></option>
		<?php } ?>
			</select></td>
	 </tr>
	</table>
	<form id="testform" action="doCreatetestpaper.php" method="post" >
	<div id="formdiv">
	
	
	 
	 
   </div>
   </form>
   <div id="errormsg"></div>
 
    </div>  
   <div id="footer">
   copyright &copy; 2018  All Rights Reserved. 
  </div>
  
 </body>
</html>