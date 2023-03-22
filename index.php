<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Assets/CSS/main.css">
    <title>Mille Sabords</title>
</head>

<body>

<?php
//session_start();

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

//fichier php de traitement du formulaire
/*if (isset($_POST['ms-form-name'])) {
    include "_includes/booking.php";
}*/


//fichier php de la partie contact avec map + téléphone + réseaux
include "_includes/contact.php";

//fichier php du footer avec liens obligatoires
include "_includes/footer.php";

//session_unset();
//session_destroy();
?>
</body>


<script type="text/javascript" src="Assets/Javascript/script.js"></script>


</html>
