<html>
<body>
<?php
$servername = "localhost";
$username = "brenden";
$password = "";
$dbname = "db1";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

$user_id =$_POST["id"];
$sql = $db->query("SELECT * FROM users WHERE id = ".$user_id);

if ($sql->num_rows > 0) {
  //output data of each row
  while($row = $sql->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]." - Lastname: ". $row["surname"]. "<br>"; 
}
} else {
  echo "0 results";
}
$stmt->close();
$db->close();
?>
</body>
</html>
