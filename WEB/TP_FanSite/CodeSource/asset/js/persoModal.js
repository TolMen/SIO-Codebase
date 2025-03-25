/* 
Lorsqu'une image avec la classe `.perso-image` est cliquée, 
ce script récupère les données du personnage et met à jour 
le contenu de la modale avec le nom et la description.
*/


document.querySelectorAll(".perso-image").forEach((image) => {
    image.addEventListener("click", function () {
        // Récupérer les données du personnage
        const name = image.getAttribute("data-name");
        const description = image.getAttribute("data-description");

        // Mettre à jour le contenu de la modale
        document.getElementById("persoModalName").textContent = name;

        // Utiliser innerHTML pour permettre l'interprétation du HTML
        document.getElementById("persoModalDescription").innerHTML =
            description;
    });
});
