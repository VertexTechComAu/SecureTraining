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
	
	do{
		for($i =0; $i< count($random_numbers);$i++)
		{
			$current_number=$random_numbers[$i];
			for( $j=$i+1; $j<count($random_numbers);$j++)
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
	}while($match==false);
	echo "Number Repeated after: ";
	echo $count;
?>
</body>
</html>
