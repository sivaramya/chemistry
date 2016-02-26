<?php
 // config file used to connect to data base.
 // connection to database.
 $con = mysql_connect("localhost","root","");//root
 // if database is not found.
 $query=mysql_query("SET CHARACTER SET utf8") or die('Cannot select CHARACTER SET utf8: ' . mysql_error());
 // selection of database.
 mysql_select_db("conversion",$con)or die('error');
?>

