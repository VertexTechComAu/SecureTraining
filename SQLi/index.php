<html>
  <head>
    <title>SQLi</title>
  </head>
  <body>
  <form action="welcome.php" method="post">
ID: <input type="text" name="id"><br>
<input type="submit">
</form>
<form>
ID (easier injection) :<input action="sql.php" method="get">
<input type="submit">
</form>
  </body>
</html>
