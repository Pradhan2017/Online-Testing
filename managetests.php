<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/phpbatch/test4/index.html');
 
 
?>
<html>
 <head>
  <title> Manage Tests</title>
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="http://localhost/phpbatch/test4/logout.php">Logout</a><br/>  
   <a href="http://localhost/phpbatch/test4/adminhome.php">Back to Control Pannel</a><br/>
   <a href="http://localhost/phpbatch/test4/viewtestpapers.php">View Test Papers</a><br/>
   <a href="http://localhost/phpbatch/test4/createtestpaper.php">Create Test Paper</a><br/>
  </div>
  <div id="section">
  <h1>Control Pannel:Manage Tests</h1>
   <table cellspacing="50px">
	 <tr>
	  <td><a href="http://localhost/phpbatch/test4/viewtestpapers.php"><img id="viewimage" src="./images/viewimage.png" style="border:2px solid olive;width:100px;height:100px;"/><br/>View Test Papers</a></td>
	  <td><a href="http://localhost/phpbatch/test4/createtestpaper.php"><img id="createtestimage" src="./images/questionsimage.jpg" style="border:2px solid olive;height:100px;width:100px;"/><br/>Create Test Paper</a></td>
	 </tr>
   </table>
    </div>  
   <div id="footer">
   copyright &copy; 2018  All Rights Reserved. 
  </div>
  
 </body>
</html>