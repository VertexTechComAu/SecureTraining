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
	echo "(Weak) Number Repeated after: ";
	echo $count;
	
	

	$count_s =0;
	$random_number_s=random_int($min, $max);
	$match_s=false;
	
	do{
		$random_s=random_int($min, $max);
		$count_s++;
		if( $random_s==$random_number_s)
		{
			$match_s=true;
		}
		
	}while($match_s==false);
	echo "<br> (Strong)Number Repeated after: ";
	echo $count_s;
	
	
	
?>
</body>
</html>
