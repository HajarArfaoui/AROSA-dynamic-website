<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

	

	function delClient($num)
	{
		include 'DAOSource.inc';
		connexion("alomrane","localhost","root","");
		$result = mysql_query("select * from employe");
		
		if($result){
		$query1 = "DELETE from employe where codeempl='$num'";
		$result1= mysql_query($query1);
		$query2 = "DELETE from credit where codeempl='$num'";
		$result2= mysql_query($query2);
		echo   '<script> if(confirm( "Voulez vous vraiment supprimer cet Utilisateur ?"))alert("Utilisateur supprime");</script>'; }
		
		else 
		{
		echo '<script> alert("Utilisateur n existe pas");</script>';
		}
		

	}
	
	
	
	
	

	

?>