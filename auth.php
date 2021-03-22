<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$pass = md5($pass."fktoaloq");

	$mysql = new mysqli('localhost', 'root', '', 'register');
	
	$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
	$user = $result->fetch_assoc();
	if(count((array)$user) == 0)
	{
		echo "Taký použivateľ neexistuje";
		exit();
	}
	
	$cookie_name = "user";
	setcookie('user', $user['name'], time() + 600, "/");

	header('Location: /sjf_stu/login.php');
?>