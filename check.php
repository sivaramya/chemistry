<?php
include('config.php');
$sq = mysql_query("SELECT * FROM input") or die("wrong query");
	$row = mysql_fetch_array($sq);
	$s2=$row['input'];
	$s3=$row['output'];
	$que = mysql_query("UPDATE `input` SET `input`='reactant',`output`='product' WHERE `input`='".$s2."' and `output`='".$s3."'")or die('wrong');
	?>
	<html>
	<head>
	
<script type="text/javascript" src="chemis.js"></script>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" >
</head>
<body> <div ><table id='h2' align='center'>
<?php
if(isset($_POST['submit']))
{
	$input = $_POST['input'];
	$output = $_POST['output'];
	
	if($input==$output)
	 {
		 echo "<script> alert('product and the reactant are same'); window.location='ans.php';</script>" ;
	 }
	 else{
	$sql = mysql_query("SELECT * FROM conversion where input='$input' and output='$output'") or die("wrong query");
	$row = mysql_num_rows($sql);
	
	$sql1 = mysql_query("SELECT * FROM conversion1 where input='$input' and output='$output'") or die("wrong query");
	$row1 = mysql_num_rows($sql1);
	
	$sql2 = mysql_query("SELECT * FROM conversion2 where input='$input' and output='$output'") or die("wrong query");
	$row2 = mysql_num_rows($sql2);
	
	$sql3 = mysql_query("SELECT * FROM conversion3 where input='$input' and output='$output'") or die("wrong query");
	$row3 = mysql_num_rows($sql3);
	
	$sql4 = mysql_query("SELECT * FROM conversion4 where input='$input' and output='$output'") or die("wrong query");
	$row4 = mysql_num_rows($sql4);
	$i=0;
	
	if(mysql_num_rows($sql1) > 0){
		$i++;
		echo '<tr><td>'.$i.')</td></tr>';
		$row = mysql_fetch_array($sql1);
	echo '<br><br><br><br><tr><td></td><td><font color="orange">'.$row["input1"].'</font></td></tr><tr><td></td><td><img src="a.png" width="20" height="180"></td><td><font color="yellow">'.$row["comp1"].'</font></td><td></td></tr><tr><td></td><td><font color="orange">'.$row["output1"].'</font></td></tr><tr><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>';
	}
	
	if (mysql_num_rows($sql) > 0) {
		$i++;
		echo '<tr><td>'.$i.')</td></tr>';
		$row = mysql_fetch_array($sql);
	echo '<br><br><br><br><tr><td></td><td><font color="orange">'.$row["input1"].'</font></td></tr><tr><td></td><td><img src="a.png" width="20" height="180"></td><td><font color="yellow">'.$row["comp1"].'</font></td></tr><tr><td></td><td>'.$row["ele"].'</td></tr><tr><td><font color="yellow">'.$row["comp2"].'</font></td><td><img src="a.png" width="20" height="180"></td><td></td></tr><tr><td></td><td><font color="orange">'.$row["output1"].'</font></td></tr><tr><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>';
	}
		
	
		if(mysql_num_rows($sql2) > 0){
			$i++;
		echo '<tr><td>'.$i.')</td></tr>';
		$row = mysql_fetch_array($sql2);
			echo '<br><br><br><br><tr><td></td><td><font color="orange">'.$row["input1"].'</font></td></tr><tr><td></td><td><img src="a.png" width="20" height="100"></td><td><font color="yellow">'.$row["comp1"].'</font></td></tr><tr><td></td><td>'.$row["ele"].'</td></tr><tr><td><font color="yellow">'.$row["comp2"].'</font></td><td><img src="a.png" width="20" height="100"></td><td></td></tr><tr><td></td><td>'.$row["ele1"].'</td></tr><tr><td></td><td><img src="a.png" width="20" height="100"></td><td><font color="yellow">'.$row["comp3"].'</font></td></tr><tr><td></td><td><font color="orange">'.$row["output1"].'</font></td></tr><tr><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>';
			}
			
		if(mysql_num_rows($sql3) > 0){
			$i++;
		echo '<tr><td>'.$i.')</td></tr>';
		$row = mysql_fetch_array($sql3);
			echo '<br><br><br><br><tr><td></td><td><font color="orange">'.$row["input1"].'</font></td></tr><tr><td></td><td><img src="a.png" width="20" height="100"></td><td><font color="yellow">'.$row["comp1"].'</font></td></tr><tr><td></td><td>'.$row["ele"].'</td></tr><tr><td><font color="yellow">'.$row["comp2"].'</font></td><td><img src="a.png" width="20" height="100"></td><td></td></tr><tr><td></td><td>'.$row["ele1"].'</td></tr><tr><td></td><td><img src="a.png" width="20" height="100"></td><td><font color="yellow">'.$row["comp3"].'</font></td></tr><tr><td></td><td>'.$row["ele2"].'</td></tr><tr><td><font color="yellow">'.$row["comp4"].'</font></td><td><img src="a.png" width="20" height="100"></td><td></td></tr><tr><td></td><td><font color="orange">'.$row["output1"].'</font></td></tr><tr><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>';
			}
			
			if(mysql_num_rows($sql4) > 0){
			$i++;
		echo '<tr><td>'.$i.')</td></tr>';
		$row = mysql_fetch_array($sql4);
			echo '<br><br><br><br><tr><td></td><td><font color="orange">'.$row["input1"].'</font></td></tr><tr><td></td><td><img src="a.png" width="20" height="100"></td><td><font color="yellow">'.$row["comp1"].'</font></td></tr><tr><td></td><td>'.$row["ele"].'</td></tr><tr><td><font color="yellow">'.$row["comp2"].'</font></td><td><img src="a.png" width="20" height="100"></td><td></td></tr><tr><td></td><td>'.$row["ele1"].'</td></tr><tr><td></td><td><img src="a.png" width="20" height="100"></td><td><font color="yellow">'.$row["comp3"].'</font></td></tr><tr><td></td><td>'.$row["ele2"].'</td></tr><tr><td><font color="yellow">'.$row["comp4"].'</font></td><td><img src="a.png" width="20" height="100"></td></tr><tr><td></td><td>'.$row["ele3"].'</td></tr><tr><td></td><td><img src="a.png" width="20" height="100"></td><td><font color="yellow">'.$row["comp5"].'</font></td></tr><tr><td></td><td><font color="orange">'.$row["output1"].'</font></td></tr><tr><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>';
			}
	if($row==0 && $row1==0 && $row2==0 && $row3==0 && $row4==0)
	 {
		 echo "<script> alert('cannot get the product from the reactant'); window.location='ans.php';</script>" ;
	 }
	 
	 }
	
}

?>
</table>
</div>
<br>
<a href='ans.php'><font color='white'>back</font></a>
</body>
</html>