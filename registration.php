<html>
 <head>
  <title> User Registration</title>
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <script type="text/javascript" src="./js/registration.js" ></script>
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
  </div>
  <div id="nav">
   <a href="http://localhost/phpbatch/test4/adminlogin.php">Admin Login</a><br/>
   <a href="http://localhost/phpbatch/test4/userlogin.php">User Login</a><br/>
   <a href="http://localhost/phpbatch/test4/registration.php">New User Registration</a><br/>
  
  </div>
  <div id="section">
  <h1>New User Registration Form</h1>
  <form action="doRegistration.php" method="post">
   <table>
    <tr>
	 <td>Username</td>
	 <td><input type="text" name="username" onkeyup="checkname(this.value)"/><span id="spanmsg"></span></td>
	</tr>
	<tr>
	 <td>Password</td>
	 <td><input type="password" name="password" /></td>
	</tr>
	<tr>
	 <td></td>
	 <td><input id="submit" type="submit" disabled value="Register" onclick="return uservalidate()"/></td>
	</tr>
   </table>
  </form>
   <div id="errormsg"></div>
  </div>
   <div id="footer">
   copyright &copy; 2018  All Rights Reserved. 
  </div>
  
 </body>
</html>