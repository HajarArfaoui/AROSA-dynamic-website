<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `employe` WHERE CONCAT(`codeempl`, `nom`, `prenom`,`Login`,`fonction`,`cin`,`email`,`password`,`Adresse`,`Telephone`,`datenaissance`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `employe`";
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
                        function open_info()
                        {
                                window.open('search.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=800, height=200');
                        }
                -->
                </script>
				

	<link rel="stylesheet" type="text/css" href="sea.css"/> 
    </head>
    <body>
        <div class="contenu">

<div class="header"><a href="new 1.php"><img src="Images/dec.png" width="35" height="30"/> <p><font color="#FFF">D&eacuteconnexion </font></p></a></div>
<div class="counter">

<fieldset>
<center>
   
    <a href="mod.html" class="s3d Modifier">
      <font color="#fff" size='4'>  Modifier </font>
        <span class="icons Modifier"></span>
    </a>
    <br><br>
    <a href="n.php" class="s3d Supprimer" >
     <font color="#fff" size='4' >  Supprimer </font>
        <span class="icons Supprimer"></span>
    </a>
    <br><br>
    <a href="sea.php" class="s3d Rechercher" >
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
                    <th bgcolor='#eeeeee'><font color="green">Code Adhérent</font></th>
                    <th bgcolor='#eeeeee'><font color="green">Nom</font></th>
                    <th bgcolor='#eeeeee'><font color="green">Prénom</font></th>
                    <th bgcolor='#eeeeee'><font color="green">Login</font></th>
					<th bgcolor='#eeeeee'><font color="green">Fonction</font></th>
                    <th bgcolor='#eeeeee'><font color="green">Email</font></th>
                    <th bgcolor='#eeeeee'><font color="green">Téléphone</font></th>
					
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><center><?php echo $row['codeempl'];?></center></td>
                    <td><center><?php echo $row['nom'];?></center></td>
                    <td><center><?php echo $row['prenom'];?></center></td>
                    <td><center><?php echo $row['Login'];?></center></td>
					 <td><center><?php echo $row['fonction'];?></center></td>
                    <td><center><?php echo $row['email'];?></center></td>
                    <td><center><?php echo $row['Telephone'];?></center></td>
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
