<?php 
require_once("./db.php");

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$confirmpass = $_POST['confirmpass'];
$check = $_POST['check'];
$remember = $_POST['remember'];
$submit = $_POST['submit'];



if ($submit) {
  if ($name && $login && $email && $pass && $confirmpass && $check && $remember && $submit && $pass == $confirmpass) {

    
    $result = mysqli_query($connect, "INSERT INTO `users`(`name`, `pass`, `login`, `email`) VALUES ('$name', '$pass','$login','$email')");

    header('Location: /login_page.php');
  }
  elseif ($pass != $confirmpass ) {
    header('Location: /register_page.php');
  }
  else {
    header('Location: /register_page.php');
  }
} else {
  header('Location: /register_page.php');
}