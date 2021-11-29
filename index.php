<?php
session_start();
?>
<!DOCTYPE hmtl>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css.css">
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
		<?php include "login_window.php"; ?>
		<?php include "newacc_window.php"; ?>
		<div id="overlay"></div>
      </div>
  <script src="javascript.js"></script>
  </body>
</html>
