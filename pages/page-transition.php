<?php 
session_start();

include_once("fonctions-panier.php");

creationPanier();
ajouterArticle($_GET['nom'],$_GET['prix']);
header('Location: panier.php');

?>
