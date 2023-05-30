<?php 
require_once("./db.php");

$login = $_POST['login'];
$pass = $_POST['pass'];
$submit = $_POST['submit'];

if ($submit) {
  if ($login && $pass) {

    $result = mysqli_query($connect, "SELECT * FROM users WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = mysqli_fetch_assoc($result);
    if ($user) {
      $_SESSION['auth'] = true;
      $_SESSION['user_id'] = $user['id'];
      if ($user["login"] == 'admin' && $user["pass"] == 'adminWSR') {
        $_SESSION['role'] = 1;
      } else {
        $_SESSION['role'] = 2;
      }
      header('Location: /orders_page.php');
    }

  }
  else {
    header('Location: /login_page.php');
  }
} else {
  header('Location: /login_page.php');
}