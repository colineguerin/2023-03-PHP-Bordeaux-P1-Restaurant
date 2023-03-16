<?php ?>

<section class="ms-menu">

    <h2 class="ms-title-menu-section"><span class="ms-h2-small">La </span><span class="ms-h2-big"> Carte</span></h2>

    <div class="ms-menu-wrapper">
        <button class="ms-menu-previous"></button>
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
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Soupe de poisson, croutons au sarrasin, ail, persillade et citron caviar</p>
                <p class="ms-dish-price">8 €</p>
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Assiette de coquillages et son assortiment de sauces maison</p>
                <p class="ms-dish-price">14 €</p>
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Mousse de truite gravlax, betterave fumée et pickles de graines de moutarde</p>
                <p class="ms-dish-price">11 €</p>
            </div>
            <div class="ms-menu-type" id="mainsContent">
                <p class="ms-dish-label">Filet de brochet sauce yuzu, confit de tomates à la provençale, pickles
                    d'oignons grillés</p>
                <p class="ms-dish-price">21 €</p>
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Millefeuilles d'écrevisses et d'anguille fumée, sauce cognac, pommes vertes et
                    wasabi</p>
                <p class="ms-dish-price">24 €</p>
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Truite farcie en robe de courgette, beurre blanc, mousseline de panais et
                    pousses d'épinards</p>
                <p class="ms-dish-price">23 €</p>
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Truite farcie en robe de courgette, beurre blanc, mousseline de panais et
                    pousses d'épinards</p>
                <p class="ms-dish-price">23 €</p>
            </div>
            <div class="ms-menu-type" id="dessertsContent">
                <p class="ms-dish-label">Sélection de fromages du chef</p>
                <p class="ms-dish-price">10 €</p>
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Fraîcheur de fruits rouges au sureau, glace basilic et copeaux de chocolat noir</p>
                <p class="ms-dish-price">9 €</p>
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Sablé breton, crémeux gingembre et éclats de meringue aromatisée au citron vert</p>
                <p class="ms-dish-price">9 €</p>
                <p class="ms-dish-transition">____</p>
                <p class="ms-dish-label">Sablé breton, crémeux gingembre et éclats de meringue aromatisée au citron vert</p>
                <p class="ms-dish-price">9 €</p>
            </div>
        </div>
    </div>
    <button class="ms-menu-next"></button>
    <div class="ms-menu-below">
        <p>noeud</p>
    </div>
</section>

<script>
    /*
    function openSection(section, element, color) {
        // Hide all elements ms-menu-type by default
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("ms-menu-type");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display= "none";
        }
        // Remove background color of all tablinks
        tablinks = document.getElementsByClassName("ms-nav-menu-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        // Display the selected menu section
        document.getElementById(section).style.display = "block";
        element.style.backgroundColor = color;
        // Start with default element
        document.getElementById("defaultOpen").click();
    }
    */

    let i = 1;
    let startersItem = document.querySelector("#startersItem");
    let mainsItem = document.querySelector("#mainsItem");
    let dessertsItem = document.querySelector("#dessertsItem");
    let startersContent = document.querySelector("#startersContent");
    let mainsContent = document.querySelector("#mainsContent");
    let dessertsContent = document.querySelector("#dessertsContent");

    function openStarters() {
        startersItem.style.backgroundColor = "#E1DBCA";
        startersItem.style.color = "#102839";
        mainsItem.style.backgroundColor = "#102839";
        mainsItem.style.color = "#E1DBCA";
        dessertsItem.style.backgroundColor = "#102839";
        dessertsItem.style.color = "#E1DBCA";
        startersContent.style.display = "block";
        mainsContent.style.display = "none";
        dessertsContent.style.display = "none";
    }

    function openMains() {
        mainsItem.style.backgroundColor = "#E1DBCA";
        mainsItem.style.color = "#102839";
        startersItem.style.backgroundColor = "#102839";
        startersItem.style.color = "#E1DBCA";
        dessertsItem.style.backgroundColor = "#102839";
        dessertsItem.style.color = "#E1DBCA";
        mainsContent.style.display = "block";
        startersContent.style.display = "none";
        dessertsContent.style.display = "none";
    }

    function openDesserts() {
        dessertsItem.style.backgroundColor = "#E1DBCA";
        dessertsItem.style.color = "#102839";
        startersItem.style.backgroundColor = "#102839";
        startersItem.style.color = "#E1DBCA";
        mainsItem.style.backgroundColor = "#102839";
        mainsItem.style.color = "#E1DBCA";
        dessertsContent.style.display = "block";
        startersContent.style.display = "none";
        mainsContent.style.display = "none";
    }





</script>
