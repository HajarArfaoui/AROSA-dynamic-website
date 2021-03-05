<?php 
ini_set("display_errors",0);
 error_reporting(0); 
if (isset($_POST['code']))
{
$connec = mysql_connect("localhost", "root", "" );
mysql_select_db("alomrane" );   

$num=$_POST['code'];

$query="select * from employe where codeempl='$num'";
$result=mysql_query($query) or die ("failed to query databse".mysql_error());

$row=mysql_fetch_array($result);
if($row['codeempl']== $num )
{
	echo '<script> alert("Votre mot de passe est: '.$row['password'].'");document.location.href="new 1.html"</script>'; 
	
}
else 
	echo 'cet adherent ne existe pas';
}
mysql_close();

 ?>