<<<<<<< HEAD
<!--?php
	define("HOST","localhost");
	define("DB_PASS","");
	define("DB_USER","");
	define("DB_NAME","db17");
	
	
	$conn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	
	if(!$conn)
	{
		die(mysqli_error());
	}
=======
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'learning_user##');
define('DB_PASSWORD', '');
define('DB_NAME', 'db##');
>>>>>>> 2845ee742e69e88bb793970d8c31d408af0e2d3b
 
functiongetUserAccessRoleByID($id)
{
	global $conn;
		
	$query = "select user_role from tbl_user_rolewhere  id = ".$id;
	
	$rs = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($rs);
		
	return $row['user_role'];
}
?-->
