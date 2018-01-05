<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/phpbatch/test4/adminhome.php');
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 $q="select * from test";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 
 
?>
<html>
 <head>
  <title> Test List</title>
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <link rel="stylesheet" type="text/css" href="./css/table.css" />
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="http://localhost/phpbatch/test4/logout.php">Logout</a><br/>  
   <a href="http://localhost/phpbatch/test4/home.php">Back to Home</a><br/>
   <a href="http://localhost/phpbatch/test4/myaccount.php">My Account</a><br/>
    </div>
  <div id="section">
  <h1>Home:Test List</h1>
  <p>Click on the <span style="color:olive; font-weight:bold;">Test Id</span> to attempt the test paper</p>
  <div id="tablediv">
  <table id="questiontable">
	 <tr id="headrow">
	  <th>Test Id</th>
	  <th>Subject</th>
	  <th>Total Questions</th>
	 </tr>
<?php
	for($i=1;$i<=$row_count;$i++)
	{
	  $row=mysqli_fetch_array($result);
	  $q1="select * from test_question where testid=".$row['testid'];
	  $result1=mysqli_query($con,$q1);
	  $row_count1=mysqli_num_rows($result1);
?>
	 <tr class="<?php if($i%2==0) echo "odd"; ?>">
	  <td><a href="http://localhost/phpbatch/test4/testpaper.php?testid=<?php echo $row['testid']; ?>"><?php echo $row['testid']; ?></a></th>
	  <td><?php echo $row['subject']; ?></td>
	  <td><?php echo $row_count1; ?></td>
	 </tr>
<?php } ?>
   </table>
   </div>
    </div>  
   <div id="footer">
   copyright &copy; 2018  All Rights Reserved. 
  </div>
  
 </body>
</html>