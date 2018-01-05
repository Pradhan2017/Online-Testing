<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/phpbatch/test4/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/phpbatch/test4/index.html');
 htmlspecialchars($_POST['subject']);
 $subject=trim($_POST['subject']);
  
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 $q="select * from question where subject='$subject'";
 $result=mysqli_query($con,$q);
 mysqli_close($con);
 $row_count=mysqli_num_rows($result);
?>

<table id="testformtable">
<?php
 for($i=1;$i<=$row_count;$i++)
 {
  $row=mysqli_fetch_array($result);
  echo "<tr><td><input type='checkbox' class='checkboxes' value='";
  echo $row['queid'];
  echo "' name='que";
  echo $i;
  echo "'/>";
  echo "</td><td>";
  echo $row['queid'];
  echo "</td><td>";
  echo $row['que'];
  echo "</td></tr>";
 }
 echo "<tr><td></td><td><input type='submit' value='Create' onclick='return validateform()'/></td></tr>";
 
 
?>
</table></form>