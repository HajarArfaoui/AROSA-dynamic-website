<html><head><meta charset="UTF_8"></head><body>
<?php

ini_set("display_errors",0);
error_reporting(0);
$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("alomrane",$con);
$num=$_POST['num'];
		$montant=$_POST['mont'];
		$type=$_POST['type'];
		$echant=$_POST['echan'];
		if($type == "Direct" or $type == "direct" )
		{
		if($montant > 20000 )
		{
			echo '<script> alert("le montant ne doit pas depasser 20000 DH !");document.location.href="cre.php";;</script>';
		}
		}
		else if($echant > 12 )
			{
			echo '<script> alert("L echantillon ne peut pas depasser 12 mois !");document.location.href="cre.php";;</script>';
			}
		
		
else {

$query =  "INSERT INTO credit VALUES ('','$num', '$montant','$type','$echant','En cours',Now())";
	
echo'<script> alert ("Utilisateur enregistrer ");document.location.href="ajouter.html";</script>';

mysql_query($query);}
mysql_close();
?></body></html>