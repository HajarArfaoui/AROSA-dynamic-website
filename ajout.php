<html><head><meta charset="UTF_8"></head><body>

<?php

ini_set("display_errors",0);
error_reporting(0);
$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("alomrane",$con);
$code=$_POST['num'];
$n=$_POST['nom'];
$p=$_POST['pre'];
$log=$_POST['log'];
$f=$_POST['fct'];
$cin=$_POST['cin'];
$em=$_POST['mail'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$adr=$_POST['adrs'];
$tel=$_POST['tel'];
$date=$_POST['date'];
str_replace("-","-",$date);

if($pass != $repass)
{
echo '<script> alert("le mot de passe et retaper mot de passe ne sont pas identiques!");document.location.href="ajouter.html";</script>';
}

else{
$result = mysql_query("select * from employe where Login='$log' ") or die ("failed to query databse".mysql_error());

$row=mysql_fetch_array($result);

if($row['Login']== $log )
{
	echo'<script> alert ("login deja existe ! ");document.location.href="ajouter.html";</script>';
	
}
else {

$req="insert into employe values('$code','$n','$p','$log','$f','$cin','$em','$pass','$adr','$tel','$date')";
echo'<script> alert ("Utilisateur enregistrer. ");document.location.href="ajouter.html";</script>';

mysql_query($req);}}
mysql_close();
?></body></html>