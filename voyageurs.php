<html>
<head>
<meta charset="UTF-8">

<script type="text/javascript">
                <!--
                        function open_infos()
                        {
                                window.open('ajoutercheque.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=400, height=200');
                        }
                -->
                </script>
				<script type="text/javascript">
                <!--
                        function open_info()
                        {
                                window.open('consulterpaiement.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=400, height=200');
                        }
                -->
                </script>
				<script type="text/javascript">
                <!--
                        function open_info1()
                        {
                                window.open('supprimercredit.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=800px, height=200');
                        }
                -->
                </script>
				

	
<link rel="stylesheet" type="text/css" href="voyageurs.css"/> 
</head>
<body>

<div class="contenu">

<div class="header"><a href="new 1.php"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>
	
<fieldset>
<center>
<br>
   <a href="ajoutervoyage.php" class="s3d Ajouter">
      <font color="#fff" size='4'> Ajouter </font>
        <span class="icons Ajouter"></span>
    </a>
    <br><br>
    <a href="voyageurs.php" class="s3d Afficher">
      <font color="#fff" size='4'> voyageurs </font>
        <span class="icons Afficher"></span>
    </a>
	 
    </center>
   </fieldset>
   
   


	

	

<div class="table1">	

<?php
error_reporting(E_ALL ^ E_DEPRECATED);


$con= mysql_connect("localhost","root","");
mysql_select_db("alomrane");



$result= mysql_query("select * from reserver_voy ",$con);
if ( $result )
{ 
echo "<h1><font color='green'><pre>             Les Adhérents participants   </pre></font> </h1> \n";

$nbemploye=mysql_num_rows($result);
if($nbemploye >0 )
	
{
	
	echo "<table border ='0' bgcolor='#cccccc' width='700px'  >\n";
	echo "<tr > \n";
	echo "<th bgcolor='#eeeeee' > <font color='green'> Nom</font></th> \n";
	echo "<th bgcolor='#eeeeee' ><meta http-equiv='content-type' content='text/html; charset=utf-8' /> <font color='green'> Prènom  </font></th> \n";
	echo "<th bgcolor='#eeeeee' ><meta http-equiv='content-type' content='text/html; charset=utf-8' /> <font color='green'> Activité</font></th> \n";
	
	echo "</tr> \n";
	while ($employe=mysql_fetch_array($result))
	{
		echo "<tr>\n";
		echo "<td > <center>".$employe['nom']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td> <center>".$employe['prenom']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td><center>".$employe['nom_voyage']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		
		echo "</tr>\n";
	}
	echo "</table> \n";
	
}
else 
{echo "<script> alert ('aucun personne a réservé');document.location.href='voyageurs.php';</script>";}
}




?>
</div>
<br><br><br>
<a href="essay1.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>
		

 
   
   </div>


</body>
</html>