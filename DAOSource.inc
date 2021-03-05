<?php

	function connexion($bd,$host,$user,$pass)
	{
		mysql_connect($host,$user,$pass) or die ("Impossible de se connecter à la base de données"); 
		mysql_select_db($bd); 
	}
	
?>