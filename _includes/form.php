<?php


?>
<link rel="stylesheet" href="../Assets/CSS/main.css">
<section class="ms-booking transitioned fade-right" id="ancreBooking">

    <h2 class="ms-title-section"><span class="ms-h2-small">Pour</span><span class="ms-h2-big"> Réserver</span></h2>

        <?php if (!empty($_SESSION['errorsList']) /*&& isset($_POST['ms-form-name'])*/) : ?>
            <ul class="ms-form-validation-list">
                <?php foreach ($_SESSION['errorsList'] as $sessionVar) : ?>
                    <?php// foreach ($sessionVar as $error) :?>
                        <li class="ms-form-error"><?= $sessionVar ;?></li>
                    <?php endforeach; ?>
                <?php// endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if (isset($_SESSION['confirmation'])) : ?>
            <div class="ms-form-validation-list">
                <span class="ms-form-confirm"><?= "Bienvenue à bord ! Réservation confirmée au nom de " . $_SESSION['name'] . ' pour ' . $_SESSION['plates'] . ' matelots le ' . $_SESSION['date'] . '.' ; ?>
                    <?php //TODO : get all form info to validate booking?>
                </span>
            </div>
        <?php endif; ?>
    <!-- treatment page for the form = /_includes/booking.php -->
    <form action="/_includes/booking.php" method="post" class="ms-form-booking" noValidate>
        <input
                type="text"
                class="ms-name"
                name="ms-form-name"
                placeholder="Nom ou société *"
                pattern="[A-Za-z]{3}"
                value="<?php if(!empty($_SESSION['name'])) : echo $_SESSION['name']; endif; ?>">
        <input
                type="tel"
                class="ms-phone"
                name="ms-form-phone"
                placeholder="Téléphone *"
                value="<?php if(!empty($_SESSION['phone'])) { echo $_SESSION['phone']; } else{echo "0612345678";} ?>">
        <input
                type="email"
                class="ms-mail"
                name="ms-form-mail"
                placeholder="E-mail *"
                value="<?php if(!empty($_SESSION['email'])) { echo $_SESSION['email']; } else{echo "test@gmail.com";} ?>">
        <input
                type="number"
                class="ms-plates-pc"
                name="ms-form-plates-pc"
                placeholder="Nombre de couverts *"
                min="1" max="15"
                value="<?php if(!empty($_SESSION['plates'])) { echo $_SESSION['plates']; } else {echo "2";}?>">
        <input
                type="number"
                class="ms-plates-mobile"
                name="ms-form-plates-mobile"
                min="1" max="15">
        <input
                type="date" class="ms-date"
                name="ms-form-date"
                value="<?php if(!empty($_SESSION['date'])) { echo $_SESSION['date']; }else{ echo date("Y-m-d");}?>"
                min="<?= date("Y-m-d");?>" >
        <input
                type="time"
                class="ms-hour"
                name="ms-form-hour"
                value="<?php date_default_timezone_set('Europe/Paris'); if (!empty($_SESSION['hour'])) { echo $_SESSION['hour']; } else {echo date("H:i");}?>"
                list="hoursList" >

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
        <textarea
                class="ms-demands"
                name="ms-form-demands"
                rows="5" cols="50"
                placeholder="Demandes particulières"><?php if(!empty($_SESSION['demands'])) : echo $_SESSION['demands']; endif; ?></textarea>
        <input type="submit" class="ms-button" value="Réserver">
    </form>
</section>