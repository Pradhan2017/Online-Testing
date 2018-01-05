<html>
 <head>
  <title> Admin Login</title>
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <!--<link rel="stylesheet" type="text/css" href="./css/login.css" />-->
  <script type="text/javascript" src="./js/login.js"></script>
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"></h2>
  </div>
  <div id="nav">
   <a href="http://localhost/phpbatch/test4/adminlogin.php">Admin Login</a><br/>
   <a href="http://localhost/phpbatch/test4/userlogin.php">User Login</a><br/>
   <a href="http://localhost/phpbatch/test4/registration.php">New User Registration</a><br/>
  
  </div>
  <div id="section">
  <h1>Admin Login</h1>
   <form action="http://localhost/phpbatch/test4/adminvalidation.php" method="post">
    <table>
	 <tr>
	  <td>Username</td>
	  <td><input type="text" name="username" placeholder="username"/></td>
	 </tr>
	 <tr>
	  <td>Password</td>
	  <td><input type="password" name="password" placeholder="password"/></td>
	 </tr>
	 <tr>
	  <td></td>
	  <td><input type="submit" value="Login" onclick="return adminvalidate()"/><input type="reset"/></td>
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