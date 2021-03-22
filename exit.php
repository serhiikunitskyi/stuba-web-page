<?php
	$cookie_name = "user";
	setcookie('user', $user['name'], time() - 600, "/");
	header('Location:/sjf_stu/index.html');
?>