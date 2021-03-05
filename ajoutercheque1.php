<htmL>
<head>
<title> Ajouter chèque </title>
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
   if(document.formulaire.num.value == "")
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
   if(document.formulaire.code.value == "")
   {
      surligne(champ, true);
      return false;
}else
   {
      surligne(champ, false);
      return true;
}}
function verifPseudo2(champ){
   if(document.formulaire.num1.value == "")
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
   if(document.formulaire.mont.value == "")
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
function verif_formulaire()
{
 if(document.formulaire.num.value == "")  {
   alert("Veuillez entrer numéro de chèque!");
   document.formulaire.num.focus();
   return false;
  }
 if(document.formulaire.code.value == "") {
   alert("Veuillez entrer code crédit correspond!");
   document.formulaire.code.focus();
   return false;
  }
 if(document.formulaire.num1.value == "") {
   alert("Veuillez entrer code adhérent désigné!");
   document.formulaire.num1.focus();
   return false;
  }
 
 if(document.formulaire.mont.value == "") {
   alert("Veuillez entrer montant!");
   document.formulaire.mont.focus();
   return false;
   }
 
}



</script>
</head>
<body>
<fieldset>
<legend><img src="Images/ajoute.png"/> <b>Ajouter chèque </b> </legend>
<center><form action="" method="POST" name="formulaire" onSubmit="return verif_formulaire()">
 <table>
 <tr><th>Numéro Chèque :</th><td><input type="text" name="num" onblur="verifPseudo(this)"></td></tr>
  <tr><th>Code Credit :</th><td><input type="text" name="code" onblur="verifPseudo1(this)"></td></tr>
   <tr><th>Code Adhérent :</th><td><input type="text" name="num1" onblur="verifPseudo2(this)"></td></tr>
    <tr><th>Montant :</th><td><input type="text" name="mont" onblur="verifPseudo3(this)"></td></tr></table>
	<input type="submit" value="Enregistrer" name="reserver"><input type="reset" value="Annuler">
	</form>
<?php

ini_set("display_errors",0);
error_reporting(0);
$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("alomrane",$con);
 mysql_query("SET NAMES UTF8"); 
 
if(isset($_POST["reserver"])){
$code=$_POST['num'];
$n=$_POST['code'];
$p=$_POST['num1'];
$montant=$_POST['mont'];

$query="select * from credit where codecredit = '$n'";
$result=mysql_query($query) or die ("failed to query databse".mysql_error());
		$row=mysql_fetch_array($result);
		if($row['codecredit']== $n)
		{
		$requette = " UPDATE  credit Set Status = 'valide' where codecredit='$n'";
		$result= mysql_query($requette);
		}

$req="insert into cheque values('$code','$n','$p','$montant',NOW())";
$res=mysql_query($req);
if($res){
echo'<font color="red"><center><b>l ajout est bien fait !</b> </center></font>';}


}


mysql_close();
?>
</fieldset>
	</body>
	</html>
	 