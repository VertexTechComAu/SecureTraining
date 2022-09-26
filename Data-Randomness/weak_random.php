<html>
<body>
<?php
	$count =0;
	$min=0;
	$max=100000;
	$random_number=rand($min, $max);
	$match=false;

	do{
		// insecure functions mt_rand(), rand(), uniqid()
		$random=rand($min, $max);
		$count++;
		if( $random==$random_number)
		{
			$match=true;
		}

	}while($match==false);
	echo "Number Repeated after: ";
	echo number_format($count);
?>
</body>
</html>
