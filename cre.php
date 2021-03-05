<html>
<head>
<meta charset="UTF-8">

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
   if(document.form.num.value == "")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
}}

function verifPseudo1(champ){
   if(document.form.mont.value == "")
   {
      surligne(champ, true);
      return false;
}else
   {
      surligne(champ, false);
      return true;
}}
function verifPseudo2(champ){
   if(document.form.type.value == "")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
}}
function verifPseudo3(champ){
   if(document.form.echan.value == "")
   {
      surligne(champ, true);
      return false;
   }
   
else
   {
      surligne(champ, false);
      return true;
}}
</script>
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
				

	<script type="text/javascript">
<!--
function verif_formulaire()
{
 if(document.form.num.value == "")  {
   alert("Veuillez entrer votre code!");
   document.form.num.focus();
   return false;
  }
 if(document.form.mont.value == "") {
   alert("Veuillez entrer le montant!");
   document.form.mont.focus();
   return false;
  }
 
 if(document.form.type.value == "") {
   alert("Veuillez entrer le type!");
   document.form.type.focus();
   return false;
   }
   
   if(document.form.echan.value == "") {
   alert("Veuillez entrer Echantillon!");
   document.form.echan.focus();
   return false;
   }
 
}




</script>
<link rel="stylesheet" type="text/css" href="cre.css"/> 
</head>
<body>

<div class="contenu">
<div class="header"><a href="new 1.php"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>



		<form action="ajouterCompte.php" Method="POST" name="form" onSubmit="return verif_formulaire()">
		<table>
		<tr>
		<th>Code Adhérent :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="num" onblur="verifPseudo(this)"></td></tr>
		<th>Montant :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="mont" onblur="verifPseudo1(this)"></td></tr>
		<th>Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="type" onblur="verifPseudo2(this)"></td></tr>
		<th>Echantillon : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="text" name="echan" onblur="verifPseudo3(this)"></td></tr></table>
		<br><br>
		
		<pre>                             <input type="submit" value="Ajouter" >          <input type="reset" value="Annuler">  </pre>
		</form>
		
		
		<br><br><br>
		<?php	echo "<font size='4'> <a href='redemittel-sprechen.pdf'>Telecharger la demande </a></font>"; ?> <br><br>
		<a href="appli.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>
		</div>
<div class="counter">		
<fieldset>
<center>
    <a href="cre.php" class="s3d Ajouter">
      <font color="#fff" size='4'> Demander crédit</font>
        <span class="icons Ajouter"></span>
    </a>
    <br><br>
    <a  href="#" class="s3d Virement" onclick="javascript:open_infos();">
      <font color="#fff" size='4'>  Virement </font>
        <span class="icons Virement"></span>
    </a>
    <br><br>
    <a href="consu.php" class="s3d Consulter" >
     <font color="#fff" size='4' >  Consulter </font>
        <span class="icons Consulter"></span>
    </a>
    <br><br>
    <a href="#.php" class="s3d Paiement" onclick="javascript:open_info();">
     <font color="#fff" size='4' >  Paiement </font>
        <span class="icons Paiement"></span>
    </a>
    </center>
   </fieldset>
   

   </div>
   


</body>
</html>