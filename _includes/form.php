<?php

    /*
     * php closed to start html
     */

?>

<link rel="stylesheet" href="../Assets/CSS/main.css">

<!--Section containing the form with 7 inputs and 1 button -->
<section class="ms-booking">
    <h2 class="ms-title-section"><span class="ms-h2-small">Pour</span><span class="ms-h2-big"> Réserver</span></h2>

    <form action="" class="ms-form-booking">
        <input type="text" class="ms-name" name="ms-name" placeholder="Nom ou société *" required>
        <input type="tel" class="ms-phone" name="ms-phone" placeholder="Téléphone *" required>
        <input type="email" class="ms-mail" name="ms-mail" placeholder="E-mail">
        <input type="number" class="ms-plates" name="ms-plates" placeholder="Nombre de couverts *" min="1" max="15" required>
        <input type="date" class="ms-date" name="ms-date" value="<?= date("Y-m-d");?>" min="<?= date("Y-m-d");?>" required>
        <input type="time" class="ms-hour" name="ms-hour" value="<?php date_default_timezone_set('Europe/Paris'); echo date("H:i");?>" list="hoursList" required>

        <!-- Datalist to enable only certain hours to book a table -->
        <datalist id="hoursList">
            <option value="12:00">
            <option value="12:30">
            <option value="13:00">
            <option value="13:30">
            <option value="14:00">
            <option value="19:00">
            <option value="19:30">
            <option value="20:00">
            <option value="20:30">
            <option value="21:00">
        </datalist>
        <textarea class="ms-demands" name="ms-demands" rows="5" cols="50" placeholder="Demandes particulières"></textarea>
        <input type="submit" class="ms-button" value="Réserver" id="ancreContact">
    </form>
</section>