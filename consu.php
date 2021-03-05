<html>
<head>
<meta charset="UTF-8">

<script type="text/javascript">
                <!--
                        function open_infos()
                        {
                                window.open('ajouterVirement.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=400, height=200');
                        }
                -->
                </script>
				<script type="text/javascript">
                <!--
                        function open_info()
                        {
                                window.open('consulterpaiement.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=700, height=200');
                        }
                -->
                </script>
				

	
<link rel="stylesheet" type="text/css" href="consu.css"/> 
</head>
<body>

<div class="contenu">

<div class="header"><a href="new 1.php"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>
	<div class="form">
		<form action="" Method="POST">
			<b>Code Adhérent :</b> <input type="text" name="num"> &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="Chercher" name="chercher">
		</div>		
<fieldset>
<center>
    <a href="cre.php" class="s3d Ajouter">
      <font color="#fff" size='4'> Ajouter </font>
        <span class="icons Ajouter"></span>
    </a>
    <br><br>
    <a href="#" class="s3d Virement" onclick="javascript:open_infos();">
      <font color="#fff" size='4'>  Virement </font>
        <span class="icons Virement"></span>
    </a>
    <br><br>
    <a href="consu.php" class="s3d Consulter" ">
     <font color="#fff" size='4' >  Consulter </font>
        <span class="icons Consulter"></span>
    </a>
    <br><br>
    <a href="#" class="s3d Paiement" onclick="javascript:open_info();">
     <font color="#fff" size='4' >  Paiement </font>
        <span class="icons Paiement"></span>
    </a>
    </center>
   </fieldset>
   
   


	

	

<div class="table1">	
<?php
error_reporting(E_ALL ^ E_DEPRECATED);


$con= mysql_connect("localhost","root","");
mysql_select_db("alomrane");
if(isset($_POST["chercher"]))
{
$num = $_POST['num'];

$result= mysql_query("select * from credit where codeempl ='$num'",$con);
if ( $result )
{ 
echo "<h1><font color='green'><pre>                Resultat de votre recherche</pre></font> </h1> \n";

$nbemploye=mysql_num_rows($result);
if($nbemploye >0 )
	
{
	
	echo "<table border ='0' bgcolor='#cccccc' width='850px' \n";
	echo "<tr > \n";
	echo "<th bgcolor='#eeeeee' ><font color='green'> Code credit  </font></th> \n";
	echo "<th bgcolor='#eeeeee' > <font color='green'> Code employe  </font></th> \n";
	echo "<th bgcolor='#eeeeee' > <font color='green'> Montant</font></th> \n";
	echo "<th bgcolor='#eeeeee' > <font color='green'> Type </font></th> \n";
	echo "<th bgcolor='#eeeeee' ><font color='green'> Echantillon</font></th> \n";
	echo "<th bgcolor='#eeeeee' ><font color='green'>  Status </font></th> \n";
	echo "<th bgcolor='#eeeeee' > <font color='green'> Date de demande</font></th> \n";
	
	
	echo "</tr> \n";
	while ($employe=mysql_fetch_array($result))
	{
		echo "<tr>\n";
		echo "<td> <center>".$employe['codecredit']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td> <center>".$employe['codeempl']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td><center>".$employe['mantant']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td><center>".$employe['type']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td><center>".$employe['echantillion']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td><center> ".$employe['Status']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td> <center>".$employe['Date']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		/*echo"<td><font size='4'> <a href='redemittel-sprechen.pdf'>Download</a></font></td>";*/
		
		echo "</tr>\n";
	}
	echo "</table> \n";
	
}

else 
{
	echo "<script> alert ('pas de compte credit avec ce code'); document.location.href='consu.php';</script>";}
}
}

?>
</div>
<br><br><br>
<a href="appli.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>
		


   
   </div>


</body>
</html>