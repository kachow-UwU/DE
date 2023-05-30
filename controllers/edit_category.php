<?php 
require_once("./db.php");

$id = $_POST['id'];
$name = $_POST['name'];

$result = mysqli_query($connect, "UPDATE category SET `name` = '$name' WHERE `id` = '$id'");

header("Location: /category_page.php");