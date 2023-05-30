<?php 
session_start();
require_once("./db.php");

$name = $_POST['name'];
$description = $_POST['description'];
$select_category = $_POST['select_category'];
$submit = $_POST['submit'];
$id_author = $_SESSION['user_id'];

if ($submit) {
  $uploadfile = tempnam('../assets/img/orders/', '');
  unlink($uploadfile);
  move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
  $uploadfile = explode('\\', $uploadfile);
  $photo_before = end($uploadfile);
  
  $result = mysqli_query($connect, "INSERT INTO orders (`name`, `description`, `id_author`, `id_category`, `photo_before`, `photo_after`, `create_time`, `update_time`) 
  VALUES ('$name', '$description', '$id_author', '$select_category', '$photo_before', '', current_timestamp, current_timestamp)");
}

header("Location: /orders_page.php");