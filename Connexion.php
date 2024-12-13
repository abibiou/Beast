<php

$mail_valide = "1";
$password_valide = "Beast";


if (isset($_POST['mail']) && isset($_POST['password'])) {

	
	if ($mail_valide == $_POST['mail'] && $password_valide == $_POST['password']) {
		

		
		session_start ();
		
		$_SESSION['mail'] = $_POST['mail'];
		$_SESSION['password'] = $_POST['password'];

		
		header ('location: Lien.php');
	}
	else {
		
		echo '<body onLoad="alert(\'Vos Identifiant ne Correpondent pas.
        Veuillez réessayer ultérieument\')">';
		
		echo '<meta http-equiv="refresh" content="0;URL=LogIn.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>
<html><a href="Login.php">0000</a></html>
