<?php
error_reporting(E_ALL ^ E_DEPRECATED);


$con= mysql_connect("localhost","root","");
mysql_select_db("alomrane");

$num=$_POST['num'];

$result= mysql_query("select * from credit where codeempl ='$num'",$con);


if ( $result )
{ 
echo "<h1><center><font color='green'> Resultat de votre recherche</font></center> </h1> \n";

$nbemploye=mysql_num_rows($result);
if($nbemploye >0 )
	
{
	
	
	

	
	
	while ($employe = mysql_fetch_array($result))
	{
		$calcul = $employe['mantant']/$employe['echantillion'];
		$date =explode("-",$employe['Date']);
		$mois=$date[1];
		$annee=$date[0];
		$number = number_format($calcul, 2, '.', '');
		
		echo "<table border ='0' bgcolor='#cccccc' width='700px'  align=center>\n";
	echo "<tr > \n";
	
	echo "<th bgcolor='#eeeeee' > <font color='green'> Montant</font></th> \n";
	echo "<th bgcolor='#eeeeee' ><font color='green'> Echantillon</font></th> \n";
	
	
	for($i=1;$i<$employe['echantillion']+1;$i=$i+1){
	echo "<th bgcolor='#eeeeee' > <font color='green'> Echantier $i </font></th> \n";}
		echo "<tr>\n";
		
		echo "<td><center>".$employe['mantant']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		echo "<td><center>".$employe['echantillion']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
		
		if($mois=='12')
		{
			$month=date('m');
			
			$s=0;
			for($k=0;$k<$month;$k=$k+1){
				if($s < $employe['echantillion']){
				echo "<td> <center>".$number."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
				$s=$s+1;
			}
			}
			echo '<br><br>';
			
				
		}
		if(date('m')< $mois )
		{
			$s=0;
			$diff = 12 - $mois +date('m');
			
			for($k=0;$k<$diff;$k=$k+1){
				if($s < $employe['echantillion']){				
				echo "<td> <center>".$number."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
				$s=$s+1;
			}
			}
			echo '<br><br>';
			
		}
			
		if( date('m') == $mois )
		{
			
			$s=0;
			for($k=0;$k<12;$k=$k+1){
				if($s < $employe['echantillion']){
				echo "<td> <center>".$number."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";	
					$s=$s+1;
				
			}
			}
			echo '<br><br>';
			
		}
	
		else{
			$s=0;
		for($j=1;$j<=$employe['echantillion'];$j=$j+1)
			
		{
			if($s < $employe['echantillion']){
			 $i=0;
			if(date('m')== $mois+$j)
			{
				
				while($i<$j)
				{
					echo "<td> <center>".$number."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>\n";
					$i=$i+1;
					$s=$s+1;
				}
				return 0;
			}
			
			}
		}
		echo '<br><br>';
		
		
		echo "</tr>\n";
		}
	}
	echo "</table> \n";
	
}
else 
{echo "<script> alert ('pas de compte credit avec ce code'); document.location.href='consulterpaiement.html';</script>";}
}
else {echo "erreur dans l execution";}



?>