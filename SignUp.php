<?php
session_start();


$host = "localhost";
$user = "root";
$password = "";
$dbname = "beast";


$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    $telephone = $_POST['telephone'];
    $email = $_POST['mail'];
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    
    
    
   
        $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe, telephone, adresse) 
                VALUES (?, ?, ?, ?, ?)";
        

        if ($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $nom, $email, $password, $telephone, $adresse);
        
        



     if (mysqli_stmt_execute($stmt))  {
        echo "Compte créé avec succès. <a href='Login.php'>Connectez-vous ici</a>";
    } else {
        echo "Erreur : " . mysqli_stmt_error($stmt);
    }


    mysqli_stmt_close($stmt);
} else {
echo "Erreur de préparation de la requet: " . mysqli_error($conn);
}
   mysqli_close($conn);
}
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="SignUp.css">

</head>
<body>

<nav id="navbar">
        <a href="Accueil.php">ACCUEIL</a>
        <a href="Accueil.php">COLLECTIONS</a>
        <a href="Accueil.php">CONTACT</a>
        <a href="Accueil.php">À PROPOS</a>
    </nav>

<img src="Logo.png" alt="Logo_Beast" id="logo_beast">
    <style type="text/css">
        
        </style>

        <div id="User_SignUp">

        <form action="SignUp.php" method="post">

            <div id="CreateAccount">SignUp</div>
            <img src="Line 7.png" alt="trait" id="trait">


           <input id="Telephone" placeholder="Votre Numéro de téléphone" name="telephone" type="number" required ><br><br>

           <input id="Mail" placeholder="Votre E-Mail" name="mail" type="text" required ><br><br>

           <input id="Nom" placeholder="Votre Nom" name="nom" type="text" required ><br><br>


       <input id="Adresse" placeholder="Votre adresse" name="adresse" type="text" required ><br><br>
       
           <input id="Password" placeholder="Mot De Passe" name="password" type="password" required ><br><br>

    
       
    <a id="lien_Connexion" href="Login.php"> Connectez vous ici.</a>

            <input id="button" type="submit" value="Créer votre compte"><br><br>
           
</form>
</div>
</body>
</html>