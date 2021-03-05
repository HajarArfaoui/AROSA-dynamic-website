<html>
<head>
<meta charset="UTF-8">

<script type="text/javascript">
                <!--
                        function open_infos()
                        {
                                window.open('reserver.php','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=400, height=200');
                        }
                -->
                </script>
				




<link rel="stylesheet" type="text/css" href="ajoutervoyage.css"/> 
</head>
<body>

<div class="contenu">
<div class="header"><a href="new 1.php"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>

		

   
<br><br>
<?php
ini_set("display_errors",0);
         error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("alomrane");
 mysql_query("SET NAMES UTF8"); 

$res=mysql_query("select * from aide ");

	while($row=mysql_fetch_array($res))
	{
		
		echo "<center>";
		echo "<meta http-equiv='content-type' content='text/html; charset=utf-8' /><font color='FF0000' size='6'> {$row['titre']} </font> <BR><br>";
		
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'" width="600" height="400"/><br><br>';  
		echo "</center>";
		echo "<meta http-equiv='content-type' content='text/html; charset=utf-8' /><div style='width:620px;margin-left:22%;Font-Family:  Serif; '><font size='3'> {$row['message']} </font> <br><br>";
		echo "<font size='5' color='#01DF01'>Adresse:</font><font  size='4'> {$row['adresse']} </font> </div><BR><br>";
		 echo"<center><a href='#' onclick='open_infos()'><font size='5' color = 'green'> <b>Participer</b></font></a></center><br><br>";  
		  
		 
									
	}
	?>

		



		<br><br><br><br><br>
		<a href="appli.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>
		</div>

   


</body>
</html>