<?php

	function connexion($bd,$host,$user,$pass)
	{
		mysql_connect($host,$user,$pass) or die ("Impossible de se connecter � la base de donn�es"); 
		mysql_select_db($bd); 
	}
	
?>