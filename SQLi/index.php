<html>
  <head>
    <title>SQLi</title>
  </head>
  <body>
POST form
  <form action="sql_post.php" method="post">
ID: <input type="text" name="id"><br>
<input type="submit">
</form>
GET form
<form action="sql_get.php" methond="get">
ID :<input type="text" name="id">
<input type="submit">
</form>
payload<br>
id=1 OR 1=1
  </body>
</html>
