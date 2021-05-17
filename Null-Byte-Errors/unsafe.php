<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 
  <?php 
   echo file_get_contents($_GET['file']."php");
   echo "I am the unsafe code!";
   ?>
  </body>
</html>
