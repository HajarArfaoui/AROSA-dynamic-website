<html>
<head>
<meta charset="UTF-8">

<script type="text/javascript">
                <!--
                        function open_infos()
                        {
                                window.open('reserver_voyage.php','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=400, height=200');
                        }
                -->
                </script>
				




<link rel="stylesheet" type="text/css" href="ajoutervoyage.css"/> 
</head>
<body>

<div class="contenu">
<div class="header"><a href="new 1.php"><img src="Images/dec.png" width="35" height="30"/> </a><p><font color="#FFF">D&eacuteconnexion </font></p></div>

		

   

<?php


ini_set("display_errors",0);
         error_reporting(0);
$con= mysql_connect("localhost","root","");
mysql_select_db("alomrane");
 mysql_query("SET NAMES UTF8"); 

$montant=$_POST['prix'];

$result= mysql_query("select * from club where Prix = '$montant'",$con);

if ( $result )
{ 
    while ($row=mysql_fetch_array($result))
	{
		echo "<center><br><br>";
		echo "<meta http-equiv='content-type' content='text/html; charset=utf-8' /><font color='FF0000' size='6'> {$row['nomclub']} </font> <BR><br>";
		echo "<font  size='5'> <b>{$row['prix']}</b> dh/mois  </font> <br><br>";echo "<font  size='5'> {$row['categorie']} </font> <br><br>";
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="600" height="400"/><br><br>';  
		
		  echo"<font size='5'><a href='#' onclick='open_infos()'> Inscrire </a></font> ";
		echo "</center>"; 
		  
		
	}
	
	
}
else 
{
echo "<script> alert 'pas de voyages  avec ce prix';</script>";
}
?>

		<br><br><br>
		<a href="affclub.php"><img src="Images/fleche.png" width="40px" height="30px"/></a>
		</div>

   


</body>
</html>