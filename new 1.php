<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="new 1.css"/> 
<script type="text/javascript">
<!--
                        function open_infos()
                        {
                                window.open('ajouter.html','nom_de_ma_popup','menubar=no, scrollbars=no, width=1300,height=786 ');
                        }
                -->
                </script>
<script type="text/javascript">
		var image1= new Image()
		
		image1.src="112365191.jpg"
		
		var image2= new Image()
		image2.src="691516277612.jpg"
		
		var image3= new Image()
		image3.src="1377594_285052751702350_1183984397174252245_n-1-660x330.jpg" 
		
		
		</script>
		
</head>
<body>
<div class="haut"><img src="Images/13814559_1147361661997655_503833615_n - Copie.png" style='margin-left:3%;'></img>  <form method="POST" action="process.php"><table> 
<tr><th><font color="white">User : </font></th><td><input type="text" name="user" width="150px"></td></tr><tr><th><font color="white">
Password : </th><td><input type="password" name="pass" width="150px"></td><td></td></tr></table><div class="valide">
<input id="btn" type="submit" name="submit" value="Connexion" style="background-color:green; color:white;"> </div></form></div>

<br><br>
<div class='gauche'>
<center><font color="green" size="6">Vous êtes déja inscrit?<font color="green" size="4"><br>Connais tous sur notre Association !</font></center><br>
<img src="Images/112365191.jpg" name="slideshow"></img>
		<script type="text/javascript">
			  var numberImage=1
			  function myslide(){
			  document.images.slideshow.src=eval("image"+numberImage+".src")
			  
			  
			  if(numberImage<3 )
			  numberImage=numberImage+1
			  else
			  numberImage=1
			  setTimeout("myslide()",3500)
			  }
			  myslide()
			  </script>
			  </div>
			  <div class="droite">
			  <?php 
			  ini_set("display_errors",0);
         error_reporting(0);
			  $link = mysql_connect("localhost", "root", "");
mysql_select_db("alomrane", $link);
 
$result = mysql_query("SELECT * FROM employe", $link);
$num_rows = mysql_num_rows($result);
 
			   
													
				   ?>
				   <div class="ajouter" style="margin-left:18%;">
			  <center><font size="3" color="red"> <?php echo "$num_rows \n";?>  employés utilisent activement cette application</font>
			  <hr style="color:black; margin-left:25%;  margin-right:25%;">
			  <a href="#" class="s3d Ajouter" onclick="javascript:open_infos();">
                        <font color="#fff" size='4'> Ajouter </font>
                        <span class="icons Ajouter"></span>
             </a>
			 <hr style="color:black; margin-left:25%;  margin-right:25%;">
			 </center></div>
			  
			  </div>

</body></html>