<?php
    //On démarre la session
    session_start ();

    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
        //Variable pour la base de donnée
        $bdd= "alexandre-pascal_1486"; // Base de données
        $host= "mysql-alexandre-pascal.alwaysdata.net";
        $user= "305730_alex"; // Utilisateur
        $pass= "Salutatoi1@"; // mp

        //On se connecte à la base de données
        $link = mysqli_connect($host, $user, $pass, $bdd) or die("Impossible de se connecter à la base de données");

        //Requete sql
        $query1 = "SELECT * FROM informations";

        //Resultat de la requete
        $result = mysqli_query($link, $query1);

        echo('<head>');
        echo('<title>Administration du site</title>');
        echo('<link rel="stylesheet" href="./styleSupprimerCd.css"/>');
        echo('</head>');
        echo('<body>');
        echo('<header>');
        echo('<p id="header-entete"> CD_SHOP </p>');
        echo('<nav>');
        echo('<ul>');
        echo('<li><a href="pageConnexion.php">Administrateur</a></li>');
        echo('<li><a href="logout.php">Deconnexion</a></li>');
        echo('</ul>');
        echo('</nav>');
        echo('<h1>Suppression du CD</h1>');
        echo('</header>');
        echo('<main>');
        //Parcours des résultats
        while ($data = mysqli_fetch_assoc($result)) {
            //on affiche les informations de lenregistrement en cours;
            echo("<div id='cd'>");
            $nom = $data['nom'];
            $auteur = $data['auteur'];
            $genre = $data['genre'];

            echo("<h2>" . $nom . "</h2>");
            echo($auteur . "<br/><br/>");
            echo($genre . "<br/>");

            //Supression du cd en base de données
            echo('<form action="supressionCd.php" method="post">');
            echo("<input type='hidden' name='nom' value='$nom'>");
            echo("<input type='submit' value='Supprimer'>");
            echo("</form>");

            echo('</div>');
        };
        echo('</main>');
        echo('</body>');
    } else {
        header('Location: pageConnexion.php');
    }

?>