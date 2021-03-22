<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 40)
	{
		echo "Dĺžka použivateľského mena musi byť od 5 do 40 znakov";
		exit();
	}
	
	if(mb_strlen($name) < 2 || mb_strlen($name) > 50)
	{
		echo "Dĺžka mena musi byť od 2 do 50 znakov";
		exit();
	}

	if(mb_strlen($pass) < 5 || mb_strlen($pass) > 50)
	{
		echo "Dĺžka hesla musi byť od 5 do 50 znakov";
		exit();
	}

	$pass = md5($pass."fktoaloq");

	$mysql = new mysqli('localhost', 'root', '', 'register');
	$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");
	$mysql->close();

	header('Location: /sjf_stu/login.php');
?>