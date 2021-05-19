<html>
<body>
<?php
$servername = "localhost";
$username = "learning_user16";
$password = "dT6w8kdovv!mEeaM33";
$dbname = "db16";

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
?>
<br>
<?php
$sql = $db->query("SELECT * FROM users WHERE id = ".$user_id);
echo $sql;
$conn->close();
?>
</body>
</html>

