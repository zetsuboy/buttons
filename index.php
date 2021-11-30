<?php
session_start();
if ($_SESSION['login'] != NULL) {
  setcookie("login", $_SESSION['login'], time() + 60);
  setcookie("name", $_SESSION['name'], time() + 60);
}
?>
<!DOCTYPE hmtl>
<html lang="en">
  <head>
    <link rel="stylesheet" href="frontend/css/css.css">
    <meta charset="utf-8">
    <title>Кнопка</title>
    <script
       src="https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
       crossorigin="anonymous"></script>
  </head>
  <body>
      <div id="background">
		<a class="LinkModal" href="#">Click</a>
		<?php include "frontend/html/login_window.html"; ?>
		<?php include "frontend/html/newacc_window.html"; ?>
    <?php if (isset($_COOKIE['login'])) {
      echo("<b>Добро пожаловать, ".$_COOKIE['name']."</b");
    }
    ?>
		<div id="overlay"></div>
      </div>
  <script src="frontend/js/javascript.js"></script>
  </body>
</html>
