<?php 
require_once("./db.php");

$id = $_POST['id'];
$select_status = $_POST['select_status'];
$refusal = $_POST['refusal'];
$submit = $_POST['submit'];


if ($submit) {
  $uploadfile = tempnam('../assets/img/orders/', '');
  unlink($uploadfile);
  move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
  $uploadfile = explode('\\', $uploadfile);
  $photo_after = end($uploadfile);
  $result = mysqli_query($connect, "UPDATE orders SET `id_status` = '$select_status', `photo_after` = '$photo_after', `update_time` = current_timestamp, `refusal` = '$refusal' WHERE `id` = '$id'");
}

header("Location: /orders_page.php");