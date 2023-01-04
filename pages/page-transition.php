<?php 
session_start();

include_once("fonctions-panier.php");

creationPanier();
ajouterArticle($_GET['nom'],$_GET['prix']);

?>

<input type="button" onclick="window.location.href = 'panier.php';" value="Accéder au panier"/>

<input type="button" onclick="window.location.href = '../index.php';" value="Revenir a l'accueil"/>
