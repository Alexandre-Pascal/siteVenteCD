<?php 

$nom = $_GET['nom'];
$auteur = $_GET['auteur'];
$genre = $_GET['genre'];
$vignette = $_GET['img'];
$prix = $_GET['prix'];


echo $nom; 

echo("<BR>");

echo $auteur; 

echo("<BR>");

echo $genre; 

echo("<BR>");

echo("<img src= $vignette />");

echo("<BR>");

echo($prix . " euros");

echo("<BR>");
echo("<BR>");

echo("<a href='panier.php?nom=$nom&prix=$prix&ajout=1'> Ajouter au panier </a>");
header("Location: panier.php");

?>