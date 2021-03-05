<html><head><meta charset="UTF-8"></head><body><?php
ini_set("display_errors",0);
 error_reporting(0);
 
$username=$_POST['user'];
$password=$_POST['pass'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);


mysql_connect("localhost","root","");
mysql_select_db("alomrane");

$result=mysql_query("select * from employe where Login='$username' and  password='$password'") or die ("failed to query databse".mysql_error());
$row=mysql_fetch_array($result);
if($row['Login']== $username && $row['password']== $password )

{
	if($username=="simsim")
	{
	echo '<script> alert("login succès!");document.location.href="essay1.html";</script>';
	}
	else
	{
		echo '<script> alert("login succès!");document.location.href="appli.html";</script>';}
	}
else
{
	echo '<script>alert("vous ne pouvez pas connecter");document.location.href="new 1.html";</script>';
	
}
?></body></html>