<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 
  <?php 
   echo file_get_contents("$_GET['file']");
   echo "I am the unsafe code!";
   ?>
  </body>
</html>
