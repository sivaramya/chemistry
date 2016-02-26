<?php
include('config.php');
?>
<html>
<head>
<script type="text/javascript" src="chemis.js"></script>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" >
</head>

	
	
<body>
<form method="post"  action='ans.php' target="content">
	<div id = "labels"><b>REACTANTS</b></div>
	<div id="inputgroup" title="Click one of the Reactants">
	
	<?php
	$sq = mysql_query("SELECT * FROM input1") or die("wrong query");
	while($row = mysql_fetch_array($sq))
	{
		echo "<div id='input'><Button type='submit' name ='s1' value='".$row['input']."'  style='height:8%; width:100%; font-size:100%;'>".$row['input1']."</button></div>";
	}
	?>
	
</div>
</form>
</body>
</html>