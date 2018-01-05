<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/phpbatch/test4/adminhome.php');
?>
<html>
 <head>
  <title>My Account</title>
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <script type="text/javascript" src="./js/changepassword.js" ></script>
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="http://localhost/phpbatch/test4/logout.php">Logout</a><br/>  
   <a href="http://localhost/phpbatch/test4/home.php">Back to Home</a><br/>
   <a href="http://localhost/phpbatch/test4/testlist.php">List of Test Papers</a><br/>
  </div>
  <div id="section">
  <h1>Home: My Account</h1>
   <p id="p1">Press button to change password </p>
   <button id="changepassword" onclick="changepassword()">Change Password</button>
   <form action="updateaccount.php" method="post">
   <table cellspacing="50px">
	 <tr>
	  <td>Username</td>
	  <td><?php echo $_SESSION['username']; ?></td>
	 </tr>
	 <?php
	    $con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'onlinetestdb');
		$q="select * from user where username='".$_SESSION['username']."'";
		$result=mysqli_query($con,$q);
		$row=mysqli_fetch_array($result);
		
	 ?>
	 <tr>
	  <td>Password</td>
	  <td><input type="text" disabled value="<?php echo $row['password']; ?>" name="password"/></td>
	 </tr>
	 <tr>
	  <td></td>
	  <td><input type="submit" style="display:none;" value="Update" name="update"/></td>
	 </tr>
   </table>
   </form>
    </div>  
   <div id="footer">
   copyright &copy; 2018  All Rights Reserved. 
  </div>
  
 </body>
</html>