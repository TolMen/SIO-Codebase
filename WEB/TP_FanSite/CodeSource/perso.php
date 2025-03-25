<?php include 'src/control/PersoControl/persoControl.php'; ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Balises méta essentielles -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="mobile-web-app-capable" content="yes" />

    <!-- Informations SEO -->
    <meta name="keywords" content="Mystérieuses Cités d'Or, série, résumés, personnages, aventure">
    <meta name="description" content="Découvrez 'Les Mystérieuses Cités d'Or' à travers ses personnages diverses et poignant. 
    Un projet SLAM réalisé dans le cadre du BTS SIO." />
    <meta name="author" content="TolMen Jy alias Jessy Frachisse" />

    <!-- Icône du site -->
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/flatCite.jpg" />

    <!-- Feuilles de style externes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <!-- Feuilles de style personnalisées -->
    <link rel="stylesheet" href="asset/css/baseStyle.css" />
    <link rel="stylesheet" href="asset/css/bodyColorStyle.css">
    <link rel="stylesheet" href="asset/css/persoStyle.css" />

    <title>Personnage - Les mystérieuses cités d'or</title>
</head>

<body>

    <!-- Balise audio -->
    <audio autoplay loop>
        <source src="asset/media/theme5Perso.mp3" type="audio/mp3">
    </audio>

    <!-- Inclusion de la barre de navigation -->
    <?php include 'src/component/navbar.html' ?>

    <!-- Section principale -->
    <main class="section">
        <div class="box">
            <!-- Titre de la galerie -->
            <h2 class="text-center">Liste des personnages</h2>
            <p class="text-center mb-4">Cliquez sur les personnages pour plus de détails !</p>

            <div class="menu-card">
                <?php foreach ($persos as $perso): ?>
                    <div class="card">
                        <!-- Image du personnage avec l'attribut data-id pour lier à la modale -->
                        <img src="<?= htmlspecialchars($perso['image_url']) ?>" alt="Photo de : <?= htmlspecialchars($perso['name']) ?>"
                            class="perso-image"
                            data-name="<?= htmlspecialchars($perso['name']) ?>"
                            data-description="<?= htmlspecialchars($perso['description']) ?>"
                            data-bs-toggle="modal" data-bs-target="#persoModal">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <!-- Modal pour afficher les détails des personnages -->
    <div class="modal fade" id="persoModal" tabindex="-1" aria-labelledby="persoModalName" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content gold-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="persoModalName"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: gold;"></button>
                </div>
                <div class="modal-body" id="persoModalDescription"></div>
            </div>
        </div>
    </div>

    <!-- Inclusion du pied de page -->
    <?php include 'src/component/footer.html' ?>

    <!-- Scripts externes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Script personnalisé -->
    <script src="asset/js/persoModal.js"></script>

</body>

</html>