<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="utf-8" />
	</head>
	<body> 



<?php

if(isset($_POST['submit']))
{

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail = htmlspecialchars($_POST['mail']);
$codepostal = htmlspecialchars($_POST['codepostal']);
$telephone = htmlspecialchars($_POST['telephone']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$pass = htmlspecialchars($_POST['pass']);


$connect=mysql_connect('localhost','root','') or die('Error');
mysql_select_db('test');


$query=mysql_query("INSERT INTO inscription VALUES('$nom','$prenom', '$mail', '$codepostal', '$telephone', '$pseudo', '$pass')");

die("Inscription terminée <a href='Seconnecter.php'> connectez-vous</a>");

}
else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Veuillez réessayer</p>';
    }

?>

</body>
</html>