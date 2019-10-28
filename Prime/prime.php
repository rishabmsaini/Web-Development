<?php
	function prime_no($num)
	{
		if($num==1)
			return false;
		for($i=2;$i<=(($num)/2);$i++)
			if($num%$i==0)
				return false;
		return true;
	}
	
	$num1=$_POST["input1"];
	$num2=$_POST["input2"];

	echo "<p>List of prime numbers between ".$num1." to ".$num2.":<br></p>";
	for($i=$num1;$i<=$num2;$i++)
		if(prime_no($i))
			echo $i." ";
?>
