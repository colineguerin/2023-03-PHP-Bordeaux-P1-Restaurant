<?php ?>

<section class="ms-menu transitioned fade-left">

    <h2 class="ms-menu-section-title"><span class="ms-h2-small">La</span><span class="ms-h2-big"> Carte</span></h2>
    <div class="ms-menu-wrapper">
        <div class="ms-button-wrapper">
            <button id="previousButton" onclick="openPrevious()"></button>
        </div>
        <div class="menu-container">
            <nav class="ms-menu-nav">
                <ul class="ms-menu-list">
                    <li class="ms-menu-items" onclick="openStarters()" id="startersItem">Entrées</li>
                    <li class="ms-menu-items" onclick="openMains()" id="mainsItem">Plats</li>
                    <li class="ms-menu-items" onclick="openDesserts()" id="dessertsItem">Desserts</li>
                </ul>
            </nav>
            <div class="ms-menu-content">
                <div class="ms-menu-type" id="startersContent">
                <p class="ms-dish-label">Mousse de truite gravlax, betterave fumée et pickles de graines de moutarde</p>
                <p class="ms-dish-price">11 €</p>
                <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Soupe de poisson, croutons au sarrasin, ail, persillade et citron caviar</p>
                <p class="ms-dish-price">8 €</p>
                    <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Assiette de coquillages et son assortiment de sauces maison</p>
                <p class="ms-dish-price">14 €</p>
                    <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Aumonière au saumon et poireau, toasts croustillants au chèvre frais</p>
                <p class="ms-dish-price">8 €</p>
            </div>
                <div class="ms-menu-type" id="mainsContent">
                <p class="ms-dish-label">Filet de brochet sauce yuzu, confit de tomates à la provençale, pickles
                    d'oignons grillés</p>
                <p class="ms-dish-price">21 €</p>
                    <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Millefeuilles d'écrevisses et d'anguille fumée, sauce cognac, pommes vertes et
                    wasabi</p>
                <p class="ms-dish-price">24 €</p>
                    <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Truite farcie en robe de courgette, beurre blanc, mousseline de panais et
                    pousses d'épinards</p>
                <p class="ms-dish-price">23 €</p>
                    <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Ceviche de bar de ligne sablé au parmesan et poêlée de légumes printaniers à l'huile d'olive</p>
                <p class="ms-dish-price">23 €</p>
            </div>
                <div class="ms-menu-type" id="dessertsContent">
                <p class="ms-dish-label">Sélection de fromages du chef</p>
                <p class="ms-dish-price">10 €</p>
                    <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Fraîcheur de fruits rouges au sureau, glace basilic et copeaux de chocolat noir</p>
                <p class="ms-dish-price">9 €</p>
                    <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Sablé breton, crémeux gingembre et éclats de meringue aromatisée au citron vert</p>
                <p class="ms-dish-price">8 €</p>
                    <img class="ms-dish-transition" src="../Assets/Images/noeud.png" alt="noeud">
                <p class="ms-dish-label">Sphère aux trois chocolats, espuma de crème anglaise et amandes concassées</p>
                <p class="ms-dish-price">10 €</p>
            </div>
            </div>
        </div>
        <div class="ms-button-wrapper">
            <button id="nextButton" onclick="openNext()"></button>
        </div>
    </div>
    <div id="ancreBooking"></div>
    <div class="ms-menu-below">
        <img src="../Assets/Images/noeud.png" class="ms-knot-transition" alt="image d'un noeud">
    </div>
</section>
