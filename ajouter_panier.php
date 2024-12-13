<?php
session_start();

if (isset($_GET['id'])) {
    $id = (int)$_GET['id']; 

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }
    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id]++; 
    } else {
        $_SESSION['panier'][$id] = 1; 
    }

    header("Location: pagepanier.php");
    exit;
} else {
    die("Aucun produit sélectionné !");
}
