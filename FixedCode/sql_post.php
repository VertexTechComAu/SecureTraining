<html>
<body>
<?php

// Include config file
require_once "../config.php";

$user_id =$_POST["id"];

// prepare and bind
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $link->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
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
