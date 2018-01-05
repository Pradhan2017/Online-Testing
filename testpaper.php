<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/phpbatch/test4/adminhome.php');
 
 $testid=$_GET['testid'];
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 $q="select * from test_question where testid=$testid";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 
 
 
 
?>
<html>
 <head>
  <title> Test Paper</title>
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <link rel="stylesheet" type="text/css" href="./css/testpaper.css" />
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="http://localhost/phpbatch/test4/logout.php">Logout</a><br/>  
   <a href="http://localhost/phpbatch/test4/home.php">Back to Home</a><br/>
   <a href="http://localhost/phpbatch/test4/testlist.php">Back to Test List</a><br/>
    </div>
  <div id="section">
  <h1>Home:Test List:Test Paper</h1>
   <form action="testresult.php" method="post">  
   <?php
      for($i=1;$i<=$row_count;$i++)
	  {
	    $row=mysqli_fetch_array($result);
		$queid=$row['queid'];
		$q1="select * from question where queid=$queid";
		$result1=mysqli_query($con,$q1);
		$row1=mysqli_fetch_array($result1);
		
    ?>
	 <div class="questiondiv">
	  <input type="hidden" name="queid<?php echo $i; ?>" value="<?php echo $row1['queid']; ?>"/>
	  <span class="queno">Que#<?php echo "$i:"; ?></span>
	  <span class="question"><?php echo $row1['que']; ?></span><br/>
	  <input class="option" type="radio" name="option<?php echo $i; ?>" value="a" />
		<span class="options">(a)<?php echo " ".$row1['optiona']; ?></span><br/>
	  <input class="option" type="radio" name="option<?php echo $i; ?>" value="b" />
		<span class="options">(b)<?php echo " ".$row1['optionb']; ?></span><br/>
	  <input class="option" type="radio" name="option<?php echo $i; ?>" value="c" />
		<span class="options">(c)<?php echo " ".$row1['optionc']; ?></span><br/>
	  <input class="option" type="radio" name="option<?php echo $i; ?>" value="d" />
		<span class="options">(d)<?php echo " ".$row1['optiond']; ?></span><br/>
	  <input class="option" checked type="radio" name="option<?php echo $i; ?>" value="e" />
		<span class="options">(e) I do not know the answer</span><br/>
	 </div>
	 <?php } ?>
	 <input type="submit" value="Submit to See Result"/>
	 </form>

   </div>
    </div>  
   <div id="footer">
   copyright &copy; 2018  All Rights Reserved. 
  </div>
  
 </body>
</html>