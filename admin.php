<html>
	<head>
		<title>ADOPTA NU CUMPARA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
	
	<?php 	
	include("header.php");
	?>

	<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Acasa</a></li>
					<li><a href="generic.php">Adoptie</a></li>
					<li><a href="elements.php">Galerie</a></li>
					<li><a href="script_aditional.php">Mai multe</a></li>
				</ul>
	</nav>
	<section id="main" class="wrapper">
		<div class="inner">
		<header class="align-center">

	<b><u>Inregistrare:</u></b>
	<form name="register_form" action="admin_transfer.php" method="post">
	<table width="100%" cellpadding="1" cellspacing="2">
	<tr>
	<td width="40%">Nume</td>
	<td><input type="text" name="register_name" id="register_name" /></td>
	</tr>
	<tr>
	<td width="40%">Prenume</td>
	<td><input type="text" name="register_pren" id="register_pren" /></td>
	</tr>
	<tr>
	<td>E-Mail</td>
	<td><input type="text" name="register_email" id="register_email" /></td>
	</tr>
	<tr>
	<td>Username</td>
	<td><input type="text" name="register_username" id="register_username" /></td>
	</tr>
	<tr>
	<td>Parola</td>
	<td><input type="password" name="register_password" id="register_password" /></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td><input type="submit" name="register_btn" value="Inregistrare" /></td>
	</tr>
	</table>
	</form>
	</header>
	</div>
    </section>

	<footer id="footer">
				<div class="inner">
					<h2>Contacteaza-ne</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">+40 123 456 789</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">adapost_animale@mail.ro</a></li>
						<li><span class="icon fa-map-marker"></span> Ploiesti, Strada Bd. Castanilor nr. 1</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; adopta un animalut <a href="https://www.facebook.com/">FACEBOOK</a>. Imagini <a href="https://www.facebook.com/arcaluinorocel/photos/?ref=page_internal">Asociatia ARCA LUI NOROCEL</a>.
				</div>
			</footer>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>