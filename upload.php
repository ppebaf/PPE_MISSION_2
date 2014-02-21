<?php include 'includes/header.php'; ?>
<?php include 'includes/connect.php'; ?>

<p>
Uploader vos compte rendu ici :
</p>

<form method="POST" action="upload.php" enctype="multipart/form-data">
     Fichier : <input type="file" name="pdf">
     <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>


<p>






<?php
if(isset($_FILES['pdf']))
{ 
$dossier = 'upload/';
$fichier = basename($_FILES['pdf']['name']);
$extensions = array('.pdf');
$extension = strrchr($_FILES['pdf']['name'], '.'); 

if(!in_array($extension, $extensions))
{
     $erreur = 'Vous devez uploader un fichier de type pdf';
     echo $erreur;
}


if(!isset($erreur))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['pdf']['name']);
     

     if (file_exists('upload/'.$fichier)) 
	{ 
		$nom_final= preg_replace("`.pdf`is",date("U").".pdf",$fichier); 
	} 
	else { 
		$nom_final=$fichier;
	} 

 
     if(move_uploaded_file($_FILES['pdf']['tmp_name'], $dossier . $nom_final))
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
}
?>
<br><br>

<p>Vos fichiers : </p>
<?php
$dir    = 'upload/';
$files = scandir($dir);

foreach($files as $file)
{

echo '<a href="upload/'.$file.'">'.$file.'</a><br/>';
}



echo '<br>';
?>
</p>

<?php include 'includes/footer.php'; ?>
