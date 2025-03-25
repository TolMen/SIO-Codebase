<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Balises méta essentielles -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="mobile-web-app-capable" content="yes" />

    <!-- Informations SEO -->
    <meta name="keywords" content="Les Mystérieuses Cités d'Or, fansite, contact, suggestions, amélioration, support">
    <meta name="description" content="N'hésitez pas à me contacter pour proposer des idées, des améliorations, ou si vous avez besoin d'aide. Un projet SLAM réalisé dans le cadre du BTS SIO." />
    <meta name="author" content="TolMen Jy alias Jessy Frachisse" />

    <!-- Icône du site -->
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/flatCite.jpg" />

    <!-- Feuilles de style externes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <!-- Feuilles de style personnalisées -->
    <link rel="stylesheet" href="asset/css/baseStyle.css" />
    <link rel="stylesheet" href="asset/css/contactStyle.css" />

    <title>Galerie - Les mystérieuses cités d'or</title>
</head>

<body>

    <!-- Balise audio -->
    <audio autoplay loop>
        <source src="asset/media/theme2Contact.mp3" type="audio/mp3">
    </audio>

    <!-- Inclusion de la barre de navigation -->
    <?php include 'src/component/navbar.html'; ?>

    <!-- Zone du formulaire -->
    <main class="formContact">
        <div class="box">
            <!-- Formulaire -->
            <form method="POST" action="/Projet%20-%20FanSite/CodeSource/src/control/ContactControl/contactControl.php">
                <h2 class="titleForm">Contact</h2>

                <!-- Champs de saisie -->
                <div class="inputBox resetMargin">
                    <input
                        type="text"
                        name="firstName"
                        pattern="[A-Za-zÀ-ÿ\s\-]+"
                        maxlength="26"
                        title="Veuillez entrer uniquement des lettres"
                        autocomplete="off"
                        required />
                    <span>Prénom</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input
                        type="text"
                        name="name"
                        pattern="[A-Za-zÀ-ÿ\s\-]+"
                        maxlength="30"
                        title="Veuillez entrer uniquement des lettres"
                        autocomplete="off"
                        required />
                    <span>Nom</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input
                        type="email"
                        name="email"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                        maxlength="100"
                        title="Veuillez entrer une adresse mail valide, par exemple nom@example.com"
                        autocomplete="off"
                        required />
                    <span>Adresse E-Mail</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input
                        type="text"
                        name="message"
                        maxlength="1000"
                        autocomplete="off"
                        required />
                    <span>Message</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input
                        type="checkbox"
                        name="check"
                        id="check"
                        required />
                    <label for="check">J'autorise la collecte de mes informations.</label>
                </div>
                <!-- Fin des champs de saisie -->

                <input type="submit" name="envoi" value="Envoyer" />
            </form>
            <!-- Fin du formulaire -->
        </div>
    </main>
    <!-- Fin de la zone du formulaire -->

    <!-- Inclusion du pied de page -->
    <?php include 'src/component/footer.html'; ?>

    <!-- Scripts externes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>