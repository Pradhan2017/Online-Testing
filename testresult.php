<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/phpbatch/test4/adminhome.php');
 
 $size=sizeof($_POST);
 $size=$size/2;
 
 for($i=1;$i<=$size;$i++)
 {
  $index1="queid".$i;
  $index2="option".$i;
  $queid[$i]=$_POST[$index1];
  $markedoption[$i]=$_POST[$index2];
 }
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 
 

 
 
 
 
?>
<html>
 <head>
  <title> Test Result</title>
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
  <h1>Home:Test List:Test Paper: Test Result</h1>
  
   <?php
		$right=0;
		$wrong=0;
		$notattempted=0;
		
      for($i=1;$i<=$size;$i++)
	  {
	     $q="select * from question where queid=$queid[$i]";
		$result=mysqli_query($con,$q);
 	    $row=mysqli_fetch_array($result);
		if($markedoption[$i]==$row['ans']) 
		  $right++;
		if($markedoption[$i]=="e")  
		  $notattempted++;
		if($markedoption[$i]!="e" && $markedoption[$i]!=$row['ans']) 
		 $wrong++;
		
		
    ?>
	 <div  class="questiondiv">
	  <span class="queno">Que#<?php echo "$i:"; ?></span>
	  <span class="question"><?php echo $row['que']; ?></span><br/>
	  <span class="options" style="color:<?php if($markedoption[$i]=="a") if($row['ans']=="a") echo "green"; else echo "red"; else echo "black"; ?>">(a)<?php echo " ".$row['optiona']; ?></span><br/>
	  <span class="options" style="color:<?php if($markedoption[$i]=="b") if($row['ans']=="b") echo "green"; else echo "red"; else echo "black"; ?>">(b)<?php echo " ".$row['optionb']; ?></span><br/>
	  <span class="options" style="color:<?php if($markedoption[$i]=="c") if($row['ans']=="c") echo "green"; else echo "red"; else echo "black"; ?>">(c)<?php echo " ".$row['optionc']; ?></span><br/>
	  <span class="options" style="color:<?php if($markedoption[$i]=="d") if($row['ans']=="d") echo "green"; else echo "red"; else echo "black"; ?>">(d)<?php echo " ".$row['optiond']; ?></span><br/>
	  
	 </div>
	 <?php } ?>
	 <div>
	  <table id="resulttable" align="center">
	   <tr>
	    <th>Attempted</th>
		<th><?php echo $right+$wrong; ?></th>
	   </tr>
	   <tr>
	    <th>Not Attempted</th>
		<th><?php echo $notattempted; ?></th>
	   </tr>
	   <tr>
	    <th>Right</th>
		<th><?php echo $right; ?></th>
	   </tr>
	   <tr>
	    <th>Wrong</th>
		<th><?php echo $wrong; ?></th>
	   </tr>
	  </table>
	 </div>
	

   </div>
    </div>  
   <div id="footer">
   copyright &copy; 2018  All Rights Reserved.
  </div>
  
 </body>
</html>