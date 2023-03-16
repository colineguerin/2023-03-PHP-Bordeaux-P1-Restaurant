<?php
//fichier php du head
include "_includes/head.php"
?> <h1>Test</h1>
<?php
//fichier php de la page accueil avec barre de navigation et photo
include "_includes/header.php";

//fichier php des cards avec (philosophie + photo) et (cuisine + photo)
include "_includes/cards.php";

//fichier php du carrousel des photos de cuisine
include "_includes/carrousel.php";

//fichier php du carrousel du menu
include "_includes/menu.php";

//fichier php du formulaire de contact
include "_includes/form.php";

//fichier php de la partie contact avec map + téléphone + réseaux
include "_includes/contact.php";

//fichier php du footer avec liens obligatoires
include "_includes/footer.php"

?>

<link rel="stylesheet" href="Assets/CSS/main.css">

    <script type="text/javascript">

        window.addEventListener('scroll', () => {
            let positionSectionActuelleCards = document.querySelector(".ms-cards").getBoundingClientRect().y;
            let positionSectionActuelleMenu = document.querySelector(".ms-menu").getBoundingClientRect().y;
            let positionSectionActuelleBooking = document.querySelector(".ms-booking").getBoundingClientRect().y;
            let positionSectionActuelleContact = document.querySelector(".ms-contact").getBoundingClientRect().y;


            //if (positionSectionActuelleCards<hauteurActuelle)

            let bat = document.querySelector(".bateau");
            let positionBateau = 0;
            let bottomNav = document.querySelector(".navigation-globale").getBoundingClientRect().bottom
            let hmin = bottomNav * 1.5;

            // on définit le rapport entre la position de la section actuelle et initiale
            let positionSectionActuelle = document.querySelector(".noeud").getBoundingClientRect().y;
            let hauteurActuelle = positionSectionActuelle - bottomNav;

            let positionSectionInitiale = window.innerHeight;
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

            positionBateau = 1/((rapportHauteur * longueuraParcourir)*rapportLongueur)*100;
            bat.style.marginLeft=`${positionBateau}%`;
            //console.log(positionBateau);
        })
    </script>

<?php
//  const bat = document.querySelector(".bateau")
//    window.addEventListener('scroll', () => {
//        if (window.screenY>3){
//            bat.classList.add('scroll');
//        }
//    }

// let scroll = window.scrollY / (body.clientHeight - window.innerHeiht)
// let scrollPercent = = Math.round(scroll*100)
