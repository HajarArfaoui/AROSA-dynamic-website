<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `credit` WHERE CONCAT(`codecredit`, `codeempl`, `mantant`, `type`,`echantillion`,`Status`,`Date`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `credit`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "alomrane");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<html>
    <head>
        
        
		<meta charset="UTF-8">


				<script type="text/javascript">
                <!--
                        function open_infos()
                        {
                                window.open('ajoutercheque1.php','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=400, height=200');
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
				
				

	<link rel="stylesheet" type="text/css" href="1.css"/> 
    </head>
    <body>
        <div class="contenu">

<div class="header"><a href="new 1.html"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>
<div class="counter">

<fieldset>
<center>
    <a href="#" class="s3d Ajouter" onclick="javascript:open_infos();">
      <font color="#fff" size='4'> Ajouter_cheque </font>
        <span class="icons Ajouter"></span>
    </a>
    <br><br>
    <a href="n1.php" class="s3d Supprimer">
      <font color="#fff" size='4'>  Supprimer </font>
        <span class="icons Supprimer"></span>
    </a>
    <br><br>
   
    <a href="#" class="s3d Paiement" onclick="javascript:open_info();">
     <font color="#fff" size='4' >  Paiement </font>
        <span class="icons Paiement"></span>
    </a>
	<br><br>
	<a href="reche.php" class="s3d Rechercher" >
     <font color="#fff" size='4' >  Rechercher </font>
        <span class="icons Rechercher"></span>
    </a>
	 
    </center>
   </fieldset>
  </div> 
   <div class="table1">
        <form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search">&nbsp;&nbsp;&nbsp;
            <input type="submit" name="search" value="Filter"></form><br>
            
            <table width="75%"  border="0"   bgcolor='#cccccc'>
                <tr>
                    <th bgcolor='#eeeeee'>Code Crédit</th>
                    <th bgcolor='#eeeeee'>Codeempl</th>
                    <th bgcolor='#eeeeee'>Montant</th>
                    <th bgcolor='#eeeeee'>Type</th>
					<th bgcolor='#eeeeee'>Echantillion</th>
                    <th bgcolor='#eeeeee'>Status</th>
                    <th bgcolor='#eeeeee'>Date Demande</th>
					
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><center><?php echo $row['codecredit'];?></center></td>
                    <td><center><?php echo $row['codeempl'];?></center></td>
                    <td><center><?php echo $row['mantant'];?></center></td>
                    <td><center><?php echo $row['type'];?></center></td>
					 <td><center><?php echo $row['echantillion'];?></center></td>
                    <td><center><?php echo $row['Status'];?></center></td>
                    <td><center><?php echo $row['Date'];?></center></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        </div>
<br><br><br>
<a href="essay1.html"><img src="Images/fleche.png" width="40px" height="30px"/></a>		
</div>
    </body>
</html>
