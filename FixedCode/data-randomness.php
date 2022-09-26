<html>
<body>
<?php 
        $count =0;
        $min=0;
        $max=100000;
        $random_number=random_int($min, $max);
        $match=false;

        do{
                // use strong encryption algorithm to generate random number between $min and $max (single line of code)
		// secure functions random_int(), random_bytes() 
		$random=random_int($min, $max);
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
