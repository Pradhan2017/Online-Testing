<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/phpbatch/test4/index.html');
 
 $que=$_POST['que'];
 $optiona=$_POST['optiona'];
 $optionb=$_POST['optionb'];
 $optionc=$_POST['optionc'];
 $optiond=$_POST['optiond'];
 $ans=$_POST['ans'];
 $subject=$_POST['subject'];
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 $q="insert into question (que,optiona,optionb,optionc,optiond,ans,subject) values ('$que','$optiona','$optionb','$optionc','$optiond','$ans','$subject')";
 mysqli_query($con,$q);
 mysqli_close($con);
 header('location:http://localhost/phpbatch/test4/createquestion.php');
?>