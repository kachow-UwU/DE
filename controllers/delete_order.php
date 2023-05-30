<?php 
require_once("./db.php");

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM orders WHERE `id` = '$id'");

header("Location: /orders_page.php");