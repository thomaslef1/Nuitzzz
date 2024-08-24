<?php get_template_part('parts/head') ?>
<?php get_template_part('parts/header') ?>

<div class="container d-flex flex-column" style="gap: 32px; padding: 32px 0px;">
    <div class="d-flex align-items-end result_title">
        <div class="image_container">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_1.png" alt="Style Image" loading="lazy" width="100px" class="image_style"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carnet.png" alt="Pictogramme" loading="lazy" width="70px" class="main_image">
        </div>
        <h1>Résultat :</h1>
    </div>
    
    <div class="container result_content">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_4.png" alt="Image de style" loading="lazy" width="200" class="image_style"> -->
        <p>
            Selon les réponses fournies dans le questionnaire sur la qualité du sommeil, il
            semble que vous ayez des habitudes de sommeil assez stables en termes d'heure de
            coucher et de lever. Cependant, la fréquence des siestes pendant la journée et
            l'utilisation d'appareils électroniques avant le coucher pourraient influencer la
            qualité de votre sommeil. Pour améliorer votre sommeil, il est recommandé de
            maintenir une routine de sommeil régulière, de limiter les siestes à des durées plus
            courtes, d'éviter les écrans électroniques au moins une heure avant le coucher, et
            d'explorer des activités relaxantes avant de dormir, comme la lecture ou la
            méditation. En outre, si vous avez des préoccupations médicales ou si vous prenez
            des médicaments, il serait judicieux de consulter un professionnel de la santé pour
            une évaluation plus approfondie et des conseils personnalisés.
        </p>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_4.png" alt="Image de style" loading="lazy" width="200" class="image_style"> -->
    </div>
    
    <div class="d-flex flex-row justify-content-end" style="gap: 10px;">
        <a href="#" class="px-4 py-2 rounded-pill text-decoration-none" style="background-color: white; border-width: 2px; border-color: rgb(9,82,40); color: rgb(9,82,40);">Télécharger PDF</a>
        <a href="/" class="px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Retour l'acceuil</a>
    </div>
</div>

<?php get_template_part('parts/footer') ?>
