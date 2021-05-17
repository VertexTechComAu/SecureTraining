<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 
  <form action="unsafe.php" method="get">
  Enter filename : <input type="text" name="file"><br>
  <input type="submit" name="Unsafe Code!"><br>
  </form>
  <form action="safe.php" method="get">  
  Enter filename : <input type="text" name="file"><br>
  <input type="submit" name="Safe Code!"><br>
  </form>
  </body>
</html>
