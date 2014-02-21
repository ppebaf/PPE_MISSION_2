<?php
session_start ();




if(isset($_GET['logout'])) {
    session_destroy ();
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
		}
		
		
		
		
		if(isset($_GET['login'])) {

$login_valide = "baptiste";
$password_valide = "password";


if (isset($_POST['login']) && isset($_POST['password'])) {

if ($login_valide == $_POST['login'] && $password_valide == $_POST['password']) {

		$_SESSION['id'] = 1;
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['password'] = $_POST['password'];

echo '<meta http-equiv="refresh" content="0;URL=index.php">';

	}
	else {
		echo '<body onLoad="alert(\'Utilisateur ou mot de passe incorrect...\')">';

	}
}


		}
		
		?>