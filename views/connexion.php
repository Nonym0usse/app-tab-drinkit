<?php
session_start();

require_once 'lib/Admin.php';
$admin = new Admin();

if(!empty($_POST['email']) && !empty($_POST['password']))
{
	echo $msg = $admin->setConnexion();
}

if($admin->internauteEstConnecte() == true)
{
  header("Location: " . NDD_PATH);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<link href="<?= NDD_PATH ?>/public/stylesheets/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= NDD_PATH ?>/public/stylesheets/admin.css" rel="stylesheet" />
	<title>DRINK-IT - Administration</title>
</head>
<body>
	<center>
		<h1 style="color: #FFF; padding-top: 30px;">CONNEXION ETABLISSEMENT DRINK-IT</h1>
	</center>
	<div class="login-page">
		<div class="form">
			<form class="login-form" method="POST">
				<input type="text" name="email" placeholder="Utilisateur" required/>
				<input type="password" name="password" placeholder="Mot de passe" required/>
				<button>Connexion</button>
			</form>
		</div>
	</div>
</body>
</html>
