<?php

include "dbconnect.php";

$user_login = $_POST['login'];
$user_pass = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE login = '$user_login' AND password = '$user_pass'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if ($row){
	echo("Добро пожаловать, ".$row['surname']." ".$row['name']);
}
else {
	echo("Неверные данные!");
}



/*if ($row[3] == $user_login) {
	$_SESSION['login'] = $user_login;
	$_SESSION['password'] = $user_password;
}

else {
	echo '<script language="javascript">';
	echo 'alert("Неверные данные!")';
	echo '</script>';
}
header('Location: ../ ');*/
?>
