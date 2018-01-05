<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/phpbatch/test4/index.html');
 
 $size=sizeof($_POST);
 //echo "size=".$size;
 for($j=1,$i=1;$i<=$size;$i++)
 {
  
  $index="que".$j;
  if(!isset($_POST[$index]))
  {
    $j++;
	$i--;
	continue;
  }
  else
  {
  $j++;
  $queid[$i]=$_POST[$index];
 // echo "queid[".$i."]".$queid[$i];
  }
 }
 /* connection */
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 
  /* query to obtain subject */
 $q="select subject from question where queid=$queid[1]";
 $result=mysqli_query($con,$q);
 $row=mysqli_fetch_array($result);
 $subject=$row['subject'];
 
 $q1="insert into test (subject) values ('$subject')";

 mysqli_query($con,$q1);
 
 /* obtaining generated test paper's testid */
 $q2="select max(testid) from test";
 $result2=mysqli_query($con,$q2);
 $row2=mysqli_fetch_array($result2);
 $testid=$row2[0];
 
 /* inserting records in test_question table */
 for($i=1;$i<=$size;$i++)
 {
  $q3="insert into test_question (queid,testid) values ($queid[$i],$testid)";
 mysqli_query($con,$q3);
 }
 
 
 mysqli_close($con);
 header('location:http://localhost/phpbatch/test4/managetests.php');
 
?>