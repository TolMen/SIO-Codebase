<!-- Inclusion des liens des images -->
<?php include 'src/component/imgList.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Balises méta essentielles -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes" />

    <!-- Informations SEO -->
    <meta name="keywords" content="FanArt, Les Mystérieuses Cités d'Or, galerie, art, fansite">
    <meta name="description" content="Visitez la galerie des FanArts sur Les mystérieuses cités d'or.
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
    <link rel="stylesheet" href="asset/css/bodyColorStyle.css" />
    <link rel="stylesheet" href="asset/css/galerieStyle.css">

    <title>Galerie - Les mystérieuses cités d'or</title>
</head>

<body>

    <!-- Balise audio -->
    <audio autoplay loop>
        <source src="asset/media/theme3Galerie.mp3" type="audio/mp3">
    </audio>

    <!-- Inclusion de la barre de navigation -->
    <?php include 'src/component/navbar.html'; ?>

    <!-- Section principale de la galerie -->
    <section class="container py-5">
        <!-- Titre de la galerie -->
        <h2 class="text-center">Galerie des images</h2>
        <p class="text-center mb-4">Cliquez sur les images pour les agrandir !</p>

        <!-- Grille des images -->
        <article class="row g-3">
            <?php foreach ($images as $index => $image): ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="gallery-item">
                        <!-- Image de la galerie -->
                        <img src="<?= htmlspecialchars($image) ?>" class="img-fluid gallery-img"
                            alt="FanArt <?= $index + 1 ?>" loading="lazy" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-bs-image="<?= htmlspecialchars($image) ?>">
                    </figure>
                </div>
            <?php endforeach; ?>
        </article>
    </section>

    <!-- Modal pour afficher l'image en taille réelle -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content gold-modal">
                <div class="modal-header">
                    <!-- Bouton de fermeture du modal -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: gold;"></button>
                </div>
                <div class="modal-body text-center">
                    <!-- Image affichée dans le modal -->
                    <img id="modalImage" src="" class="img-fluid" alt="Image agrandie affichée">
                </div>
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
    <script src="asset/js/galerieModal.js"></script>

</body>

</html>