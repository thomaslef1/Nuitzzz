<?php get_template_part('parts/head') ?>
<?php get_template_part('parts/header-questionnaire') ?>


<div class="container d-flex flex-column align-items-end py-5" style="gap: 64px;">
    <h1 class="w-100" style="font-weight: bold;">Activites Physiques et Alimentation:</h1>
    <p class="w-100" style="font-size: 20px;">A quelle heure avez-vous votre dernier repas de la journee ?</p>
    <div class="w-100 d-flex flex-column" style="gap: 16px;">
        <div class="d-flex flex-row align-items-center px-4 py-3 rounded-pill" style="background: rgb(228,233,234); gap: 10px;">
            <input type="radio" name="choix">
            <span>Avant 18h</span>
        </div>
        <div class="d-flex flex-row align-items-center px-4 py-3 rounded-pill" style="background: rgb(228,233,234); gap: 10px;">
            <input type="radio" name="choix">
            <span>Entre 18h et 20h</span>
        </div>
        <div class="d-flex flex-row align-items-center px-4 py-3 rounded-pill" style="background: rgb(228,233,234); gap: 10px;">
            <input type="radio" name="choix">
            <span>Apres 20h</span>
        </div>
    </div>
    <a href="/question14" class="px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Page Suivante</a>
</div>

<?php get_template_part('parts/footer') ?>