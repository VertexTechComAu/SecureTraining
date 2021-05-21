<?php
ini_set('display_errors','Off');
class Data
{
  var $guess;
  var $secretCode;
}

$obj = unserialize($_GET['data']);
if($obj) {
    $obj->secretCode = rand(500000,999999);
    if($obj->guess === $obj->secretCode) {
        echo "You Hacked Me";
    }
    else {
    echo "You could not hack me!";
    }
}
?>

