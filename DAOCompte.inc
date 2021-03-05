<?php
	

	function addCompte($num, $montant,$type,$echant)
	{
		include 'DAOSource.inc';
		connexion("alomrane","localhost","root","");
		
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
		$result= mysql_query($query);	
		if (mysql_error())
		{
			print "Erreur dans la base de données :".mysql_error();
			exit();
		}
		}
	}



	function addVirement($compte, $montant)
	{
		include 'DAOSource.inc';
		connexion("alomrane","localhost","root","");
		$result = mysql_query("select * from credit where codecredit='$compte'");
		$row=mysql_fetch_array($result);
		if($row['codecredit']== $compte){
		$query =  "UPDATE credit SET mantant=mantant+'$montant' , Date = Now()  where codecredit='$compte'";
		$result= mysql_query($query);}
		else
		{
		echo ' <script> alert ("Ce code crédit n existe pas!!!!!"); document.location.href="ajouterVirement.html";</script>';
		}
		
	}
	function addVoyage($titre,$msg,$annonce)
	{
	  include 'DAOSource.inc';
		connexion("alomrane","localhost","root","");
		$query =  "INSERT INTO voyage VALUES ('','$titre', '$msg','$annonce')";
		$result= mysql_query($query);  
		
		if (mysql_error())
		{
			print "Erreur dans la base de données :".mysql_error();
			exit();
		}
	
	
	
	
	}
	

	
?>