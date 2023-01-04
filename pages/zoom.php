<?php 

    $nom = $_GET['nom'];
    $auteur = $_GET['auteur'];
    $genre = $_GET['genre'];
    $vignette = $_GET['img'];
    $prix = $_GET['prix'];

    echo ('<head>');
        echo ('<link rel="stylesheet" href="./styleZoom.css"/>');
    echo ('</head>');
    echo ('<body>');
        echo ('<header>');
            echo ('<p id="header-entete"> CD_SHOP </p>');
            echo ('<nav>');
                echo ('<ul>');
                    echo ('<li><a href="panier.php">Pannier</a></li>');
                echo ('</ul>');
            echo ('</nav>');
            echo ('<h1>' . $nom . '</h1>');
        echo ('</header>');
        echo ('<main>');
            echo ('<section id="image">');
                echo("<img src= ../$vignette />");
            echo ('</section>');
            echo ('<section id="description">');
                echo ('<p> Auteur : ' . $auteur . '</p>');
                echo ('<p> Genre : ' . $genre . '</p>');
                echo ('<p> Prix : ' . $prix . '€</p>');
                //Bouton ajouter au panier
                echo ("<form action='page-transition.php?nom=$nom&prix=$prix' method='post'>");
                    echo ('<input type="submit" value="Ajouter au panier">');
                echo ('</form>');
            echo ('</section>');
        echo ('</main>');
    echo ('</body>');

?>