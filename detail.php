<?php
include('config.php');




if(isset($_POST['ok']))
{
	$steps = $_POST['steps'];
	$input = $_POST['input'];
	$output = $_POST['output'];
	
	$input1='';
	for( $i=0; $i<strlen($input) ;$i++)
	{
		if(ord(substr($input,$i,1))>=48 && ord(substr($input,$i,1))<=57)
		{
			$k= "<sub>".substr($input,$i,1)."</sub>";
		}
			
			else{
				$k=substr($input,$i,1);
			}
			
		$input1=$input1.$k;
	}

	$output1='';
	for( $i=0; $i<strlen($output) ;$i++)
	{
		if(ord(substr($output,$i,1))>=48 && ord(substr($output,$i,1))<=57)
		{
			$k= "<sub>".substr($output,$i,1)."</sub>";
		}
			else{
				$k=substr($output,$i,1);
			}
			
		$output1=$output1.$k;
	}
	
	$q= mysql_query("select * from input1 where input='".$input."'");
	if(mysql_num_rows($q)==0)
	{
	$que = mysql_query("insert into input1 values('".$input."','".$input1."')") or die("error");
	}
	
	$q1= mysql_query("select * from output where output='".$output."'");
	if(mysql_num_rows($q1)==0)
	{
		$que1 = mysql_query("insert into output values('".$output."','".$output1."')") or die("error1");
	}
		
	if($steps == 1)
	{
		
		$ele1 = $_POST['ele1'];
		$ele='';
	for( $i=0; $i<strlen($ele1) ;$i++)
	{
		if(ord(substr($ele1,$i,1))>=48 && ord(substr($ele1,$i,1))<=57)
		{
			$k= "<sub>".substr($ele1,$i,1)."</sub>";
		}
		else if(ord(substr($ele1,$i,1))==43)
			{
				$k= "<sup>".substr($ele1,$i,1)."</sup>";
			}
			else{
				$k=substr($ele1,$i,1);
			}
			
		$ele=$ele.$k;
	}
		
		$que2 = mysql_query("insert into conversion1 values('".$input."','".$input1."','".$ele."','".$output1."','".$output."')") or die("error2");
		echo "<script> alert('insert successfully'); window.location='index.php';</script>" ;
	}
	
	if($steps == 2)
	{
		
		$ele1 = $_POST['ele1'];
		$ele11='';
	for( $i=0; $i<strlen($ele1) ;$i++)
	{
		if(ord(substr($ele1,$i,1))>=48 && ord(substr($ele1,$i,1))<=57)
		{
			$k= "<sub>".substr($ele1,$i,1)."</sub>";
		}
		else if(ord(substr($ele1,$i,1))==43)
			{
				$k= "<sup>".substr($ele1,$i,1)."</sup>";
			}
			else{
				$k=substr($ele1,$i,1);
			}
			
		$ele11=$ele11.$k;
	}
	
	$comp1 = $_POST['comp'];
		$comp='';
	for( $i=0; $i<strlen($comp1) ;$i++)
	{
		if(ord(substr($comp1,$i,1))>=48 && ord(substr($comp1,$i,1))<=57)
		{
			$k= "<sub>".substr($comp1,$i,1)."</sub>";
		}
		
			else{
				$k=substr($comp1,$i,1);
			}
			
		$comp=$comp.$k;
	}
	
	$ele2 = $_POST['ele2'];
		$ele21='';
	for( $i=0; $i<strlen($ele2) ;$i++)
	{
		if(ord(substr($ele2,$i,1))>=48 && ord(substr($ele2,$i,1))<=57)
		{
			$k= "<sub>".substr($ele2,$i,1)."</sub>";
		}
		else if(ord(substr($ele2,$i,1))==43)
			{
				$k= "<sup>".substr($ele2,$i,1)."</sup>";
			}
			else{
				$k=substr($ele2,$i,1);
			}
			
		$ele21=$ele21.$k;
	}
	
		
		$que2 = mysql_query("insert into conversion values('".$input."','".$input1."','".$ele11."','".$comp."','".$ele21."','".$output1."','".$output."')") or die("error2");
		echo "<script> alert('insert successfully'); window.location='index.php';</script>" ;
	}
	
	if($steps == 3)
	{
		
		$ele1 = $_POST['ele1'];
		$ele11='';
	for( $i=0; $i<strlen($ele1) ;$i++)
	{
		if(ord(substr($ele1,$i,1))>=48 && ord(substr($ele1,$i,1))<=57)
		{
			$k= "<sub>".substr($ele1,$i,1)."</sub>";
		}
		else if(ord(substr($ele1,$i,1))==43)
			{
				$k= "<sup>".substr($ele1,$i,1)."</sup>";
			}
			else{
				$k=substr($ele1,$i,1);
			}
			
		$ele11=$ele11.$k;
	}
	
	$comp1 = $_POST['comp1'];
		$comp='';
	for( $i=0; $i<strlen($comp1) ;$i++)
	{
		if(ord(substr($comp1,$i,1))>=48 && ord(substr($comp1,$i,1))<=57)
		{
			$k= "<sub>".substr($comp1,$i,1)."</sub>";
		}
			else{
				$k=substr($comp1,$i,1);
			}
			
		$comp=$comp.$k;
	}
	
	$ele2 = $_POST['ele2'];
		$ele21='';
	for( $i=0; $i<strlen($ele2) ;$i++)
	{
		if(ord(substr($ele2,$i,1))>=48 && ord(substr($ele2,$i,1))<=57)
		{
			$k= "<sub>".substr($ele2,$i,1)."</sub>";
		}
		else if(ord(substr($ele2,$i,1))==43)
			{
				$k= "<sup>".substr($ele2,$i,1)."</sup>";
			}
			else{
				$k=substr($ele2,$i,1);
			}
			
		$ele21=$ele21.$k;
	}
	
	$comp2 = $_POST['comp2'];
		$comp21='';
	for( $i=0; $i<strlen($comp2) ;$i++)
	{
		if(ord(substr($comp2,$i,1))>=48 && ord(substr($comp2,$i,1))<=57)
		{
			$k= "<sub>".substr($comp2,$i,1)."</sub>";
		}
			else{
				$k=substr($comp2,$i,1);
			}
			
		$comp21=$comp21.$k;
	}
	
	$ele3 = $_POST['ele3'];
		$ele31='';
	for( $i=0; $i<strlen($ele3) ;$i++)
	{
		if(ord(substr($ele3,$i,1))>=48 && ord(substr($ele3,$i,1))<=57)
		{
			$k= "<sub>".substr($ele3,$i,1)."</sub>";
		}
		else if(ord(substr($ele3,$i,1))==43)
			{
				$k= "<sup>".substr($ele3,$i,1)."</sup>";
			}
			else{
				$k=substr($ele3,$i,1);
			}
			
		$ele31=$ele31.$k;
	}
	
		
		$que2 = mysql_query("insert into conversion2 values('".$input."','".$input1."','".$ele11."','".$comp."','".$ele21."','".$comp21."','".$ele31."','".$output1."','".$output."')") or die("error2");
		echo "<script> alert('insert successfully'); window.location='index.php';</script>" ;
	}
	
	if($steps == 4)
	{
		
		$ele1 = $_POST['ele1'];
		$ele11='';
	for( $i=0; $i<strlen($ele1) ;$i++)
	{
		if(ord(substr($ele1,$i,1))>=48 && ord(substr($ele1,$i,1))<=57)
		{
			$k= "<sub>".substr($ele1,$i,1)."</sub>";
		}
		else if(ord(substr($ele1,$i,1))==43)
			{
				$k= "<sup>".substr($ele1,$i,1)."</sup>";
			}
			else{
				$k=substr($ele1,$i,1);
			}
			
		$ele11=$ele11.$k;
	}
	
	$comp1 = $_POST['comp1'];
		$comp='';
	for( $i=0; $i<strlen($comp1) ;$i++)
	{
		if(ord(substr($comp1,$i,1))>=48 && ord(substr($comp1,$i,1))<=57)
		{
			$k= "<sub>".substr($comp1,$i,1)."</sub>";
		}
			else{
				$k=substr($comp1,$i,1);
			}
			
		$comp=$comp.$k;
	}
	
	$ele2 = $_POST['ele2'];
		$ele21='';
	for( $i=0; $i<strlen($ele2) ;$i++)
	{
		if(ord(substr($ele2,$i,1))>=48 && ord(substr($ele2,$i,1))<=57)
		{
			$k= "<sub>".substr($ele2,$i,1)."</sub>";
		}
		else if(ord(substr($ele2,$i,1))==43)
			{
				$k= "<sup>".substr($ele2,$i,1)."</sup>";
			}
			else{
				$k=substr($ele2,$i,1);
			}
			
		$ele21=$ele21.$k;
	}
	
	$comp2 = $_POST['comp2'];
		$comp21='';
	for( $i=0; $i<strlen($comp2) ;$i++)
	{
		if(ord(substr($comp2,$i,1))>=48 && ord(substr($comp2,$i,1))<=57)
		{
			$k= "<sub>".substr($comp2,$i,1)."</sub>";
		}
			else{
				$k=substr($comp2,$i,1);
			}
			
		$comp21=$comp21.$k;
	}
	
	$ele3 = $_POST['ele3'];
		$ele31='';
	for( $i=0; $i<strlen($ele3) ;$i++)
	{
		if(ord(substr($ele3,$i,1))>=48 && ord(substr($ele3,$i,1))<=57)
		{
			$k= "<sub>".substr($ele3,$i,1)."</sub>";
		}
		else if(ord(substr($ele3,$i,1))==43)
			{
				$k= "<sup>".substr($ele3,$i,1)."</sup>";
			}
			else{
				$k=substr($ele3,$i,1);
			}
			
		$ele31=$ele31.$k;
	}
	
	$comp3 = $_POST['comp3'];
		$comp31='';
	for( $i=0; $i<strlen($comp3) ;$i++)
	{
		if(ord(substr($comp3,$i,1))>=48 && ord(substr($comp3,$i,1))<=57)
		{
			$k= "<sub>".substr($comp3,$i,1)."</sub>";
		}
			else{
				$k=substr($comp3,$i,1);
			}
			
		$comp31=$comp31.$k;
	}
	
	$ele4 = $_POST['ele4'];
		$ele41='';
	for( $i=0; $i<strlen($ele4) ;$i++)
	{
		if(ord(substr($ele4,$i,1))>=48 && ord(substr($ele4,$i,1))<=57)
		{
			$k= "<sub>".substr($ele4,$i,1)."</sub>";
		}
		else if(ord(substr($ele4,$i,1))==43)
			{
				$k= "<sup>".substr($ele4,$i,1)."</sup>";
			}
			else{
				$k=substr($ele4,$i,1);
			}
			
		$ele41=$ele41.$k;
	}
	
		
		$que2 = mysql_query("insert into conversion3 values('".$input."','".$input1."','".$ele11."','".$comp."','".$ele21."','".$comp21."','".$ele31."','".$comp31."','".$ele41."','".$output1."','".$output."')") or die("error2");
		echo "<script> alert('insert successfully'); window.location='index.php';</script>" ;
	}
	
	if($steps == 5)
	{
		
		$ele1 = $_POST['ele1'];
		$ele11='';
	for( $i=0; $i<strlen($ele1) ;$i++)
	{
		if(ord(substr($ele1,$i,1))>=48 && ord(substr($ele1,$i,1))<=57)
		{
			$k= "<sub>".substr($ele1,$i,1)."</sub>";
		}
		else if(ord(substr($ele1,$i,1))==43)
			{
				$k= "<sup>".substr($ele1,$i,1)."</sup>";
			}
			else{
				$k=substr($ele1,$i,1);
			}
			
		$ele11=$ele11.$k;
	}
	
	$comp1 = $_POST['comp1'];
		$comp='';
	for( $i=0; $i<strlen($comp1) ;$i++)
	{
		if(ord(substr($comp1,$i,1))>=48 && ord(substr($comp1,$i,1))<=57)
		{
			$k= "<sub>".substr($comp1,$i,1)."</sub>";
		}
		
			else{
				$k=substr($comp1,$i,1);
			}
			
		$comp=$comp.$k;
	}
	
	$ele2 = $_POST['ele2'];
		$ele21='';
	for( $i=0; $i<strlen($ele2) ;$i++)
	{
		if(ord(substr($ele2,$i,1))>=48 && ord(substr($ele2,$i,1))<=57)
		{
			$k= "<sub>".substr($ele2,$i,1)."</sub>";
		}
		else if(ord(substr($ele2,$i,1))==43)
			{
				$k= "<sup>".substr($ele2,$i,1)."</sup>";
			}
			else{
				$k=substr($ele2,$i,1);
			}
			
		$ele21=$ele21.$k;
	}
	
	$comp2 = $_POST['comp2'];
		$comp21='';
	for( $i=0; $i<strlen($comp2) ;$i++)
	{
		if(ord(substr($comp2,$i,1))>=48 && ord(substr($comp2,$i,1))<=57)
		{
			$k= "<sub>".substr($comp2,$i,1)."</sub>";
		}
			else{
				$k=substr($comp2,$i,1);
			}
			
		$comp21=$comp21.$k;
	}
	
	$ele3 = $_POST['ele3'];
		$ele31='';
	for( $i=0; $i<strlen($ele3) ;$i++)
	{
		if(ord(substr($ele3,$i,1))>=48 && ord(substr($ele3,$i,1))<=57)
		{
			$k= "<sub>".substr($ele3,$i,1)."</sub>";
		}
		else if(ord(substr($ele3,$i,1))==43)
			{
				$k= "<sup>".substr($ele3,$i,1)."</sup>";
			}
			else{
				$k=substr($ele3,$i,1);
			}
			
		$ele31=$ele31.$k;
	}
	
	$comp3 = $_POST['comp3'];
		$comp31='';
	for( $i=0; $i<strlen($comp3) ;$i++)
	{
		if(ord(substr($comp3,$i,1))>=48 && ord(substr($comp3,$i,1))<=57)
		{
			$k= "<sub>".substr($comp3,$i,1)."</sub>";
		}
			else{
				$k=substr($comp3,$i,1);
			}
			
		$comp31=$comp31.$k;
	}
	
	$ele4 = $_POST['ele4'];
		$ele41='';
	for( $i=0; $i<strlen($ele4) ;$i++)
	{
		if(ord(substr($ele4,$i,1))>=48 && ord(substr($ele4,$i,1))<=57)
		{
			$k= "<sub>".substr($ele4,$i,1)."</sub>";
		}
		else if(ord(substr($ele4,$i,1))==43)
			{
				$k= "<sup>".substr($ele4,$i,1)."</sup>";
			}
			else{
				$k=substr($ele4,$i,1);
			}
			
		$ele41=$ele41.$k;
	}
	
	
	$comp4 = $_POST['comp4'];
		$comp41='';
	for( $i=0; $i<strlen($comp4) ;$i++)
	{
		if(ord(substr($comp4,$i,1))>=48 && ord(substr($comp4,$i,1))<=57)
		{
			$k= "<sub>".substr($comp4,$i,1)."</sub>";
		}
			else{
				$k=substr($comp4,$i,1);
			}
			
		$comp41=$comp41.$k;
	}
	
	$ele5 = $_POST['ele5'];
		$ele51='';
	for( $i=0; $i<strlen($ele5) ;$i++)
	{
		if(ord(substr($ele5,$i,1))>=48 && ord(substr($ele5,$i,1))<=57)
		{
			$k= "<sub>".substr($ele5,$i,1)."</sub>";
		}
		else if(ord(substr($ele5,$i,1))==43)
			{
				$k= "<sup>".substr($ele5,$i,1)."</sup>";
			}
			else{
				$k=substr($ele5,$i,1);
			}
			
		$ele51=$ele51.$k;
	}
	
		
		$que2 = mysql_query("insert into conversion4 values('".$input."','".$input1."','".$ele11."','".$comp."','".$ele21."','".$comp21."','".$ele31."','".$comp31."','".$ele41."','".$comp41."','".$ele51."','".$output1."','".$output."')") or die("error2");
		echo "<script> alert('insert successfully'); window.location='index.php';</script>" ;
	}
	
	
}