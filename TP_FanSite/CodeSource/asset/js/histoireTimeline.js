/*
Ce script utilise ScrollReveal pour animer les éléments avec les classes `js--fadeInLeft` et `js--fadeInRight`. 
Sur les écrans plus petits que 768px, la classe `js--fadeInLeft` est remplacée par `js--fadeInRight`. 
Les options d'animation (distance, easing, durée) sont partagées pour éviter la redondance.
*/

$(function () {
    window.sr = ScrollReveal();
    const revealOptions = {
        distance: "300px",
        easing: "ease-in-out",
        duration: 800,
    };

    if ($(window).width() < 768) {
        $(".timeline-content").toggleClass("js--fadeInLeft js--fadeInRight");
        sr.reveal(".js--fadeInRight", { origin: "right", ...revealOptions });
    } else {
        sr.reveal(".js--fadeInLeft", { origin: "left", ...revealOptions });
        sr.reveal(".js--fadeInRight", { origin: "right", ...revealOptions });
    }

    sr.reveal(".js--fadeInLeft", { origin: "left", ...revealOptions });
    sr.reveal(".js--fadeInRight", { origin: "right", ...revealOptions });
});
