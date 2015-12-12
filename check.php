<?php
include('config.php');
$sq = mysql_query("SELECT * FROM input") or die("wrong query");
	$row = mysql_fetch_array($sq);
	$s2=$row['input'];
	$s3=$row['output'];
	$que = mysql_query("UPDATE `input` SET `input`='input',`output`='output' WHERE `input`='".$s2."' and `output`='".$s3."'")or die('wrong');
	?>
	<html>
	<head>
<script type="text/javascript" src="chemis.js"></script>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" >
</head>
<body> <div id='h1'>
<?php
if(isset($_POST['submit']))
{
	$input = $_POST['input'];
	$output = $_POST['output'];
	$sql = mysql_query("SELECT * FROM conversion where input='$input' and output='$output'") or die("wrong query");
	
	echo $input.'<br>';
	$row = mysql_fetch_array($sql);
	echo '<img src="a.png" width="20" height="120">'.$row["comp1"].'<br>'.$row["ele"].'<br><br><img src="a.png" width="20" height="120">'.$row["comp2"].'<br><br>'.$output;
	
}

?>

</div>
<br>
<a href='ans.php'>back</a>
</body>
</html>
