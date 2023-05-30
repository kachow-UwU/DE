<?php
	require_once("components/header.php");
	if (!empty($_SESSION['auth'])){
		require_once("components/nav.php");
		require_once("components/pages/orders_page.php");
	}
	else {
		header('Location: /');
	}
?>