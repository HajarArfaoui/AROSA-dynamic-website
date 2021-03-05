<html>
	<title>TP 5 - Delete Client</title>
	<meta charset="UTF-8">
	<body>

		<?php
	ini_set("display_errors",0);
          error_reporting(0);
		  include 'DAOSource.inc';
		  connexion("alomrane","localhost","root","");
		
		$num=$_POST['num'];
		$result = mysql_query("select * from employe where codeempl='$num'");
		$row=mysql_fetch_array($result);
		if($row['codeempl']== $num){
		$query1 = "DELETE from employe where codeempl='$num'";
		$result1= mysql_query($query1);
		$query2 = "DELETE from credit where codeempl='$num'";
		$result2= mysql_query($query2);
		echo   '<script> if(confirm( "Voulez vous vraiment supprimer cet Utilisateur ?"))alert("Utilisateur supprime");</script>'; }
		
		else 
		{
		echo '<script> alert("Utilisateur n existe pas");document.location.href="delClient.html";</script>';
		}
		

		
		
		

		?>

	</body>

</html>