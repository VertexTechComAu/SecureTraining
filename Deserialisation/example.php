<html>
<body>
<?php
$data =array('1',
		array(  'John',
			'Citizen',
			'john@citizen.com.au',
			'MyPassword'),
		'2',
		array(  'Jane',
			'Doe',
			'jane@doe.com.au',
			'IamtheSafestPassword'),
		);
$data_string= serialize($data);
?>
<?php
$ids=array();
$firstnames=array();
$lastnames=array();
$passwords=array();
$emails=array();
$deser=unserialize($data_string);
?>
<?php
for($i=0; $i<count($deser);$i=$i+2)
{
  array_push($ids,$deser[$i]);
  array_push($firstnames,$deser[$i+1][0]);
  array_push($lastnames,$deser[$i+1][1]);
  array_push($emails,$deser[$i+1][2]);
  array_push($passwords,$deser[$i+1][3]);
}
$select=$_GET['id'];
$selection= $select-1;
$firstname=$firstnames[$selection];
$lastname=$lastnames[$selection];
$email=$emails[$selection];
$password=$passwords[$selection];
?>
<br>First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>"><br><br>
Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>"><br><br>
Email: <input type="text" name="email" value="<?php echo $email;?>"><br><br>
Password: <input type="text" name="password" value="<?php echo $password;?>">
</body>
</html>
