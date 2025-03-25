/*
Ce script permet de changer l'image dans la modal lorsque l'on clique sur une image de la galerie. 
Lors du clic, la source de l'image de la modal est mise à jour avec l'attribut `data-bs-image` de l'image cliquée.
*/

document.addEventListener("DOMContentLoaded", () => {
    const galleryImages = document.querySelectorAll(".gallery-img");
    const modalImage = document.getElementById("modalImage");

    galleryImages.forEach((img) => {
        img.addEventListener("click", () => {
            modalImage.src = img.getAttribute("data-bs-image");
        });
    });
});
