<?php
include "dbconnect.php";

$user_login = $_POST['new_login'];
$user_pass = $_POST['new_password'];
$user_name = $_POST['new_name'];
$user_surname = $_POST['new_surname'];

$hashlogin = password_hash($user_login, PASSWORD_DEFAULT);

$sql = "SELECT * FROM `users` WHERE login = :login";
$result = $conn->prepare($sql);
$result->execute(array(':login' => $user_login));
$row = $result->fetch();

if ($row) {
    echo("Такой логин уже занят!");
}
else {
    $sql = "INSERT INTO `users` (name, surname, login, password, hashlogin) VALUES (:name, :surname, 
    :login, :password, :hashlogin)";
    $result = $conn->prepare($sql);
    $result->execute(array(':name' => $user_name, ':surname' => $user_surname, ':login' => $user_login, ':password' => $user_pass, ':hashlogin' => $hashlogin));
    echo("Аккаунт успешно зарегистрирован!");
}
?>