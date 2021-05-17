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
		 	echo "Rand did not repeat";
		 }
</body>
</html>
