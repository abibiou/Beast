<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'con_dbb.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($produit) {
        $nom = htmlspecialchars($produit['name']);
        $prix = htmlspecialchars($produit['price']);
        $image = htmlspecialchars($produit['img']);
    } else {
        die("Produit introuvable !");
    }
} else {
    die("Aucun ID de produit spécifié !");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($nom); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'JetBrains Mono', monospace;
        }
    </style>
</head>
<header>
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
                <img src="./img/image 2.png" alt="Logo" style="height: 60px;">
            </a>
            <div class="d-flex align-items-center" style="position: absolute; right: 15px;">
                <a href="pagepanier.php">
                    <img src="./img/image 24.png" alt="Panier" style="height: 30px; margin-right: 15px;">
                </a>
                <a href="Login.php">
                <img src="./img/image 25.png" alt="Logo2" style="height: 30px;">
            </a>
            </div>
        </div>
        <div class="mt-5"></div>
    </nav>
</header>



<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-7 col-lg-7 mt-5">
                <img src="img/<?php echo htmlspecialchars($image); ?>" style="height: 500px; margin-left: 210px;">
                <div style="display: flex; justify-content: center; gap: 1px; margin-left: 80px;">
                </div>
            </div>
            <div class="col-md-5 col-lg-5 mt-5">
                <h3><?php echo htmlspecialchars($nom); ?></h3>
                <p class="mt-4">Couleur : <?php echo htmlspecialchars($produit['color']); ?></p>
                <h3 class="mt-4"><?php echo htmlspecialchars($prix); ?>€</h3>
                <a href="ajouter_panier.php?id=<?= $produit['id'] ?>" class="id_product">
                <button type="button" class="btn btn-dark mt-3 ajtpanier">AJOUTER AU PANIER</button>
                </a>
                <p class="fw-semibold mt-4">Description</p>
                <p><?php echo htmlspecialchars($produit['description']); ?></p>
                <p class="fw-semibold mt-4">Matière</p>
                <p><?php echo htmlspecialchars($produit['material']); ?></p>
                <p class="fw-semibold mt-4">Fabrication</p>
                <p><?php echo htmlspecialchars($produit['fabrication']); ?></p>
                <hr>
            </div>
        </div>
    </div>




    <footer class="footer py-4 mt-5" style="background-color: #58583B; color: white;">
  <div class="container">
      <div class="row text-center text-md-start">
          <div class="col-md-3 mb-4 footer-logo">
              <img src="img/image 2.png" alt="" style="height: 120px;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

