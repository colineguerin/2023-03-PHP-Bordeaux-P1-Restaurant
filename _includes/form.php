<?php

    /*
     * php closed to start html
     */

?>

<link rel="stylesheet" href="../Assets/CSS/main.css">

<!--Section containing the form with 7 inputs and 1 button -->

<section class="ms-booking">
    <h2><span class="ms-h2-small">Pour</span><span class="ms-h2-big"> Réserver</span></h2>

    <form action="" class="ms-form-booking">
        <input type="text" class="ms-name" name="ms-name" placeholder="Nom ou société">
        <input type="tel" class="ms-phone" name="ms-phone" placeholder="Téléphone">
        <input type="email" class="ms-mail" name="ms-mail" placeholder="E-mail">
        <input type="number" class="ms-plates" name="ms-plates" placeholder="Nombre de couverts">
        <input type="date" class="ms-date" name="ms-date" placeholder="Date">
        <input type="time" class="ms-hour" name="ms-hour" placeholder="Heure">
        <textarea class="ms-demands" name="ms-demands" rows="5" cols="50" placeholder="Demandes particulières"></textarea>
        <input type="submit" class="ms-button" value="Réserver">
    </form>
</section>