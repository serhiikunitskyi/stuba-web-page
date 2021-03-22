<?php
	
	$mysql = new mysqli('localhost', 'root', '', 'register');
	$mysql->query("INSERT INTO `eprihlaska`(`eprihlaska_id`, `name_and_surname`, `date_of_birth`, `study_degree`, `study_program`, `telephone`, `email`, `place_of_living`) VALUES 
	(NULL, '$_POST[name_and_surname]', '$_POST[date_of_birth]', '$_POST[study_degree]', '$_POST[study_program]', '$_POST[telephone]', '$_POST[email]', '$_POST[place_of_living]')");
	$mysql->close();

	header('Location: /sjf_stu/index.html');
?>