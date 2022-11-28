<?php
  $ip=$_GET['ip'];
  if(preg_match('/^[a-zA-Z0-9.]+$/', $ip)){
    echo '<pre>';
    exec("ping -c 4 ".$ip, $retval);
    print_r($retval);
    echo '<pre>';
  }
  else
  {
    echo "Bad Code";
  }
?>
