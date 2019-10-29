<!DOCTYPE html>
<html lang="en">
<head>
	<title>Answer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<?php
			function arm($num)
			{
				$n=$num;
				$count=0;
				while($n>1)
				{
					$n=$n/10;
					$count++;
				}
				//echo $count."\n";
				$n=$num;
				$sum=0;
				while ($n!=0)
				{
					$d=$n%10;
					$sum=$sum+pow($d,$count);
					$n=$n/10;
				}
				//echo $sum."\n";
				if($sum==$num)
					return true;
				else
					return false;
			}
			$num=$_POST["input"];
			$ans=arm($num);
			if($ans)
				echo '<div class="alert alert-success message" role="alert">'.$num.' is an ARMSTRONG NUMBER!</div>';
			else
				echo '<div class="alert alert-danger message" role="alert">'.$num.' is NOT an ARMSTRONG NUMBER.</div>';
		?>
	</div>
</body>
</html>