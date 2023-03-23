<?php
session_start();

$errors = [];
$bookingValid = false;

$ownerMail = "remimeslin@outlook.com";

$formName = htmlentities($_POST['ms-form-name']);
$formPhone = htmlentities($_POST['ms-form-phone']);
$formEmail = htmlentities($_POST['ms-form-mail']);
$formPlates = htmlentities($_POST['ms-form-plates-pc']);
$formDate = $_POST['ms-form-date'];
$formHour = $_POST['ms-form-hour'];
$formDemands = htmlentities($_POST['ms-form-demands']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ((!isset($formName)) || (empty(trim($formName)))) {
        $errors[] = "Holà matelot ! J'ai besoin d'un <strong>nom</strong> valide pour reconnaître mon équipage !";
    }
    if ((!isset($formPhone)) || (empty(trim($formPhone)))) {
        $errors[] = "Doucement moussaillon ! Il faut un numéro de <strong>téléphone</strong> valide pour embarquer.";
    }
    if ((!isset($formEmail)) || (empty(trim($formEmail))) || !(filter_var($_POST['ms-form-mail'], FILTER_VALIDATE_EMAIL))) {
        $errors[] = "Pas si vite mousse ! Je n'ai pas d'adresse <strong>email</strong> valide pour te contacter.";
    }
    if ((!isset($formPlates)) || (empty(trim($formPlates)))) {
        $errors[] = "Tu ne m'as pas dit de <strong>combien</strong> de membres se composent mon équipage.";
    }
    if ((!isset($formDate)) || (empty(trim($formDate)))) {
        $errors[] = "Calme toi fieffé forban ! Tu dois me dire <strong>quand</strong> tu veux embarquer.";
    }
    if ((!isset($formHour)) || (empty(trim($formHour)))) {
        $errors[] = "Calme toi fieffé forban ! Tu dois me dire <strong>quand</strong> tu veux embarquer.";
    }
    $_SESSION['errorsList'] = $errors;
}
if (empty($errors)) {
    //$bookingValid = true;
    $_SESSION['confirmation'] = true;
    $_SESSION['name'] = $formName;
    //TODO : add all form fields in session variables
    mail($ownerMail, "Réservation", "Réservation le " . $_POST["ms-form-date"] . " à " . $_POST["ms-form-hour"] . " pour " . $_POST["ms-form-plates-pc"] . " personnes, au nom de " . $_POST["ms-form-name"] . "." . "
    " . "Téléphone : " . $_POST["ms-form-phone"] . "
    " . "Mail : " . $_POST["ms-form-mail"] . "
    " . "Demandes particulières : " . $_POST["ms-form-demands"]);
    header("Location: http://localhost:63342/2023-03-PHP-Bordeaux-P1-Restaurant/index.php");

}
header("Location: http://localhost:63342/2023-03-PHP-Bordeaux-P1-Restaurant/index.php#ancreBooking");
