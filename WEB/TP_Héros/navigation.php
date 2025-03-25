<?php

// Connexion a la BDD
$connex = new PDO('mysql:host=localhost; dbname=tphistoire; charset=utf8', 'root', '');

// Variable qui stock la valeur du parametre de l'URL
$idEnonce = $_GET['idEnonce'];

// Requete pour recup l'énoncé actuel
$getEnonceFirst = $connex->prepare(
    'SELECT text 
    FROM enonce
    WHERE id = ?'
);

// Requete pour recup les choix
$getChoices = $connex->prepare(
    'SELECT text, id_enonceCible 
    FROM choix 
    WHERE id_enonceSource = ?'
);


// Code qui execute et recup la valeur de la requete de l'enoncé
$getEnonceFirst->execute(array($idEnonce));
$enonceFirt = $getEnonceFirst->fetch();

// Code qui execute et recup la valeur de la requete des choix
$getChoices->execute(array($idEnonce));
$choices = $getChoices->fetchAll();

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Enonce First</title>
</head>

<body>

    <div class="container">
        <h1>
            <?php echo $enonceFirt['text']; ?>
        </h1>

        <div class="box">
            <?php
            foreach ($choices as $choice) {
                echo '<a href="navigation.php?idEnonce=' . $choice['id_enonceCible'] . '" class="button">';
                echo $choice['text'];
                echo '</a>';
            }
            if ($choices == NULL) {
                echo '<a href="index.php" class="button">The End</a>';
            }
            ?>
        </div>

    </div>

</body>

</html>