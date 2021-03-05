<html>
	<title>TP 5 - Ajouter Compte</title>
	<meta charset="UTF-8">
	<body>

		<?php
			ini_set("display_errors",0);
           error_reporting(0);
		include 'DAOCompte.inc';
		
		$num=$_POST['num'];
		$mont=$_POST['mont'];
		$type=$_POST['type'];
		$echant=$_POST['echan'];
		
		

		addCompte($num,$mont,$type,$echant);		
		
		
	
	
		
			echo'<script> alert ("Votre demande a enregistré.");document.location.href="cre.php"</script>';
			
		
		
	
			
		

		?>

	</body>

</html>