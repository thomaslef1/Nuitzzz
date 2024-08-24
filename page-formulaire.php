<?php get_template_part('parts/head') ?>
<?php get_template_part('parts/header-questionnaire') ?>


<section id="questionnaire">
    <div class="d-flex align-items-center justify-content-between mb-5">
        <div class="image_container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_1.png" alt="Style Image" loading="lazy" width="70px" class="image_style">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pictogramme.png" alt="Pictogramme" loading="lazy" width="55px" class="main_image">
        </div>
        <h2>Bienvenue sur notre questionnaire de la gestion du sommeil</h2>
    </div>
    <form action="/question1" method="POST" class="questionnaire_form">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_4.png" alt="Image de style" loading="lazy" width="200" class="image_style">
        <legend class="mb-5">Informations Générales :</legend>
        <label for="fullname">Nom et prénom :</label>
        <input type="text" name="fullname" id="fullname">
        <label for="age">Âge :</label>
        <input type="number" name="age" id="age">
        <label>Sexe :</label>
        <input type="radio" name="sexe" id="homme" value="homme">
        <label for="homme"><span class="button_placeholder"></span>Homme</label>
        <input type="radio" name="sexe" id="femme" value="femme">
        <label for="femme"><span class="button_placeholder"></span>Femme</label>
        <input type="radio" name="sexe" id="autre" value="autre">
        <label for="autre"><span class="button_placeholder"></span>Autre</label>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_4.png" alt="Image de style" loading="lazy" width="200" class="image_style">
        <button class="mt-5 px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Page suivante</button>
    </form>
</section>

<?php get_template_part('parts/footer') ?>