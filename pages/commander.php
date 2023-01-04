

<?php 

echo("<h1> Veuillez saisir vos informations </h1>");

echo('<form ACTION="verification.php" METHOD="POST">');

echo('<label> Numéro de carte </label><input name="cb" type="text"  maxlength=16> <br><br>');
echo('<label> Nom sur la carte </label><input type="text" name="nom"  maxlength=50><br><br>');
echo('<label> Date d\'expiration </label> <input type="text" name="mois" placeholder=" Mois " maxlength=2 size="7px"> <input type="text" name="anne" placeholder=" Année  " maxlength=4 size="7px"><br><br>');
echo('<label> Code de sécurité (CVV) </labrl><input type="text" maxlength=3><br><br>');

echo('<input type="SUBMIT" value="Valider les informations"> ');
echo('</form>');    

?>

<input type="button" onclick="window.location.href = '../index.php';" value="Abandonner le paiement"/>

