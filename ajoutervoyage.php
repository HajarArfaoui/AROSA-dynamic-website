<html>
<head>
<meta charset="UTF-8">



	<script type="text/javascript">
<!--
function verif_formulaire()
{
 if(document.formulaire.nom.value == "")  {
   alert("Veuillez entrer votre nom!");
   document.formulaire.nom.focus();
   return false;
  }
 if(document.formulaire.pre.value == "") {
   alert("Veuillez entrer votre prenom!");
   document.formulaire.pre.focus();
   return false;
  }
 if(document.formulaire.mail.value == "") {
   alert("Veuillez entrer votre adresse électronique!");
   document.formulaire.mail.focus();
   return false;
  }
 if(document.formulaire.mail.value.indexOf('@') == -1) {
   alert("Ce n'est pas une adresse électronique!");
   document.formulaire.mail.focus();
   return false;
  }
 if(document.formulaire.pass.value == "") {
   alert("Veuillez entrer votre motdepasse!");
   document.formulaire.pass.focus();
   return false;
   }
 
}


function valider(monchamps){
	var mini = 8
	var maxi = 20
	if ( mini != 0 ) {
	  // Si la longueur de la saisie est inférieure au minimum demandé
	  if ( monchamps.value.length < mini ) {
		// Envoi d'une alerte
		alert('Vous devez saisir au moins ' + mini + ' caracteres.');
		return false
	  }
	}
	  // Si la longueur de la saisie est supérieure au maximum demandé
	if ( maxi != 0 ) {
	  if ( monchamps.value.length > maxi ) {
		alert('Vous ne devez pas saisir plus de ' + maxi + ' caracteres.');
		return false
	  }
	}
  }

</script>
<link rel="stylesheet" type="text/css" href="voyage.css"/> 
</head>
<body>

<div class="contenu">
<div class="header"><a href="new 1.php"><img src="Images/dec.png" width="35" height="30"/> </a><p><font color="#FFF">D&eacuteconnexion </font></p></div>

		
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
		<form name="form1" action="" method="POST" enctype="multipart/form-data">
<table>
<tr><th> Titre :</th><td> <input type="text" name="titre" size='30' ></td></tr>
<tr><th> Prix :</th><td> <input type="text" name="prix" size='30' ></td></tr>
<tr><th> Message :</th><td><textarea name="msg" placeholder="Ecrire une petite description"  rows='10' cols='50'></textarea><font color='red'></td></tr>
<tr>
<th>Image:</th>
<td> <input type="file" name="f1"></td>
</tr>
</table>
<br><br>
<pre>                  <input type="submit" name="submit1" value="uploadImage">      <input type="submit" name="submit2" value="viewImage">          </pre>



<br><br>
</form>
</div>


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
	$message=$_POST['msg'];
	$image=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
	$res=mysql_query("insert into image values('','$titre','$prix','$message','$image')");
	if($res){echo '<script> alert ("Informations ajoutés avec succés ") ; </script>';}
	
}
if(isset($_POST["submit2"]))
{
	$res=mysql_query("select * from image");

	while($row=mysql_fetch_array($res))
	{
		echo "<center>";
		echo "<meta http-equiv='content-type' content='text/html; charset=utf-8' /><font color='FF0000' size='6'> {$row['titre']} </font> <BR><br>";
		echo "<font  size='6'> <b>{$row['Prix']}</b> DH </font> <BR><br>";
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="600" height="400"/><br><br>';  
		echo "</center>";
		  echo "<meta http-equiv='content-type' content='text/html; charset=utf-8' /><div style='width:620px;backgound-color:#FFFFFF;margin-left:23.5%;Font-Family:  Serif; '><font size='4'> {$row['message']} </font> </div><br><br>";
		 
		 
									
	}
	
}
	
?>
<a href="essay1.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>
	
<br><br><br><br><br><br><br>		
		
		</div>

   


</body>
</html>