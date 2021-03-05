<?php
mysql_connect("localhost","root","");
mysql_select_db("alomrane");
$id=$_REQUEST['id'];
$query = "DELETE FROM employe WHERE codeempl=$id"; 
$result = mysql_query($query) or die ( mysql_error());
$query1 = "DELETE FROM credit WHERE codeempl=$id"; 
$result1 = mysql_query($query1) or die ( mysql_error());
header("Location: n.php"); 
 ?>