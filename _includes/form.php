<?php


?>
<link rel="stylesheet" href="../Assets/CSS/main.css">
<section class="ms-booking transitioned fade-right" id="ancreBooking">

    <h2 class="ms-title-section"><span class="ms-h2-small">Pour</span><span class="ms-h2-big"> Réserver</span></h2>

        <?php if (!empty($_SESSION) /*&& isset($_POST['ms-form-name'])*/) : ?>
            <ul class="ms-form-errors-list">
                <?php foreach ($_SESSION as $sessionVar) : ?>
                    <?php foreach ($sessionVar as $error) :?>
                        <li class="ms-form-error"><?= $error ;?></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <!-- treatment page for the form = /_includes/booking.php -->
    <form action="" method="post" class="ms-form-booking">
        <input type="text" class="ms-name" name="ms-form-name" placeholder="Nom ou société *" required>
        <input type="tel" class="ms-phone" name="ms-form-phone" placeholder="Téléphone *" required>
        <input type="email" class="ms-mail" name="ms-form-mail" placeholder="E-mail" required>
        <input type="number" class="ms-plates-pc" name="ms-form-plates-pc" placeholder="Nombre de couverts *" min="1" max="15" required>
        <input type="number" class="ms-plates-mobile" name="ms-form-plates-mobile"  min="1" max="15">
        <input type="date" class="ms-date" name="ms-form-date" value="<?= date("Y-m-d");?>" min="<?= date("Y-m-d");?>" >
        <input type="time" class="ms-hour" name="ms-form-hour" value="<?php date_default_timezone_set('Europe/Paris'); echo date("H:i");?>" list="hoursList" >

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
        <input type="submit" class="ms-button" value="Réserver">
    </form>
</section>