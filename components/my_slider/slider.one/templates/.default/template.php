<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>

<link rel="stylesheet" href="/local/components/my_slider/slider.one/templates/.default/slidenew.css">

<div class="slider">
    <?php foreach ($arResult['IMAGES'] as $image): ?>
        <div class="slide">
            <img src="<?= htmlspecialchars($image) ?>" alt="" />
        </div>
    <?php endforeach; ?>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
        slides[currentSlide].style.display = 'none';
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].style.display = 'block';
    }

    setInterval(() => {
        showSlide(currentSlide + 1);
    }, 3000);
</script>