<html>
<body>
<?php 
	$count =0;
	$min=0;
	$max=10;
	$random_numbers=array();
	//fill the array with random numbers
	for($i=0; $i<$max; $i++)
		{
			$random=rand($min, $max);
			$random_numbers[$i]= $random;
		}
	$match=false;
		for($i =0; $i< count($random_numbers);$i++)
		{
			$current_number=$random_numbers[$i];
			for( $j=0; $j<count($random_numbers);$j++)
			{
				if(!$i==$j)
				{
					if($current_number==$random_numbers[$j])
					{
						$match=true;
					}
					else
					{
						$count++;
					}
				}
			}
			
		}
		if ($match==true)
		{
			echo "Number Using Rand() Repeated after: ";
			echo $count;
		}
		else
		{
		 	echo "Number using rand() did NOT repeat";
		 }
	$count_s =0;
	$random_numbers_s=array();
	//fill the array with random numbers
	for($i=0; $i<$max; $i++)
		{
			$random=random_int($min, $max);
			$random_numbers_s[$i]= $random;
		}
	$match_s=false;
	
	for($i =0; $i< count($random_numbers_s);$i++)
		{
			$current_number=$random_numbers_s[$i];
			for( $j=0; $j<count($random_numbers_s);$j++)
			{
				if(!$i==$j)
				{
					if($current_number==$random_numbers_s[$j])
					{
						$match_s=true;
					}
					else
					{
						$count_s++;
					}
				}
			}
			
		}
		if ($match==true){
	echo "<br>Number Using Random_Int Repeated after: ";
	echo $count_s;
	}
	else
		{
		 	echo "<br> Number using random_int() did NOT repeat";
		 }
	
	
?>
</body>
</html>
