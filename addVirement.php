<html>
	<title>TP 5 - Virement</title>
	<meta charset="UTF-8">
	<body>

		<?php
		ini_set("display_errors",0);
          error_reporting(0);
		include 'DAOCompte.inc';
		
		$cmpt=$_POST['cmpt'];
		$mont=$_POST['mont'];

		addVirement($cmpt,$mont);		
		echo '<font color="red"><b><center>Montant a ajouté avec succés.</center></b></font>';

		?>

	</body>

</html>