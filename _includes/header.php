<?php ?>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <section class="header" id="ancreLogo">
    <!---------------------- barre de navigation ------------------------------->
    <nav class="ms-navbar">
        <a href="#ancreLogo"><img class="ms-logo" src="../Assets/Images/logotexte.png" alt="logo"></a>
        <a class="ms-menu-button" onclick="toggleNav()"></a>
        <ul>
            <li class="ms-nav-concept"><a class="surlign" href="#ancreCards"">Concept</a></li>
            <li class="ms-nav-carte"><a class="surlign" href="#ancreMenu">Carte</a></li>
            <li class="ms-nav-reserver"><a class="surlign" href="#ancreBooking">Réserver</a></li>
            <li class="ms-nav-contact"><a class="surlign" href="#ancreContact">Contact</a></li>
        </ul>
        <a class="ms-bookingHidden">Mille Sabords</a>
        <a href="#ancreLogo"><img class="ms-logoHidden" src="../Assets/Images/logotexte.png" alt="logo"></a>
    </nav>
        <aside class="ms-menu-toggle">
            <ul>
                <li class="ms-nav-concept"><a class="surlign" href="#ancreCards"">Concept</a></li>
                <li class="ms-nav-carte"><a class="surlign" href="#ancreMenu">Carte</a></li>
                <li class="ms-nav-reserver"><a class="surlign" href="#ancreBooking">Réserver</a></li>
                <li class="ms-nav-contact"><a class="surlign" href="#ancreContact">Contact</a></li>
            </ul>
            <div>05 57 05 05 57</div>
        </aside>
    <!---------------------- animation du bâteau  ------------------------------->
    <div class="ms-boatWidthTotal">
        <div class="ms-boatWidth"></div>
        <img class="ms-boat" src="../Assets/Images/bateau%20ocre.png" alt="bateau">
    </div>
    <!---------------------- photo d'accueil et titre ------------------------------->
    <div class="accueil">
        <h1 class="titre">Mille Sabords</h1>
        <h1 class="titreHidden">Un voyage culinaire</h1>
        <h2 class="sousTitre"> Fruits de mers & poissons frais</h2>
    </div>
    <!---------------------- séparation avec noeud marin ------------------------------->
    <img class="noeud" src="../Assets/Images/noeud.png" alt="noeud">
    <!---------------------- fin du header navigation ------------------------------->
        <div id="ancreCards"></div>
    </section>
    </body>
    </html>
    <!---------------------- script ------------------------------->
