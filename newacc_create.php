<?php
include "dbconnect.php";

$user_login = $_POST['new_login'];
$user_pass = $_POST['new_password'];
$user_name = $_POST['new_name'];
$user_surname = $_POST['new_surname'];

$sql = "SELECT * FROM `users` WHERE login = '$user_login'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

if ($row) {
    echo("Такой логин уже занят!");
}
else {
    $sql = "INSERT INTO `users` (name, surname, login, password) VALUES ('$user_name', '$user_surname', 
    '$user_login', '$user_pass')";
    $conn->query($sql);
    echo("Аккаунт успешно зарегистрирован!");
}
?>