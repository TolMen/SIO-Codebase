<!-- Inclusion du controleurs des histoires -->
<?php require_once 'src/control/HistoireControl/histoireControl.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Balises méta essentielles -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="mobile-web-app-capable" content="yes" />

    <!-- Informations SEO -->
    <meta name="keywords" content="Mystérieuses Cités d'Or, série, résumés, histoire, inca, maya, condor">
    <meta name="description" content="Découvrez l'histoire de la saison 1 dîte d'origine sur 'Les Mystérieuses Cités d'Or' par des résumés et des analyses. 
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
    <link rel="stylesheet" href="asset/css/histoireStyle.css" />

    <title>Histoire - Les mystérieuses cités d'or</title>
</head>

<body>

    <!-- Balise audio -->
    <audio autoplay loop>
        <source src="asset/media/theme4Histoire.mp3" type="audio/mp3">
    </audio>

    <!-- Inclusion de la barre de navigation -->
    <?php include 'src/component/navbar.html' ?>

    <header>
        <!-- Titre de la galerie -->
        <h2 class="text-center">Histoire</h2>
        <img src="asset/img/carte.png" alt="Carte du voyage des enfants">
    </header>

    <main class="timeline">
        <div class="container">
            <?php
            $count = 0;
            foreach ($histoires as $histoire) {
                $fadeClass = ($count % 2 === 0) ? 'js--fadeInLeft' : 'js--fadeInRight';
                $count++;
            ?>
                <div class="timeline-item">
                    <div class="boule"></div>
                    <div class="timeline-content <?= $fadeClass; ?>">
                        <h2><?= htmlspecialchars($histoire['title']); ?></h2>
                        <p><?= nl2br($histoire['content']); ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>

    <!-- Inclusion du pied de page -->
    <?php include 'src/component/footer.html' ?>

    <!-- Scripts externes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>

    <!-- Script personnalisé -->
    <script src="asset/js/histoireTimeline.js"></script>
</body>

</html>