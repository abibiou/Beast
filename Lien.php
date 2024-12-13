<?php

session_start ();


if (isset($_SESSION['mail']) && isset($_SESSION['password'])) {

	
	
	echo 'Votre login est '.$_SESSION['mail'].' et votre mot de passe est '.$_SESSION['password'].'.';

}
else {
	echo 'Une erreur est survenue lors du chargement de la page';
}
?>
