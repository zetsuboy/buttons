<?php
session_start();

include "dbconnect.php";

$user_hashlogin = $_COOKIE['hashlogin'];

$sql = "SELECT * FROM `users` WHERE hashlogin = :hashlogin";
$result = $conn->prepare($sql);
$result->execute(array(':hashlogin' => $user_hashlogin));
$row = $result->fetch();
if ($row){
	$_SESSION['name'] = $row['name'];
	$_SESSION['surname'] = $row['surname'];
}
else {
	$_COOKIE['hashlogin'] = NULL;
}
?>
