<html>
<body>
<?php
$servername = "localhost";
$username = "learning_user##";
$password = "dT6w8kdovv!mEeaM33";
$dbname = "db##";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
?>
ID:  
<?php
$user_id =$_POST["id"];
echo $user_id; 
?><br>
<?php
$sql = $db->query("SELECT * FROM users WHERE id = ".$user_id);
if ($sql->num_rows > 0) {
  //output data of each row
  while($row = $result->fetch_assoc()) {
   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]." - Lastname: ". $row["surname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
  
?>
</body>
</html>

