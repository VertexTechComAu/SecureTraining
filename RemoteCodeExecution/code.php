<?php
$ip=$_GET['ip'];
echo '<pre>';
exec("ping -c 4 ".$ip, $retval);
print_r($retval);
echo '<pre>';
?>
