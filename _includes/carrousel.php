<?php

?>
<link rel="stylesheet" href="../Assets/CSS/main.css">
<!--
    Section containing the carousel
    6 radio inputs represent the 6 clickable photos of the carousel, they will be hidden in CSS
-->

<section class="ms-carousel">

    <input type="radio" name="slider" id="photo-1" checked>
    <input type="radio" name="slider" id="photo-2">
    <input type="radio" name="slider" id="photo-3">
    <input type="radio" name="slider" id="photo-4">
    <input type="radio" name="slider" id="photo-5">
    <input type="radio" name="slider" id="photo-6">

    <div class="ms-carousel-photos">
        <label class="ms-carousel-photo" for="photo-1" id="meal-1">
            <img src="/Assets/Images/uk-2066475_1920.jpg" alt="Plateau de fruits de mer" id="plateau">
        </label>
        <label class="ms-carousel-photo" for="photo-2" id="meal-2">
            <img src="/Assets/Images/shellfish-7811872_1920.jpg" alt="Coquillages" id="coquillages">
        </label>
        <label class="ms-carousel-photo" for="photo-3" id="meal-3">
            <img src="/Assets/Images/salmon-518032_1920.jpg" alt="Saumon braisé" id="saumon">
        </label>
        <label class="ms-carousel-photo" for="photo-4" id="meal-4">
            <img src="../Assets/Images/fish-soup-3054627_1920.jpg" alt="Soupe aux moules" id="soupe">
        </label>
        <label class="ms-carousel-photo" for="photo-5" id="meal-5">
            <img src="../Assets/Images/canape-2802_1920.jpg" alt="Canapé fraîcheur" id="canape">
        </label>
        <label class="ms-carousel-photo" for="photo-6" id="meal-6">
            <img src="../Assets/Images/fish-2105233_1920.jpg" alt="Truite aux 100 herbes" id="truite">
        </label>
    </div>
    <div id="ancreMenu"></div>
</section>
