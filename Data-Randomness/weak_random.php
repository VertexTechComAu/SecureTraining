<html>
<body>
<?php 
	$count =0;
	$min=0;
	$max=10;
	$random_number=rand($min, $max);
	$match=false;
	
	do{
		$random=rand($min, $max);
		$count++;
		if( $random==$random_number)
		{
			$match=true;
		}
		
	}while($match==false);
	echo "Number Repeated after: ";
	echo $count;
?>
</body>
</html>
