<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 
  <form action="insecure_hashing.php" method="post">
  Enter password to Hash (insecurely): <input type="text" name="md"><br>
  <input type="submit"><br>
  </form>
  <form action="secure_hashing.php" method="post">
  Enter password to Hash (securely): <input type="text" name="sha"><br>
  <input type="submit"><br>
  </form>
  <br>
  </form>
  </body>
</html>
