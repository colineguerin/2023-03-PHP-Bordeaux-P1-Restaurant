<?php ?>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
    <!---------------------- barre de navigation ------------------------------->
    <nav class="navigation-globale">
        <img class="bateau" src="../Assets/Images/bateau%20ocre.png" alt="bateau">
        <img class="logo" src="../Assets/Images/logotexte.png" alt="LOGO">
        <ul>
            <li class="concept"><a href="#">Concept</a></li>
            <li class="carte"><a href="#">Carte</a></li>
            <li class="reserver"><a href="#">Réserver</a></li>
            <li class="infos"><a href="#contact">Infos</a></li>
        </ul>
    </nav>
    <!---------------------- photo d'accueil et titre ------------------------------->
    <div class="accueil">
        <h1>Mille Sabords</h1>
        <h2>Fruits de mers & poissons frais</h2>
    </div>
    <!---------------------- séparation avec noeud marin ------------------------------->
    <img class="noeud" src="../Assets/Images/noeud.png" alt="noeud">
    <!---------------------- fin du header navigation ------------------------------->
    </body>
    </html>
    <!---------------------- script ------------------------------->
    <script type="text/javascript">

        window.addEventListener('scroll', () => {
            let bat = document.querySelector(".bateau");
            let positionBateau = 0;
            let bottomNav = document.querySelector(".navigation-globale").getBoundingClientRect().bottom
            let hmin = bottomNav * 1.5;

            // on définit le rapport entre la position de la section actuelle et initiale
            let positionSectionActuelle = document.querySelector(".noeud").getBoundingClientRect().y;
            let hauteurActuelle = positionSectionActuelle - bottomNav;
            console.log(hauteurActuelle);

            let positionSectionInitiale = window.innerHeight
            let hauteurInitiale = positionSectionInitiale - bottomNav;

            let rapportHauteur = hauteurActuelle / hauteurInitiale;

            // on définit la position à atteindre pour le bâteau
            let positionMenuDroit = document.querySelector(".concept").getBoundingClientRect().right;
            let positionMenuGauche = document.querySelector(".concept").getBoundingClientRect().left;
            let positionMenu = (positionMenuDroit - positionMenuGauche) / 2;

            // on définit la longueur de la section que va parcourir le bateau
            let positionBateauInitial = document.querySelector(".logo").getBoundingClientRect().right;
            let positionBateauMarge = positionBateauInitial * 1.1;

            //on définit le rapport en largeur
            let longueuraParcourir = positionMenu - positionBateauMarge;
            let rapportLongueur = longueuraParcourir/(window.innerWidth);

            positionBateau = (1 / (rapportHauteur * longueuraParcourir))*rapportLongueur;
            bat.style.transform='translateX(positionBateau)';
        })
    </script>

<?php
//  const bat = document.querySelector(".bateau")
//    window.addEventListener('scroll', () => {
//        if (window.screenY>3){
//            bat.classList.add('scroll');
//        }
//    }