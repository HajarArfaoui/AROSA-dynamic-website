<html>
<head>
</head>
<body>
<center><form action="" method="POST">
<table><tr><th>
Nom Club:</th><td><input type="text" name="titre"></td></tr>
<tr><th>
Nom:</th><td><input type="text" name="nom"></td></tr>
<tr><th>
Prenom:</th><td><input type="text" name="prenom"></td></tr></table>
<input type="submit" value="reserver" name="reserver">
</form></center>
<?php
ini_set("display_errors",0);
         error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("alomrane");
 mysql_query("SET NAMES UTF8"); 

if(isset($_POST["reserver"]))
{
	
	$nomclub=$_POST['titre'];
	$nom =$_POST['nom'];
	$prenom=$_POST['prenom'];
	
	$res=mysql_query("insert into inscrire_club values('','$nom','$prenom','$nomclub',Now())");
	if($res){echo '<font color="red"><center>merci pour votre inscription</center></font> ';}
	
}
?>
</body>
</html>