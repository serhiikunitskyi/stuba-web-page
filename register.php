<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
		<meta name="keywords" content="SJF, SJF STU, Strojnicka fakulta, Strojnicka fakulta STU">
    	<meta name="description" content="Toto je web-stránka SjF STU v Bratislave">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Strojnícka Fakulta STU v Bratislave</title>
	</head>

	<body>
		<header>
			<figure class="header-left">
				<a href="index.html"><img src="img/sjf_logo.png"></a>
			</figure>			
			<div class="header-right">
				<a href="register.php"><img src="img/lang_sk.png" height="64" alt="Slovenský"></a>
				<!--<a href="index_en.html"><img src="img/lang_en.png" height="64" alt="Anglický"></a>-->
			</div>	
		</header>
		
		<div class="container">
			<form action="check.php" method="post">
				<h1>Registrácia</h1>
				<p><input type="text" class="form-control" name="login" id="login" placeholder="Použivateľské meno"></p>
				<p><input type="text" class="form-control" name="name" id="name" placeholder="Meno"></p>
				<p><input type="password" class="form-control" name="pass" id="pass" placeholder="Heslo"></p>
				<p><button class="btn btn-success" type="submit">Registrovať</button></p>
				<p><b>Už ste zaregistrovaní? <a href="login.php">Prihláste sa</a></b></p>
			</form>
		</div>
				
		<footer>
			<ul>
				<a class="kontakty">Kontakty:</a>
				<a class="facebook" href="https://www.facebook.com/strojnickafakultastuba"><img src="img/facebook.png" height="48" alt="Facebook"></a>
				<a class="youtube" href="https://www.youtube.com/user/STUvBratislave"><img src="img/youtube.png" height="48" alt="YouTube"></a>
				<a class="twitter" href="https://twitter.com/univerzita_stu"><img src="img/twitter.png" height="48" alt="Twitter"></a>
				<a class="linkedin" href="https://www.linkedin.com/school/slovensk%C3%A1-technick%C3%A1-univerzita-v-bratislave/">
					<img src="img/linkedin.png" height="48" alt="LinkedIn"></a>
				<a class="adresa">Strojnícka fakulta STU v Bratislave<br>
					Námestie slobody 17<br>
					812 31 Bratislava 1<br>
					Tel.: (02) 572 96 180<br>
				</a>
			</ul>
		</footer>
	</body>
</html>