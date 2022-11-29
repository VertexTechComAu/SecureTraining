<html>
<body>
<?php

// Include config file
require_once "../config.php";

$user_id =$_POST["id"];
$sql = $link->query("SELECT * FROM users WHERE id = ".$user_id);

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
