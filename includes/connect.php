<div id="connect">

<?php
if (isset($_SESSION['login']) && isset($_SESSION['password'])) {

	echo 'Bonjour '.$_SESSION['login'];
	echo '<br>';
	echo '<a href="upload.php">Upload PDF</a>';
	echo '<br>';
	echo'<a href="?logout">Se déconnecter</a>';

}
else
{
?>
<h1>Se connecter :</h1>

<FORM Method="POST" Action="?login">

Utilisateur :   <INPUT type=text size=20 name=login><BR>

Mot de passe :  <INPUT type=password size=20 name=password><BR>


  <INPUT type=submit value=Envoyer>

  <INPUT type=hidden name=afficher value=ok>

</FORM>

<?php } ?>
</div>



