<?php
class Data
{
  var $guess;
  var $secretCode;
}

$obj = unserialize($_GET['decode']);
if($obj) {
    $obj->secretCode = rand(500000,999999);
    if($obj->guess === $obj->secretCode) {
        echo "Win";
    }
}
?>

