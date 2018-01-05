<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/phpbatch/test4/adminhome.php');
?>
<html>
 <head>
  <title>Home</title>
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
   <a href="http://localhost/phpbatch/test4/myaccount.php">My Account</a><br/>
   <a href="http://localhost/phpbatch/test4/testlist.php">List of Test Papers</a><br/>
  </div>
  <div id="section">
  <h1>Home</h1>
   <table cellspacing="50px">
	 <tr>
	  <td><a href="http://localhost/phpbatch/test4/myaccount.php"><img id="myaccountimage" src="./images/myaccountimage.jpg" style="border:2px solid olive;width:100px;height:100px;"/><br/>My Account</a></td>
	  <td><a href="http://localhost/phpbatch/test4/testlist.php"><img id="testpaperslistimage" src="./images/testpaperslistimage.jpg" style="border:2px solid olive;height:100px;width:100px;"/><br/>Test Papers List</a></td>
	 </tr>
   </table>
    </div>  
   <div id="footer">
     copyright &copy; 2018  All Rights Reserved.
  </div>
  
 </body>
</html>