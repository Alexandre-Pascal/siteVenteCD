<?php 

$cb = $_POST["cb"] ; 
$mois = $_POST["mois"] ; 
$anne = $_POST["anne"] ; 

if (strlen($cb) == 16 && $cb[strlen($cb)-1] == $cb[0] && $mois > (date("m")+3)){
echo '<body onLoad="alert(\'Informations correctes ! Merci, votre commande a bien été passée \')">';
echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
}

else{
echo '<body onLoad="alert(\'Carte invalide\')">';
echo '<meta http-equiv="refresh" content="0;URL=commander.php">';
}

?>