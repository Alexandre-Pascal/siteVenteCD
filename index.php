<?php
    require_once("fonctions-panier.php");

        $ajout = 0;

        $bdd= "cd"; // Base de données
        $host= "localhost";
        $user= "root"; // Utilisateur
        $pass= "root"; // mp
        $nomtable= "informations"; /* Connection bdd */

        $link=mysqli_connect("localhost",$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

        $query1 = "SELECT * FROM informations";

        $result= mysqli_query($link,$query1); 

        echo('<head>');
            echo ('<link rel="stylesheet" href="style.css" />');
        echo('</head>');
            echo('<body>');
                echo ('<header>');
                    echo ('<p id="header-entete"> CD_SHOP </p>');
                    echo ('<nav>');
                        echo ('<ul>');
                            echo ('<li><a href="panier.php">Panier</a></li>');
                        echo ('</ul>');
                    echo ('</nav>');
                echo ('</header>');

                echo ('<main>');

        echo('<section id="tableau">');

        while ($data = mysqli_fetch_assoc($result)) {
            //on affiche les informations de lenregistrement en cours;
            echo("<div id='cd'>");
                $nom = $data['nom'];
                $auteur = $data['auteur'];
                $genre = $data['genre'];
                $vignette = "./vignettes/" . $data['vignette'];
                $prix = $data['prix'];

                echo("<a href='zoom.php?nom=$nom&auteur=$auteur&genre=$genre&img=$vignette&prix=$prix'> <img src= $vignette /> </a>");
                echo ("<h2>" . $nom . "</h2>");
                echo ($auteur . "<br/><br/>");
                echo ($genre . "<br/>");

            echo("</div>");

        }

        echo("</section>");

?>

<input type="button" onclick="window.location.href = 'panier.php';" value="Accéder au panier"/>
