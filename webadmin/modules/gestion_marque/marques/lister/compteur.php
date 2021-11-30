<?php
$messagesParPage = 8; //Nous allons afficher 5 messages par page.
include("modules/connexiondb/connexiondb.php");
//Une connexion SQL doit être ouverte avant cette ligne...
$sql = "SELECT * FROM marque";
try {

    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
$count = $stmt->rowCount(); //On compte les lignes.
$total = $count['total']; //On récupère le total pour le placer dans la variable $total.

//Nous allons maintenant compter le nombre de pages.
$nombreDePages = ceil($count / $messagesParPage);

if (isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
    $pageActuelle = intval($_GET['page']);

    if ($pageActuelle > $nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
    {
        $pageActuelle = $nombreDePages;
    }
} else // Sinon
{
    $pageActuelle = 1; // La page actuelle est la n°1    
}

$premiereEntree = ($pageActuelle - 1) * $messagesParPage; // On calcul la première entrée à lire
