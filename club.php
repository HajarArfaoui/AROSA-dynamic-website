<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript">
<!--
                        function open_infos()
                        {
                                window.open('inscrire_club.php','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=400, height=200');
                        }
                -->
                </script>

<link rel="stylesheet" type="text/css" href="club.css"/> 
</head>
<body>

<div class="contenu">
<div class="header"><a href="new 1.html"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>

		
<fieldset>
<center>
<br>
    <a href="club.php" class="s3d Ajouter">
      <font color="#fff" size='4'> Ajouter </font>
        <span class="icons Ajouter"></span>
    </a>
    <br><br>
    <a href="adhrents.php" class="s3d Afficher">
      <font color="#fff" size='4'> Adhérents </font>
        <span class="icons Afficher"></span>
    </a>
    
    </center>
   </fieldset>
   
   
  
<div class="table1">
		<form name="form1" action="" method="POST" enctype="multipart/form-data">
<table>
<tr><th> Titre :</th><td> <input type="text" name="titre" size='30' ></td></tr>
<tr><th> Prix :</th><td> <input type="text" name="prix" size='30' ></td></tr>
<tr><th> Catégorie :</th><td><input name="categorie" type="text" size='30'></textarea><font color='red'></td></tr>
<tr>
<th>Image:</th>
<td> <input type="file" name="f1"></td>
</tr>
</table>
<br><br>
<pre>          <input type="submit" name="submit1" value="uploadImage">      <input type="submit" name="submit2" value="viewImage">          </pre>



<br><br>
</form>


<?php
ini_set("display_errors",0);
         error_reporting(0);
		
mysql_connect("localhost","root","");
mysql_select_db("alomrane");
 mysql_query("SET NAMES UTF8"); 

if(isset($_POST["submit1"]))
{
	
	$titre=$_POST['titre'];
	$prix=$_POST['prix'];
	$categorie=$_POST['categorie'];
	$image=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
	$res=mysql_query("insert into club values('','$titre','$prix','$categorie','$image')");
	if($res){echo '<script> alert ("Informations ajoutés avec succés ") ; </script>';}
	
}
if(isset($_POST["submit2"]))
{
	$res=mysql_query("select * from club");

	while($row=mysql_fetch_array($res))
	{
		echo "<center><br><br>";
		echo "<meta http-equiv='content-type' content='text/html; charset=utf-8' /><font color='FF0000' size='6'> {$row['nomclub']} </font> <BR><br>";
		echo "<font  size='5'> <b>{$row['prix']}</b> dh/mois  </font> <br><br>";echo "<font  size='5'> {$row['categorie']} </font> <br><br>";
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="600" height="400"/><br><br>';  
		
		  echo"<font size='5'><a href='#' onclick='open_infos()'> Inscrire </a></font> ";
		echo "</center>"; 
									
	}
	
}
	
?>
</div>
		<br><br><br><br><br>
		<a href="essay1.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>
		
<br><br><br><br><br><br>
   


</body>
</html>