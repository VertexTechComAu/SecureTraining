<html>
<body>
<?php 
        $count =0;
        $min=0;
        $max=100000000;
        $random_number=rand($min, $max);
        $match=false;

        do{
                // use strong encryption algorithm to generate random number between $min and $max (single line of code)
                
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
