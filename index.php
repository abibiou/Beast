<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                <img src="./img/image 24.png" alt="Logo1" style="height: 30px; margin-right: 15px;">
            </a>
            <a href="Login.php">
            <img src="./img/image 25.png" alt="Logo2" style="height: 30px;">
            </a>
          </div>
        </div>
        <div class="mt-5"></div>
      </nav>
      
      
      
<body>

    <style>
    body {
    font-family: 'JetBrains Mono', monospace;
    }

    </style>



    <div class="container-fluid p-5">
        <div class="card mt-5" style=" border: none;">
            <img class="card-img-top" src="./img/noscollect.png" alt="">
            <div class="position-absolute top-50 start-0 translate-middle-y">
                <h1 class="mx-5" style="color: white;">Nos collections</h1>
                <p class="mx-5 mt-3" style="color: white;">Découvrez l'intégralité des produtis de Beast, son élégeance <br>et sa qualité
                ne peux que être attirant aux yeux de tous</p>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-3">
                <h1 class="card-title">NOS COLLECTIONS</h1>
                <hr>
                <h3 class="card-title">TAILLE</h3>
                <div class="taille mt-4" style="display: flex; justify-content: flex-start;  gap: 13px;">
                <p class="fs-4" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b;">S</p>
                <p class="fs-4" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b;">M</p>
                <p class="fs-4" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b;">L</p>
                <p class="fs-4" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b;">XL</p>
                <p class="fs-4" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b;">XXL</p>
                </div>
                <hr>
                <h3 class="card-title">TYPE</h3>
                <div class="type mt-4" style="display: flex; justify-content: flex-start;  gap: 10px;">
                <p class="fs-4" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b;">VESTE</p>
                <p class="fs-4" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b;">PANTALON</p>
            </div>

            <hr>

            <div class="lescouleurs">
                <h3 class="card-title">COULEUR</h3>
                <img class="rounded mt-4" src="./img/bleu.png" alt="" style="height: 60px; width: 56px;">
                <img class="rounded mt-4" src="./img/noir.png" alt="" style="height: 60px; width: 56px;">
                <img class="rounded mt-4" src="./img/vert.png" alt="" style="height: 60px; width: 56px;">
                
            </div>
            <div class="lesprix">
                <hr>
                <h3 class="card-title">PRIX</h3>
                <div class="mt-3" style="display: flex; flex-direction: column; align-items: flex-start; gap: 10px; ">
                    <p class="fs-4 mt-2" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b; margin: 0;">50 - 100 €</p>
                    <p class="fs-4 mt-2" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b; margin: 0;">100 - 200 €</p>
                    <p class="fs-4 mt-2" style="padding: 4px 10px; color: #d9d9d2; background-color: #58583b; margin: 0;">200 - 300 €</p>
            </div>
            </div>
        </div>


    <div class="col-md-3">
                <div class="card" style="margin: 5px; border: none;">
                <a href="produit.php?id=1" style="text-decoration: none; color: black;">
                <img class="card-img-top" src="./img/img1.png" alt="">
                 <div class="card-body">
                    <h4 class="card-title">VESTE BLEU BEAST</h4>
                    <h4 class="card-text mt-3">220€</h4>
                </div>
                </a>
                </div>
        </div>
            <div class="col-md-3">
                <div class="card" style="margin: 5px; border: none;" >
                <a href="produit.php?id=2" style="text-decoration: none; color: black;">
                    <img class="card-img-top" src="./img/img2.png">
                    <div class="card-body">
                        <h4 class="card-title">PANTALON VERT BEAST</h4>
                        <h4 class="card-text mt-3">90€</h4>
                    </div>
                </a>
                </div>
                </div>
            <div class="col-md-3">
                <div class="card" style="margin: 5px; border: none;">
                <a href="produit.php?id=3" style="text-decoration: none; color: black;">
                <img class="card-img-top" src="./img/img3.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">VESTE NOIR BEAST</h4>
                    <h4 class="card-text mt-3">180€</h4>
                </div>
                </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer py-4 mt-5" style="background-color: #58583B; color: white;">
  <div class="container">
      <div class="row text-center text-md-start">
          <div class="col-md-3 mb-4 footer-logo">
              <img src="./img/image 2.png" alt="" style="height: 120px;">
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
    <script src="./img/https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>        <script src="./img/https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
