<?php
// on se connecte à notre base
error_reporting(E_ALL ^ E_DEPRECATED);
$base = mysql_connect ('localhost', 'root', '');

mysql_select_db ('alomrane', $base) ;
?>
<html>
<head>
<title>Modification du tél et de l'adresse de Benoît</title>
</head>
<body>
<?php
$num =$_POST['num'];
$nom =$_POST['nom'];
$pre =$_POST['pre'];
$log =$_POST['log'];
$cin =$_POST['cin'];
$mail =$_POST['mail'];
$pass =$_POST['pass'];
$adr =$_POST['adrs'];
$date =$_POST['date'];
$tel=$_POST['tel'];
$fct =$_POST['fct'];
// lancement de la requête
$result = mysql_query("select * from employe where codeempl='$num'");
		$row=mysql_fetch_array($result);
		if($row['codeempl']== $num){
		$sql =" UPDATE employe SET nom = '$nom' ,prenom='$pre',Login='$log' ,fonction='$fct' ,cin='$cin' ,email='$mail' ,password='$pass' ,Adresse='$adr' ,Telephone='$tel' ,datenaissance='$date'  where codeempl='$num' ";


// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
		echo '<script> alert("la modification est fait avec succes"); document.location.href="mod.html";</script>';}
		else
		{
			echo ' <script> alert ("Cet utilisateur n existe pas !!!!"); document.location.href="mod.html";</script>';
		}

// on ferme la connexion à la base
mysql_close();
?>

</body>
</html>