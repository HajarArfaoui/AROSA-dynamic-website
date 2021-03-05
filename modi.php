<html>
<head>
<meta charset="UTF-8">

<script type="text/javascript">
                <!--
                        function open_infos()
                        {
                                window.open('delClient.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=300, height=200');
                        }
                -->
                </script>
				
	<script type="text/javascript">	
              function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}	
	function verifPseudo(champ)
{
   if(document.formulaire.num.value=="")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}	</script>		
	<script type="text/javascript">
<!--
function verif_formulaire()
{
 if(document.formulaire.num.value == "")  {
   alert("Code Adhérent est néccessaire");
   document.formulaire.num.focus();
   return false;
  }

}



</script>
<link rel="stylesheet" type="text/css" href="test.css"/> 
</head>
<body>

<div class="contenu">
<div class="header"><a href="new 1.php"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>
<form name="formulaire"  method=POST onSubmit="return verif_formulaire()" action="modifie.php" >
		<table>
		<tr>
		<th>NumEmployé:<font color='red'>*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="num" onblur="verifPseudo(this)"></td></tr>
		<th>Nom:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="nom" ></th></tr>
		<th>Prenom:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="pre" ></th></tr>
		<th>Login:<font color='red'>*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="log" onblur="verifPseudo2(this)"></th></tr>
		<th>CIN:<font color='red'>*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="cin" onblur="verifPseudo1(this)"></td></tr>
		<th>Email:<font color='red'>*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="mail" placeholder='example@hotmail.com' onblur="verifPseudo3(this)"></td></tr>
		<th>Mot de passe:<font color='red'>*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="password" name="pass" onBlur="valider(this)" placeholder="votre mot de passe" onblur="verifPseudo4(this)"> </td></tr>
		<th>Retaper mot de passe:<font color='red'>*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="password" name="repass" onblur="verifPseudo5(this)"> </td></tr>
		<th>Fonction:<font color='red'>*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type ="text" name="fct" onblur="verifPseudo6(this)"></td></tr>
		<tr><th><label for="date">Date de naissance:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <td><input type="date" name="date" id="date" size="30" /></td></tr>
              
		<tr><th>Adresse:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><textarea name="adrs" placeholder="votre adresse personnelle" rows="4" cols="50"></textarea></td></tr>
		<tr><th>Téléphone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="tel"  ></th></tr></table>
		<br><br>
		<input type="submit" value="enregistrer" style="margin-left:140px;"><input type="reset" value="Annuler" style="margin-left:150px;">
		</form>
		<br><br><br>
		<a href="appli.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>
		</div>
<div class="counter">		
<fieldset>
<br>
    <a href="modi.php" class="s3d Modifier">
      <font color="#fff" size='4'>  Modifier </font>
        <span class="icons Modifier"></span>
    </a>
    <br><br>
    <a href="#" class="s3d Supprimer" onclick="javascript:open_infos();">
     <font color="#fff" size='4' >  Supprimer </font>
        <span class="icons Supprimer"></span>
    </a>
    <br>
    
    </center>
   </fieldset>
   
   
 
   </div>
   


</body>
</html>