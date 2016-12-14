<?php
require ('mysqlconnect.php');
$username = $_POST['username'];
$password = $_POST['password'];
$mobileNo = $_POST['mobileNo'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];
$sql="insert into emp(username,password,mobileNo,Gender,Address) values('$username','$password','$mobileNo','$Gender','$Address')";
$result=mysql_query($sql) or die(mysql_error());
echo "<h1>you have registered sucessfully</h1>";
?>