<?php
include('config.php');
$s='Input';
if(isset($_POST['s1']))
{
	$s= $_POST['s1'];
	$sql = mysql_query("UPDATE `input` SET `input`='".$s."' WHERE `input`='input'")or die('wrong');
	
}

	$s1='Output';
if(isset($_POST['s2']))
{
	$s1= $_POST['s2'];
	$sql1 = mysql_query("UPDATE `input` SET `output`='".$s1."' WHERE `output`='output'")or die('wrong');
}
	
?>
<html>
<head>
<script type="text/javascript" src="chemis.js"></script>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" >
</head>
<body >
<form method='post' action="check.php">
<div id="inputgroup" title="Help"><h3 align='right' ><a href="help1.php" target="_top"><img src='help2.png' height=50 width=50></a></h3></div>
<div id='h1'> <br><br>CONVERSION<br> IN ORGANIC CHEMISTRY</div>
	<br><br><br>
	<?php
	$sq = mysql_query("SELECT * FROM input") or die("wrong query");
	$row = mysql_fetch_array($sq);
	$s2=$row['input'];
	$s3=$row['output'];
	 echo "<div id='enter'><input type='text' value='$s2' name='input' style='height:40px; width:25%; font-size:14pt;'>";
	 ?>
	<img src='url.png' width='80' height='20'>
	<?php
	echo "<input  type='text' value='$s3' name='output' style='height:40px; width:25%; font-size:14pt;'>";
	
	?>
	<br><br><br><input type='submit' value ="OK" name='submit' style="height:40px; width:10%; font-size:14pt;"></div>
	</form>
	<!--//style="height:200px;font-size:14pt;"-->
</body>
</html>
