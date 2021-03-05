<html>
<head>
</head>
<body>
<center><form action="" method="POST">
<table><tr><th>
Titre :</th><td><input type="text" name="titre"></td></tr>
<tR><th>Nom:</th><td><input type="text" name="nom"></td></tr>
<tr><th>Prenom:</th><td><input type="text" name="prenom"></td></tr></table>
<input type="submit" value="reserver" name="reserver" style="margin-left:10%;">
</form></center>
<?php
ini_set("display_errors",0);
         error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("alomrane");
 mysql_query("SET NAMES UTF8"); 

if(isset($_POST["reserver"]))
{
	
	$titre=$_POST['titre'];
	$nom =$_POST['nom'];
	$prenom=$_POST['prenom'];
	
	$res=mysql_query("insert into reservation values('','$titre','$nom','$prenom')");
	if($res){echo '<font color="red"><b><center>merci pour votre initiation</center></b></font>';}
	
}
?>
</body>
</html>