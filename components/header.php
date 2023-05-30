<?php
require_once("controllers/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/styles/main.css">
  <title>Система учета заявок "Пилигрим"</title>
</head>
<body>
<section class="section section_header">
  <div class="wrapper">
    <header class="header">
      <a rel="stylesheet" href="/index.php"><img src="/assets/img/12.jpg" alt="Logo" /></a>
      <div>
        <?php if (!empty($_SESSION['auth'])): ?>
          <a href="/controllers/logout.php">Выйти</a>
        <?php else: ?>
          <a href="/login_page.php">Войти</a>
          <a href="/register_page.php">Регистрация</a>
          <?php endif; ?>
      </div>
    </header>
  </div>
</section>