<?php 
require_once("./db.php");

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM category WHERE `id` = '$id'");

header("Location: /category_page.php");