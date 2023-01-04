<?php

        //Accées à la base de donnée
        $bdd= "cd"; // Base de données
        $host= "localhost";
        $user= "root"; // Utilisateur
        $pass= "root"; // mp

        //Connexion à la base de donnée
        $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

        //Requête SQL
        $query1 = "SELECT * FROM informations";

        //Résultat de la requête
        $result= mysqli_query($link,$query1); 

        //Creation de notre page
        echo('<head>');
            echo ('<link rel="stylesheet" href="style.css" />');
        echo('</head>');
            echo('<body>');
                echo ('<header>');
                    echo ('<p id="header-entete"> CD_SHOP </p>');
                    echo ('<nav>');
                        echo ('<ul>');
                            echo ('<li><a href="pages/pageConnexion.php">Administrateur</a></li>');
                            echo ('<li><a href="pages/panier.php">Panier</a></li>');
                        echo ('</ul>');
                    echo ('</nav>');
                echo ('</header>');

                echo ('<hr class="trait">');

                echo ('<main>');

                    echo('<section id="tableau">');

                    //Parcours des résultats pour pouvoir afficher les CD
                    while ($data = mysqli_fetch_assoc($result)) {
                        //on affiche les informations de lenregistrement en cours;
                        echo("<div id='cd'>");
                        $nom = $data['nom'];
                        $auteur = $data['auteur'];
                        $genre = $data['genre'];
                        $vignette = "./vignettes/" . $data['vignette'];
                        $prix = $data['prix'];

                        //Cliquez sur l'image permet d'accéder au détail du CD
                        echo("<a href='pages/zoom.php?nom=$nom&auteur=$auteur&genre=$genre&img=$vignette&prix=$prix'> <img src= $vignette /> </a>");
                        echo("<h2>" . $nom . "</h2>");
                        echo($auteur . "<br/><br/>");
                        echo($genre . "<br/>");

                        echo("</div>");
                    };

                    echo("</section>");

                echo ('</main>');

                echo ('<hr class="trait">');

                echo ('<footer>');
                    echo ('<section id="footer-head">');
                        echo ('<p>Copyright : Robin Alonzo - Alexandre Pascal - 2023</p>');
                        echo ('<p>Contact : ralonzo@univ-pau.fr - apascal03@univ-pau.fr</p>');
                    echo ('</section>');
                echo ('</footer>');
            echo('</body>');

?>
