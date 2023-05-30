<?php 
require_once("./db.php");

$name = $_POST['name'];

if (!empty(trim($name))) {
  $result = mysqli_query($connect, "INSERT INTO category (`name`) VALUES ('$name')");
}

header("Location: /category_page.php");