<html>
<head>
<LINK REL=StyleSheet HREF="style1.css" TYPE="text/css" >
</head>
<body >
<form method='post' action=''>


<div id='container'>
<table  id='table1'>
<tr ><td ></td><td><h3 ><u>Add Details</u></h3></td></tr>
<tr><td>Reactant </td><td><input type='text' name='input' id='inp' required></td></tr>
<tr><td>Product</td><td><input type='text' name='output' id='inp' required></td></tr>
<tr><td>Steps</td><td><select name='steps' id='inp'>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
										<td></tr>

<tr><td>&nbsp </td></tr>
<tr><td></td><td><input type='Submit' name='submit' value='Add' id='sub'>&nbsp <input type='Submit' name='delete' value='Delete' id='sub'></td></tr>
</table>
</div>
</form>


<?php
$input='';
$output='';
include('config.php');
if(isset($_POST['delete']))
{
	
	$input = $_POST['input'];
	$output = $_POST['output'];
	if($_POST['steps']==2)
		$query = mysql_query("DELETE FROM conversion where input='$input' and output='$output'")or die("wrong query");

	if($_POST['steps']==1)
		$query1 = mysql_query("DELETE FROM conversion1 where input='$input' and output='$output'")or die("wrong query");

	if($_POST['steps']==3)
	$query2 = mysql_query("DELETE FROM conversion2 where input='$input' and output='$output'")or die("wrong query");

	if($_POST['steps']==4)
	$query3 = mysql_query("DELETE FROM conversion3 where input='$input' and output='$output'")or die("wrong query");

	if($_POST['steps']==5)
	$query4 = mysql_query("DELETE FROM conversion4 where input='$input' and output='$output'")or die("wrong query");
	
	$sql = mysql_query("SELECT * FROM conversion where input='$input'") or die("wrong query");
	$row = mysql_num_rows($sql);
	
	$sql1 = mysql_query("SELECT * FROM conversion1 where input='$input'") or die("wrong query");
	$row1 = mysql_num_rows($sql1);
	
	$sql2 = mysql_query("SELECT * FROM conversion2 where input='$input'") or die("wrong query");
	$row2 = mysql_num_rows($sql2);
	
	$sql3 = mysql_query("SELECT * FROM conversion3 where input='$input'") or die("wrong query");
	$row3 = mysql_num_rows($sql3);
	
	$sql4 = mysql_query("SELECT * FROM conversion4 where input='$input'") or die("wrong query");
	$row4 = mysql_num_rows($sql4);
	
	if($row==0 && $row1==0 && $row2==0 && $row3==0 && $row4==0)
	 {
		 $query5 = mysql_query("DELETE FROM input1 where input='$input'");
	}

	
	$sql5 = mysql_query("SELECT * FROM conversion where output='$output'") or die("wrong query");
	$row5 = mysql_num_rows($sql5);
	
	$sql6 = mysql_query("SELECT * FROM conversion1 where output='$output'") or die("wrong query");
	$row6 = mysql_num_rows($sql6);
	
	$sql7 = mysql_query("SELECT * FROM conversion2 where output='$output'") or die("wrong query");
	$row7 = mysql_num_rows($sql7);
	
	$sql8 = mysql_query("SELECT * FROM conversion3 where output='$output'") or die("wrong query");
	$row8 = mysql_num_rows($sql8);
	
	$sql9 = mysql_query("SELECT * FROM conversion4 where output='$output'") or die("wrong query");
	$row9 = mysql_num_rows($sql9);
	
	if($row5==0 && $row6==0 && $row7==0 && $row8==0 && $row9==0)
	 {
		 $query6 = mysql_query("DELETE FROM output where output='$output'");
	}
	echo "<script> alert('Deleted successfully'); window.location='index.php';</script>" ;
	
}

if(isset($_POST['submit']))
{
	$input = $_POST['input'];
	$output = $_POST['output'];




if($input==$output)
	{
		echo "<script> alert('Your reactant and product are same'); window.location='add.php';</script>" ;
		
	}
else{
?>



<form method='post' action='detail.php'>

<div id='right'>

<table id='table'>
<tr ><td ></td><td><h3 ><u>Add Components</u>&nbsp-&nbsp<input type='text' name='steps' value='<?php echo $_POST["steps"]; ?>' style="height:25px; width:25px; font-size:14pt; text-align:center"></h3></td></tr>
<tr><td>Reactant</td><td><input type='text' name='input'  value ='<?php echo $input;?>' id='inp1'></td></tr>
<?php

if($_POST['steps']==1)
{ ?>
<tr><td>Reagent</td><td><input type='text' name='ele1' id='inp1'></td></tr>
<?php } 

if($_POST['steps']==2)
{ ?>
<tr><td>Reagent1</td><td><input type='text' name='ele1' id='inp1'></td></tr>
<tr><td>IProduct</td><td><input type='text' name='comp' id='inp1'></td></tr>
<tr><td>Reagent2</td><td><input type='text' name='ele2' id='inp1'></td></tr>

<?php } 

if($_POST['steps']==3)
{ ?>
<tr><td>Reagent1</td><td><input type='text' name='ele1' id='inp1'></td></tr>
<tr><td>IProduct1</td><td><input type='text' name='comp1' id='inp1'></td></tr>
<tr><td>Reagent2</td><td><input type='text' name='ele2' id='inp1'></td></tr>
<tr><td>IProduct2</td><td><input type='text' name='comp2' id='inp1'></td></tr>
<tr><td>Reagent3</td><td><input type='text' name='ele3' id='inp1'></td></tr>

<?php }

if($_POST['steps']==4)
{ ?>
<tr><td>Reagent1</td><td><input type='text' name='ele1' id='inp1'></td></tr>
<tr><td>IProduct1</td><td><input type='text' name='comp1' id='inp1'></td></tr>
<tr><td>Reagent2</td><td><input type='text' name='ele2' id='inp1'></td></tr>
<tr><td>IProduct2</td><td><input type='text' name='comp2' id='inp1'></td></tr>
<tr><td>Reagent3</td><td><input type='text' name='ele3' id='inp1'></td></tr>
<tr><td>IProduct3</td><td><input type='text' name='comp3' id='inp1'></td></tr>
<tr><td>Reagent4</td><td><input type='text' name='ele4' id='inp1'></td></tr>

<?php }
?>
<?php 

if($_POST['steps']==5)
{ ?>
<tr><td>Reagent1</td><td><input type='text' name='ele1' id='inp1'></td></tr>
<tr><td>IProduct1</td><td><input type='text' name='comp1' id='inp1'></td></tr>
<tr><td>Reagent2</td><td><input type='text' name='ele2' id='inp1'></td></tr>
<tr><td>IProduct2</td><td><input type='text' name='comp2' id='inp1'></td></tr>
<tr><td>Reagent3</td><td><input type='text' name='ele3' id='inp1'></td></tr>
<tr><td>IProduct3</td><td><input type='text' name='comp3' id='inp1'></td></tr>
<tr><td>Reagent4</td><td><input type='text' name='ele4' id='inp1'></td></tr>
<tr><td>IProduct4</td><td><input type='text' name='comp4' id='inp1'></td></tr>
<tr><td>Reagent5</td><td><input type='text' name='ele5' id='inp1'></td></tr>
<?php }
?>



<tr><td>Product</td><td><input type='text' name='output' value='<?php echo $output;?>' id='inp1'></td></tr>
<tr><td>&nbsp </td></tr>
<tr><td></td><td><input type='Submit' name='ok' value='Add' id='sub'></td></tr>
</table>

</div>
</form>
<?php } } ?>



</body>
</html>
