<?php 
   session_start();
   include_once "con_dbb.php";


   if(isset($_GET['del'])){
    $id_del = $_GET['del'];

    unset($_SESSION['panier'][$id_del]);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        body {
        font-family: 'JetBrains Mono', monospace;
        }
    </style>
    <nav class="navbar navbar-expand-lg fixed-top menuavion" style="background-color: #FFFFFF;">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-5" style="color: black;">
            <li class="nav-item"><a class="nav-link" href="accueil.php">ACCUEIL</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php">COLLECTION</a></li>
              <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
              <li class="nav-item"><a class="nav-link" href="#">À PROPOS</a></li>
            </ul>
          </div>
          <a class="navbar-brand mx-auto" href="pagepanier.php" style="position: absolute; left: 50%; transform: translateX(-50%);">
            <img src="../img/image 2.png" alt="Logo" style="height: 60px;">
          </a>
          <div class="d-flex align-items-center" style="position: absolute; right: 15px;">
            <img src="../img/image 24.png" alt="Logo1" style="height: 30px; margin-right: 15px;">
            <a href="Login.php">
                <img src="./img/image 25.png" alt="Logo2" style="height: 30px;">
            </a>
          </div>
        </div>
        <div class="mt-5"></div>
      </nav>
      


    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-12 mt-2">
                <h3 class="text-center mt-5">Panier</h3>
                <div class="col-6">
                <a href="index.php" class="btn btn-dark mx-auto mt-3">Retourner à nos collections</a>

                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8">
                <div class="d-flex flex-column">
                    <?php 
                        $total = 0 ;
                        $ids = array_keys($_SESSION['panier']);
                        if(empty($ids)){
                            echo "Votre panier est vide";
                        } else {
                            $products = mysqli_query($con, "SELECT * FROM products WHERE id IN (".implode(',', $ids).")");

                            foreach($products as $product):
                                $total = $total + $product['price'] * $_SESSION['panier'][$product['id']];
                    ?>
                    <div class="card d-flex flex-row align-items-center border-dark mb-3">
                        <div class="row w-100">
                            <div class="col-3">
                                <img src="../img/<?=$product['img']?>" class="img-fluid">
                            </div>
                            <div class="col-6">
                                <h5 class="card-title mt-3"><?=$product['name']?><span class="text-success mx-3">En stock</span></h5>
                                <p class="card-text mt-3"><?=$product['price']?>€</p>
                                <p class="card-text mt-3">Quantité: <?=$_SESSION['panier'][$product['id']]?></p>
                            </div>
                            <div class="col-3 text-center">
                                <a href="pagepanier.php?del=<?=$product['id']?>"><img src="../Beast/img/delete.png" alt="Supprimer" style="height: 60px; width: 60px; " class="mt-3 ms-5"></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; } ?>
                  
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border border-dark">
                    <div class="card-body">
                        <p>Remises</p>
                        <p class="card-title">Connectez-vous pour utiliser vos offres personnalisées !</p>
                        <h5 href="#" class="btn btn-dark mx-auto mt-3">Connexion</h5>
                        <hr>
                        <h6>Sous-total :</h6>
                        <h5 class="text-danger mt-3">Tu as économisé : </h5>
                        <hr>
                        <h5 class="text-dark mt-3">Total de la commande : <?=$total?>€</h5>
                        <h5 href="#" class="btn btn-dark mx-auto mt-3">Terminer ma commande</h5>
                        <hr>
                        <h6 class="card-title text-danger">Soldes : jusqu'à -70% avec nouveaux articles soldés</h6>
                        <p class="mt-3">Nous acceptons :</p>
                        <div class="d-flex align-items-center">
                            <img  src="../img/visa.png" class="card-img-top cercle" style="height: 60px; width: 60px;"></img>
                            <img  src="../img/paypall.png" class="card-img-top cercle mx-2" style="height: 60px; width: 60px;"></img>
                            <img src="../img/mastercard.webp" class="card-img-top cercle mx-2" style="height: 60px; width: 60px;"></img>
                            <img  src="../img/maestro.png"  class="card-img-top cercle mx-2" style="height: 60px; width: 60px;"></img>
                            <img  src="../img/klarna.png" class="card-img-top cercle mx-2" style="height: 60px; width: 60px;"></img>
                        </div>
                        <p class="mt-3">Les prix et les frais de livraison ne sont validés que durant la finalisation de la commande.
                            Délai de rétraction de 30 jours. Lisez à propos des retours et remboursements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer py-4 mt-5" style="background-color: #58583B; color: white;">
  <div class="container">
      <div class="row text-center text-md-start">
          <div class="col-md-3 mb-4 footer-logo">
              <img src="../img/image 2.png" alt="" style="height: 120px;">
          </div>
           <div class="col-md-3 mb-4">
              <h5 class="">Catégorie</h5>
              <ul class="list-unstyled mt-3">
                  <li><a href="#" class="text-white text-decoration-none mt-1">Pantalon</a></li>
                  <li><a href="#" class="text-white text-decoration-none mt-1">T-shirt</a></li>
                  <li><a href="#" class="text-white text-decoration-none mt-1">Veste</a></li>
                  <li><a href="#" class="text-white text-decoration-none mt-1">Chaussure</a></li>
              </ul>
          </div>
          <div class="col-md-3 mb-4">
              <h5>Liens</h5>
              <ul class="list-unstyled mt-3">
                  <li><a href="accueil.php" class="text-white text-decoration-none mt-1">Accueil</a></li>
                  <li><a href="index.php" class="text-white text-decoration-none mt-1">Collection</a></li>
                  <li><a href="#" class="text-white text-decoration-none mt-1">Contact</a></li>
                  <li><a href="#" class="text-white text-decoration-none mt-1">À propos</a></li>
              </ul>
          </div>
          <div class="col-md-3 mb-4">
              <h5>Suivez-nous</h5>
              <ul class="list-unstyled mt-3">
                  <li><a href="#" class="text-white text-decoration-none mt-1">Facebook</a></li>
                  <li><a href="#" class="text-white text-decoration-none mt-1">Instagram</a></li>
                  <li><a href="#" class="text-white text-decoration-none mt-1">YouTube</a></li>
                  <li><a href="#" class="text-white text-decoration-none mt-1">LinkedIn</a></li>
              </ul>
          </div>
      </div>
      <div class="row mt-3 text-center text-md-start">
          <div class="col-md-4 contact-info">
              <img src="" style="height: 20px; margin-right: 10px;"> 62, Avenue de la République, 77100 Meaux
          </div>
          <div class="col-md-4 contact-info">
              <img src="" style="height: 20px; margin-right: 10px;"> +07 06 45 05 56
          </div>
          <div class="col-md-4 contact-info">
              <img src=""  style="height: 20px; margin-right: 10px;"> beast@gmail.com
          </div>
      </div>
      <div class="text-center mt-5">
          <p>© 2024 BEAST - Tous droits réservés</p>
      </div>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
