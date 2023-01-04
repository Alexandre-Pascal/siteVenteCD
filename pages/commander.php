

<?php 

echo('<head>');
    echo ('<link rel="stylesheet" href="styleCommander.css" />');
echo('</head>');
echo('<body>');
    echo ('<header>');
        echo ('<p id="header-entete"> CD_SHOP </p>');
        echo ('<nav>');
            echo ('<ul>');
                echo ('<li><a href="../index.php">Accueil</a></li>');
            echo ('</ul>');
        echo ('</nav>');
    echo ('</header>');

echo ('<hr class="trait">');

echo('<br><br>');

echo('<div id="informations">');

echo("<h1> Veuillez saisir vos informations </h1>");

echo('<br>');

echo('<form ACTION="verification.php" METHOD="POST">');

echo('<table>');

echo('<tr> <label> Numéro de carte </label><input name="cb" type="text"  maxlength=16> <br><br> </tr>');
echo('<tr> <label> Nom sur la carte </label><input type="text" name="nom"  maxlength=50><br><br> </tr>');
echo('<tr> <label> Date d\'expiration </label> <input type="text" name="mois" placeholder=" Mois " maxlength=2 size="7px"> <input type="text" name="anne" placeholder=" Année  " maxlength=4 size="7px"><br><br> </tr>');
echo('<tr> <label> Code de sécurité (CVV) </labrl><input name="cvv" type="text" maxlength=3><br><br> </tr>');

echo('<input type="SUBMIT" value="Valider les informations"> ');
echo('</form>'); 

echo('<br><br>');

echo('</body>');

echo('</div>');

?>