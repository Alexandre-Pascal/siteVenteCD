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

echo("<img src= ../vignettes/$vignette />");

echo("<BR>");

echo($prix . " euros");

echo("<BR>");
echo("<BR>");

echo("<a href='page-transition.php?nom=$nom&prix=$prix'> Ajouter au panier </a>");

?>