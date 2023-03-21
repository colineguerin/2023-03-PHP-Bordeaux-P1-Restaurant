<?php
//fichier php du head
include "_includes/head.php";
?>
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
include "_includes/footer.php";


?>

<link rel="stylesheet" href="Assets/CSS/main.css">

<script type="text/javascript" src="./Assets/Javascript/script.js"></script>

<script>
    window.addEventListener('scroll', () => {

        let bateau = document.querySelector(".ms-boat")
        let body = document.querySelector('body')
        let tailleBody = body.getBoundingClientRect().height

        // on définit la hauteur de chaque section de la page

        let tailleHeader = document.querySelector('.header').getBoundingClientRect().height*1.1
        let tailleCards = document.querySelector('.ms-cards').getBoundingClientRect().height*1.125
        let tailleCarousel = document.querySelector('.ms-carousel').getBoundingClientRect().height
        let tailleMenu = document.querySelector('.ms-menu').getBoundingClientRect().height*0.98
        let tailleForm = document.querySelector('.ms-booking').getBoundingClientRect().height
        let tailleContact = tailleBody-(tailleHeader+tailleCards+tailleMenu+tailleCarousel+tailleForm)

        let hauteurContact = (tailleHeader+tailleCards+tailleCarousel+tailleMenu+tailleForm)
        let hauteurForm = (tailleHeader+tailleCards+tailleCarousel+tailleMenu)
        let hauteurMenu = (tailleHeader+tailleCards+tailleCarousel)
        let hauteurCards = tailleHeader

        // on calcule la proportion de la section par rapport à la hauteur totale

        let rapportHeader = tailleHeader/tailleBody
        let rapportCards = (tailleCards+tailleCarousel)/tailleBody
        let rapportMenu = tailleMenu/tailleBody
        let rapportForm = tailleForm/tailleBody
        let rapportContact = tailleContact/tailleBody

        /*rapportHeader = 0.0988
        rapportCards = 0.3484
        rapportMenu = 0.2855
        rapportForm = 0.0972
        rapportContact = 0.1699*/

        rapportHeader = 0.22
        rapportCards = 0.39
        rapportMenu = 0.15
        rapportForm = 0.13
        rapportContact = 0.15

        // on définit la proportion de chaque segment à parcourir

        let rapport1 = 0.25
        let rapport2 = 0.2
        let rapport3 = 0.15
        let rapport4 = 0.22
        let rapport5 = 0.15

        // on calcule le coef entre la proportion de la section et la proportion du segment à parcourir

        let coef1 = rapportHeader/rapport1
        let coef2 = rapportCards/rapport2
        let coef3 = rapportMenu/rapport3
        let coef4 = rapportForm/rapport4
        let coef5 = rapportContact/rapport5

        let batWidth = document.querySelector(".ms-boatWidth")
        let scrollY = window.scrollY
        let scrollSection
        let minWidth
        let scroll
        let scrollPercent
        let scrollGlobal
        let maxWidth

        if (scrollY < hauteurCards){
            scrollSection=scrollY
            scroll = scrollSection / (body.clientHeight)
            scrollPercent = (scroll*100)/coef1
            scrollGlobal=scrollPercent
            maxWidth = rapport1*100
            batWidth.style.maxWidth=`${maxWidth}%`
            batWidth.style.width=`${scrollGlobal}%`
            console.log(1111111111111111111111)
        } else if (scrollY >= hauteurCards && scrollY < hauteurMenu) {
            minWidth = rapport1*88
            scrollSection = (scrollY - hauteurCards)
            scroll = scrollSection / (body.clientHeight - window.innerHeight)
            scrollPercent = (scroll*100)/coef2
            scrollGlobal = minWidth+scrollPercent
            maxWidth = (rapport1+rapport2)*100
            batWidth.style.maxWidth=`${maxWidth}%`
            batWidth.style.width=`${scrollGlobal}%`
            console.log(222222222222222222222)
        } else if (scrollY >= hauteurMenu && scrollY < hauteurForm){
            minWidth = (rapport1+rapport2)*92
            scrollSection = (scrollY - hauteurMenu)
            scroll = scrollSection / (body.clientHeight - window.innerHeight)
            scrollPercent = (scroll*100)/coef3
            scrollGlobal = minWidth+scrollPercent
            maxWidth = (rapport1+rapport2+rapport3) * 100
            batWidth.style.maxWidth=`${maxWidth}%`
            batWidth.style.width=`${scrollGlobal}%`
            console.log(3333333333333333)
        } else if (scrollY >= hauteurForm && scrollY < hauteurContact) {
            minWidth = (rapport1+rapport2+rapport3)*100
            scrollSection = (scrollY - hauteurForm)
            scroll = scrollSection / (body.clientHeight - window.innerHeight)
            scrollPercent = (scroll * 100)/coef4
            scrollGlobal = minWidth+scrollPercent
            maxWidth = (rapport1+rapport2+rapport3+rapport4) * 100
            batWidth.style.maxWidth=`${maxWidth}%`
            batWidth.style.width=`${scrollGlobal}%`
            console.log(444444444444)
        } else if (scrollY >= hauteurContact*1.01){
            minWidth = (rapport1+rapport2+rapport3+rapport4) * 100
            scrollGlobal = minWidth
            batWidth.style.width=`${scrollGlobal}%`
            console.log(555555555555555)
        }
    });

    window.addEventListener("scroll",()=> {
        let cardDroitBas = document.querySelector(".ms-card2")
        let cardGaucheHaut = document.querySelector(".ms-card1")
        let cardImageHaut = document.querySelector(".ms-image-card1")
        let cardImageBas = document.querySelector(".ms-image-card2")
        const body = document.querySelector("body")
        let scroll = window.scrollY / (body.clientHeight)
        let scrollPercent = Math.round(scroll * 100)
            if (scrollPercent >= 8 && scrollPercent < 36) {
                cardImageHaut.classList.add('trans')
                cardGaucheHaut.classList.add('trans')
                cardImageBas.classList.add('trans')
                cardDroitBas.classList.add('trans')
            } else if (scrollPercent <= 7 || scrollPercent >= 38) {
                cardImageHaut.classList.remove('trans')
                cardGaucheHaut.classList.remove('trans')
                cardImageBas.classList.remove('trans')
                cardDroitBas.classList.remove('trans')
            }
        })

        let toggleNavStatus = false;
        let toggleNav = function (){
            let getMenuToggle = document.querySelector('.ms-menu-toggle');
            let getMenuToggleUl = document.querySelector('.ms-menu-toggle ul');
            let getMenuToggleDiv = document.querySelector('.ms-menu-toggle div');
            let buttonLogo = document.querySelector('.ms-menu-button');

            if(toggleNavStatus === false) {
                getMenuToggle.style.width="60%";
                getMenuToggleUl.style.opacity="1";
                getMenuToggleDiv.style.opacity="1";
                buttonLogo.style.backgroundImage="url(../Assets/Images/croix.png)";
                buttonLogo.style.height="50%";
                buttonLogo.style.backgroundSize="contain";
                toggleNavStatus = true;
            } else if (toggleNavStatus === true) {
                getMenuToggleUl.style.opacity="0";
                getMenuToggleDiv.style.opacity="0";
                getMenuToggle.style.width="0";
                buttonLogo.style.backgroundImage="url(../Assets/Images/menu.png)";
                buttonLogo.style.height="80%";
                toggleNavStatus = false;
            }
        }
</script>
