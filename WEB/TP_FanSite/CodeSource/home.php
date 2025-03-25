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
    <meta name="description" content="Découvrez 'Les Mystérieuses Cités d'Or' à travers un site dédié : résumés, analyses et exploration de cet univers fascinant qui a marqué des générations. 
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
    <link rel="stylesheet" href="asset/css/homeStyle.css" />

    <title>Fansite - Les mystérieuses cités d'or</title>
</head>

<body>

    <!-- Balise audio -->
    <audio autoplay loop>
        <source src="asset/media/theme1Home.mp3" type="audio/mp3">
    </audio>

    <!-- Inclusion de la barre de navigation -->
    <?php include 'src/component/navbar.html' ?>

    <!-- En-tête de page -->
    <main>
        <!-- Section principale de l'en-tête -->
        <div class="top-page">
            <h1>Bienvenue dans l'univers des Mystérieuses Cités d'Or</h1>
            <p>Plongez dans l'aventure d'origine avec nos résumés, personnages et bien plus encore !</p>
        </div>

        <!-- Section des choix -->
        <section class="choix">
            <section class="boite">
                <!-- Cartes de navigation -->
                <section class="boite-carte">
                    <a href="histoire.php">
                        <article class="carte">
                            <span>01</span>
                            <h2>Histoire</h2>
                        </article>
                    </a>
                    <a href="perso.php">
                        <article class="carte">
                            <span>02</span>
                            <h2>Personnages</h2>
                        </article>
                    </a>
                    <a href="galerie.php">
                        <article class="carte">
                            <span>03</span>
                            <h2>Galerie</h2>
                        </article>
                    </a>
                </section>
            </section>
        </section>
    </main>

    <!-- Inclusion du pied de page -->
    <?php include 'src/component/footer.html' ?>

    <!-- Liens vers les scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>