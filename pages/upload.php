<?php
//On test si les variables sont définies*
if (isset($_POST['cd']) && isset($_POST['artiste']) && isset($_POST['genre']) && is_uploaded_file($_FILES['vignette']['tmp_name'])) {
    //On se connecte à la base de données
    $bdd= "cd"; // Base de données
    $host= "localhost";
    $user= "root"; // Utilisateur
    $pass= "root"; // mp
    $nomtable= "informations"; /* Connection bdd */
    //On récupère les valeurs des variables
    $cd = $_POST['cd'];
    $artiste = $_POST['artiste'];
    $genre = $_POST['genre'];
    $vignette = $_FILES['vignette']['name'];
    $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");
    //On crée la requête SQL
    $sql = "INSERT INTO informations (nom, auteur, genre, vignette) VALUES ('$cd', '$artiste', '$genre', '$vignette')";
    //On envoie la requête
    mysqli_query($link,$sql) or die('Erreur SQL !'.$sql.'<br />'.mysqli_error($link));
    //On upload le fichier
    move_uploaded_file($_FILES['vignette']['tmp_name'], '../vignettes/'.$vignette);
    //On ferme la connexion
    mysqli_close($link);
    //On revient à la page d'administration

    header('Location: ../index.php');
}
else
{
    header('Location: ./administration.php');
}
?>