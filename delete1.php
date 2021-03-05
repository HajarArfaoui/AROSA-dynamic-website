<?php
mysql_connect("localhost","root","");
mysql_select_db("alomrane");
$id=$_REQUEST['id'];

$query1 = "DELETE FROM credit WHERE codecredit=$id"; 
$result1 = mysql_query($query1) or die ( mysql_error());
header("Location: n1.php"); 
 ?>