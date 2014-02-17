<?php include 'includes/header.php';
	  include 'connect.php'; ?>


<!DOCTYPE html>
<html>
<head>
		<title>GSB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/style.css" rel="stylesheet">
 
 

 
</head>
<body>

<header>
	<img id="logo" src="images/gsb.png" alt="logo" style="width:150px;" />
	<nav>
	<ul>
	<li>Accueil</li>
	<li>Contact</li>
	<li>Connexion</li>
	<li>News</li>
	</ul>
	
	</nav>


</header>


<div id="container">
<div id="connect">


<?php


if (isset($_SESSION['login']) && isset($_SESSION['password'])) {

	echo 'Bonjour '.$_SESSION['login'];
	echo'<a href="?logout">Se déconnecter</a>';

}
else { ?>
<?php
$login_valide = "test";
$pwd_valide = "test";


if (isset($_POST['login']) && isset($_POST['password'])) {

if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['password']) {


		$_SESSION['login'] = $_POST['login'];
		$_SESSION['password'] = $_POST['password'];

		echo '<meta http-equiv="refresh" content="0;URL=index.php">';

	}
	else {
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';

	}
}

?>
<h1>Se connecter :</h1>

<FORM Method="POST" Action="index.php">

Utilisateur :   <INPUT type=text size=20 name=login><BR>

Mot de passe :  <INPUT type=password size=20 name=password><BR>


  <INPUT type=submit value=Envoyer>

  <INPUT type=hidden name=afficher value=ok>

</FORM>

<?php }
?>

</div>


<p>





Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>



</div>


<footer>PPE Baptiste Domzalski / Axel Bossut / Florian Knockaert</footer>

</body>
</html>








<?php include 'includes/footer.php'; ?>
