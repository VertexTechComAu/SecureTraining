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

functiongetUserAccessRoleByID($id)
{
	global $conn;
		
	$query = "select user_role from tbl_user_rolewhere  id = ".$id;
	
	$rs = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($rs);
		
	return $row['user_role'];
}
?-->
