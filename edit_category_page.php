<?php
	require_once("components/header.php");
	if (!empty($_SESSION['auth']) && $_SESSION['role'] == 1){
		require_once("components/nav.php");
		require_once("components/pages/edit_category_page.php");
	}
	else {
		header('Location: /');
	}
?>