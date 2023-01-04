<?php 
session_start();

$cb = $_POST["cb"] ; 
$mois = $_POST["mois"] ; 
$anne = $_POST["anne"] ; 
$cvv = $_POST["cvv"] ; 
$nom = $_POST["nom"];

//Si la zone de texte contient pour les numéros de la carte contient bien 16 chiffres, que la carte expire au moins 3 mois après la commande passée et année supérieure ou égale année actuelle OU année strictement supérieure à l'année,
//que les zones de textes pour le nom complet sur la carte, le cvv et l'annee d'expiration est renseigné, alors le paiement est validé
if (strlen($cb) == 16 && $cb[strlen($cb)-1] == $cb[0] && ((($mois > (date("m")+3)) && $anne >= date("Y")) || $anne > date("Y"))  && empty($cvv) == false && empty($nom) == false && empty($anne) == false ){
echo '<body onLoad="alert(\'Informations correctes ! Merci, votre commande a bien été passée \')">';
session_destroy();

echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
}

else{
echo '<body onLoad="alert(\'Carte invalide\')">';
echo '<meta http-equiv="refresh" content="0;URL=commander.php">';
}

?>

