<?php
	require('connect.php');
?>
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
				<a href="login.php"><img src="img/lang_sk.png" height="64" alt="Slovenský"></a>
				<!--<a href="index_en.html"><img src="img/lang_en.png" height="64" alt="Anglický"></a>-->
			</div>	
		</header>
		
		<div class="container">
			<?php
      			if($_COOKIE["user"] == "") :
      		?>
			<form action="auth.php" method="post">
				<h1>Prihlásenie sa</h1>
				<p><input type="text" class="form-control" name="login" id="login" placeholder="Použivateľské meno"></p>
				<p><input type="password" class="form-control" name="pass" id="pass" placeholder="Heslo"></p>
				<p><button class="btn btn-success" type="submit">Prihlásiť sa</button></p>
				<p><b>Nie ste ešte zaregistrovaní? <a href="register.php">Zaregistrujte sa</a></b></p>
			</form>
			<?php else:?>
					<p>Ahoj <?=$_COOKIE['user']?>. Aby odísť, klikni <a href="exit.php">tu</a>.</p>
					<h2>E-prihláška</h2>
					<div>
						<form action="login_check.php" method="post">
							<p>
								<label for="name_and_surname">Meno a priezvisko:</label>
								<input type="text" name="name_and_surname" id="name_and_surname">
							</p>
							
							<p>
								<label for="date_of_birth">Dátum narodenia:</label>
								<input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
							</p>
							
							<p><!--Select for Study degree-->
								<label for="study_degree">Stupeň štúdia</label>
								<select name="study_degree" id="study_degree">
									<option value="Bakalársky">Bakalársky</option>
									<option value="Inžinierský">Inžinierský</option>
									<option value="Doktorandský">Doktorandský</option>	
								</select>
							</p>

							<p><!--Select for Study program-->
								<label for="study_program">Študijný program:</label>
								<select name="study_program" id="study_program">
									<option value="Aplikovaná mechanika">Aplikovaná mechanika</option>
									<option value="Aplikovaná mechanika a mechatronika">Aplikovaná mechanika a mechatronika</option>
									<option value="Automatizácia a informatizácia strojov a procesov">Automatizácia a informatizácia strojov a procesov</option>
									<option value="Automobily a mobilné pracovné stroje">Automobily a mobilné pracovné stroje</option>
									<option value="Chemické a potravinárske stroje a zariadenia">Chemické a potravinárske stroje a zariadenia</option>
									<option value="Dopravné stroje a zariadenia">Dopravné stroje a zariadenia</option>
									<option value="Energetické stroje a zariadenia">Energetické stroje a zariadenia</option>
									<option value="Environmentálna výrobná technika">Environmentálna výrobná technika</option>
									<option value="Mechatronika">Mechatronika</option>
									<option value="Meranie a manažérstvo kvality v strojárstve">Meranie a manažérstvo kvality v strojárstve</option>
									<option value="Meranie a skúšobníctvo">Meranie a skúšobníctvo</option>
									<option value="Metrológia">Metrológia</option>
									<option value="Prevádzkový technik dopravnej a výrobnej techniky">Prevádzkový technik dopravnej a výrobnej techniky</option>
									<option value="Procesná technika">Procesná technika</option>
									<option value="Strojárske technológie a materiály">Strojárske technológie a materiály</option>
									<option value="Technika ochrany životného prostredia">Technika ochrany životného prostredia</option>
									<option value="Výrobné stroje a zariadenia">Výrobné stroje a zariadenia</option>
									<option value="Výrobné systémy a manažérstvo kvality">Výrobné systémy a manažérstvo kvality</option>
								</select>
							</p>

							<p>
								<label for="telefon">Telefón:</label>
								<input type="tel" name="telephone">
							</p>
							<p>
								<label for="email">E-mail:</label>
								<input type="email" name="email">
							</p>
							<p>
								<label for="place_of_living">Trvalé bydlisko:</label>
								<input type="text" name="place_of_living">
							</p>
							<p>
								<input type="reset" name="reset" value="Zmazať" style="background: red; color: white; width: 100px;height: 40px;">
								<input type="submit" name="submit" value="Odoslať" style="background: green; color: white; width: 100px; height: 40px;">
							</p>
						</form>
					</div>  
			<?php 
				endif;
			?>
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