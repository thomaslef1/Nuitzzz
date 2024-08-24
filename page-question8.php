<?php get_template_part('parts/head') ?>
<?php get_template_part('parts/header-questionnaire') ?>


<div class="container d-flex flex-column align-items-end py-5" style="gap: 64px;">
    <h1 class="w-100" style="font-weight: bold;">Habitudes de Sommeil:</h1>
    <p class="w-100" style="font-size: 20px;">Avez-vous une routine de sommeil reguliere ?</p>
    <div class="w-100 d-flex flex-column" style="gap: 16px;">
        <div class="d-flex flex-row align-items-center px-4 py-3 rounded-pill" style="background: rgb(228,233,234); gap: 10px;">
            <input type="radio" name="choix">
            <span>Oui</span>
        </div>
        <div class="d-flex flex-row align-items-center px-4 py-3 rounded-pill" style="background: rgb(228,233,234); gap: 10px;">
            <input type="radio" name="choix">
            <span>Non</span>
        </div>
    </div>
    <a href="/question9" class="px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Page Suivante</a>
</div>

<?php get_template_part('parts/footer') ?>