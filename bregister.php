<?php
error_reporting(0);
$name=$_POST['name'];
$roll_no=$_POST['roll'];
$programme=$_POST['programme'];
$gender=$_POST['gender'];
$mobile=$_POST['mob'];
$email=$_POST['email'];
$passw=$_POST['pass'];

$host='localhost';
$user='root';
$pass='';

$sql=mysql_connect($host,$user,$pass);

if(!$sql)
{
	echo mysql_error();
}

$insert="insert into reg(name,roll,prog,gender,mob,email,password) values('$name','$roll_no','$programme','$gender','$mobile','$email','$passw')";

mysql_select_db('uni');
$re=mysql_query($insert,$sql);

if($re===true)
{
	echo "record inserted". "<script>alert</script>";
	header("Refresh: 2;url=home.php?scuess");;
}
else
{
	echo "record not inserted";
	echo mysql_error();
}
?>