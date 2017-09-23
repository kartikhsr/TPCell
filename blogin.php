<?php
error_reporting(0);

$username = $_POST['email'];
$password = $_POST['password'];

$host='localhost';
$user='root';
$pass='';

$sql=mysql_connect($host,$user,$pass);

if(!$sql)
{
	echo mysql_error();
}

$insert="Select * from reg where email = '$username' and password='$password'";

mysql_select_db('uni');
$re=mysql_query($insert,$sql);

if(mysql_num_rows($re) > 0)
{
 	echo "<script>alert('Welcome')</script>";
	
}
else
{
		echo "<script>alert('Please Check Username and password')</script>";
	header("Refresh:1; url = Login.php?Failed");
}
?>