<?php

    /*
     * php fermé pour commencer html
     */

?>

<link rel="stylesheet" href="../Assets/CSS/main.css">
<section class="ms-booking">
    <h2><span class="ms-h2-small">Pour</span><span class="ms-h2-big"> Réserver</span></h2>

    <form action="" class="ms-form-booking">
        <input type="text" id="ms-name" name="ms-name" placeholder="Nom ou société">
        <input type="tel" id="ms-phone" name="ms-phone" placeholder="Téléphone">
        <input type="email" id="ms-mail" name="ms-mail" placeholder="E-mail">
        <input type="number" id="ms-plates" name="ms-plates" placeholder="Nombre de couverts">
        <input type="date" id="ms-date" name="ms-date" placeholder="Date">
        <input type="time" id="ms-hour" name="ms-hour" placeholder="Heure">
        <textarea id="ms-demands" name="ms-demands" rows="5" cols="50" placeholder="Demandes particulières"></textarea>
        <input type="submit" value="Réserver">
    </form>
</section>