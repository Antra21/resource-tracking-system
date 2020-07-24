<?php
	session_start();
	unset($_SESSION["login_status"]);
	unset($_SESSION["login_admin_id"]);
	unset($_SESSION["login_role"]);
	header("Location:login.php");
?>