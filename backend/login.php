<?php
session_start();

include "dbconnect.php";

$user_login = $_POST['login'];
$user_pass = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE login = :login AND password = :password";
$result = $conn->prepare($sql);
$result->execute(array(':login' => $user_login, ':password' => $user_pass));
$row = $result->fetch();
if ($row){
	$_SESSION['hashlogin'] = $row['hashlogin'];
	header("Location:../");
}
else {
	echo("Неверные данные!");
}
?>
