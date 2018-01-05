<?php
 
 $username=$_POST['username'];
 $password=$_POST['password'];

 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 $q="insert into user(username,password) values ('$username','$password')";
 mysqli_query($con,$q);
 mysqli_close($con);
 header('location:http://localhost/phpbatch/test4/userlogin.php');
?>