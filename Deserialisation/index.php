<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 
  <form action="example.php" method="GET">
  ID to GET: <input type="text" name="id">
  <input type="submit"><br>
  <br>
  </form>
  <form action="vulnerable.php" method="get">
  Data to send: <input type="text" name="data">
  <input type="submit">
     </form>
  </body>
</html>
