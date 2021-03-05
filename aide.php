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

<link rel="stylesheet" type="text/css" href="aide.css"/> 
</head>
<body>

<div class="contenu">
<div class="header"><a href="new 1 .php"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>

		
<fieldset>
<center>
<br>
    <a href="aide.php" class="s3d Ajouter">
      <font color="#fff" size='4'> Ajouter </font>
        <span class="icons Ajouter"></span>
    </a>
    <br><br>
    <a href="Volontaires.php" class="s3d Afficher">
      <font color="#fff" size='4'> Volontaires </font>
        <span class="icons Afficher"></span>
    </a>
    
    </center>
   </fieldset>
   
   
  
<div class="table1">
		<form name="form1" action="" method="POST" enctype="multipart/form-data">
<table>
<tr><th> Titre :</th><td> <input type="text" name="titre" size='30' ></td></tr>
<tr><th> Adresse :</th><td> <input type="text" name="adrs" size='30' ></td></tr>
<tr><th> Message :</th><td><textarea name="msg" placeholder="Ecrire une petite description"  rows='10' cols='90'></textarea><font color='red'></td></tr>
<tr>
<th>Image:</th>
<td> <input type="file" name="f1"></td>
</tr>
</table>
<br><br>
<pre>                       <input type="submit" name="submit1" value="uploadImage">      <input type="submit" name="submit2" value="viewImage">          </pre>



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
	$adresse=$_POST['adrs'];
	$message=$_POST['msg'];
	$image=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
	$res=mysql_query("insert into aide values('','$titre','$message','$image','$adresse')");
	if($res){echo '<script> alert ("Informations ajoutés avec succés ") ; </script>';}
	
}
if(isset($_POST["submit2"]))
{
	$res=mysql_query("select * from aide");

	while($row=mysql_fetch_array($res))
	{
		echo "<center>";
		echo "<meta http-equiv='content-type' content='text/html; charset=utf-8' /><font color='FF0000' size='6'> {$row['titre']} </font> <BR><br>";
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'" width="600" height="400"/><br><br>';  
		echo "</center>";
		  echo "<meta http-equiv='content-type' content='text/html; charset=utf-8' /><div style='width:620px;backgound-color:#FFFFFF;margin-left:21%;Font-Family:  Serif; '><font size='3'> {$row['message']} </font> <br><br>";
		 echo "<font size='5' color='green'>Adresse:</font><font  size='4'> {$row['adresse']} </font> </div><BR><br>";
		 echo"<center><font size='4'> <a href='#' onclick='javascript:open_infos();'>Participer</a></font></center>";
									
	}
	
}
	
?>
</div>
		
		<a href="essay1.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>
		
<br><br><br><br>
   


</body>
</html>