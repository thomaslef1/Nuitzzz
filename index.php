<?php get_template_part('parts/head') ?>
<?php get_template_part('parts/header') ?>

<section class="d-flex flex-column align-items-center" style="gap: 64px;">
    <h1 class="w-100" style="font-weight: bold;">Comment ça marche ?</h1>
    <div class="row" style="color: rgb(9,82,40); gap: 16px;">
        <div class="col p-2" style="background-color: rgb(228,233,234); border-radius: 32px;">
            <div class="image_container">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_1.png" alt="Style Image" loading="lazy" width="70px" class="image_style"> -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pictogramme.png" alt="Pictogramme" loading="lazy" width="55px" class="main_image">
            </div>
            <div class="m-3">
                <h3>01. Faites le test en ligne</h3>
                <p>Prenez 3 minutes pour vous confier sur votre mode de vie.</p>
            </div>
        </div>
        <div class="col p-2" style="background-color: rgb(228,233,234); border-radius: 32px;">
            <div class="image_container">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_1.png" alt="Style Image" loading="lazy" width="70px" class="image_style"> -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carnet.png" alt="Carnet" loading="lazy" width="45px" class="main_image">
            </div>
            <div class="m-3">
                <h3>02. Obtenez des conseils ciblés</h3>
                <p>Obtenez des conseils les mieux adaptés à votre situation grâce à nos experts.</p>
            </div>
        </div>
        <div class="col p-2" style="background-color: rgb(228,233,234); border-radius: 32px;">
            <div class="image_container">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_1.png" alt="Style Image" loading="lazy" width="70px" class="image_style"> -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dormir.png" alt="Dormir" loading="lazy" width="50px" class="main_image">
            </div>
            <div class="m-3">
                <h3>03. Commencez à avoir un meilleur sommeil</h3>
                <p>Suivez les conseils de nos experts et dormez de mieux en mieux.</p>
            </div>
        </div>
    </div>
    <a href="/formulaire" class="px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Faire le Test</a>
</section>

<section id="ticket_section">
    <div id="tickets_container" class="row">
        <div class="col d-flex flex-column justify-content-between align-items-start">
            <h2 style="font-weight: bold;">Des conseils simples pour mieux dormir :</h2>
            <p class="display-6">Ici, vous trouverez des conseils généraux afin de vous aider à mieux dormir!</p>
            <a href="/conseils" class="px-4 py-2 text-white rounded-pill border border-0 text-decoration-none blue">Voir plus de conseil</a>
        </div>
        <div id="tickets_list" class="col pt-5 pb-5">
            <div class="ticket">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/routine.png" alt="Routine" loading="async" width="80px">
                <p>Établissez une routine du coucher.</p>
            </div>
            <hr>
            <div class="ticket">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yoga.png" alt="Yoga" loading="async" width="80px">
                <p>Détendez-vous avant d’aller au lit.</p>
            </div>
            <hr>
            <div class="ticket">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/notel.png" alt="Pas de téléphone" loading="async" width="80px">
                <p>Ne pas consulter son téléphone avant d’aller vous coucher.</p>
            </div>
        </div>
    </div>
</section>

<section id="experts">
    <div class="row">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_2.png" alt="Image de style" loading="lazy" width="200" class="image_style">
        <div id="expert_description" class="col">
            <h2>Les experts à la tête du projet :</h2>
            <p class="display-6">Les troubles du sommeil concernent environ 30% de la population belge de plus de 15 ans, avec une rédominance féminine significative de 33% contre 26% pour les hommes.</p>
            <p class="display-6">C’est pourquoi nos deux experts ont décidé de créer ce site, afin d’aider le plus grand nombre de personne.</p>
            <p></p>
        </div>
        <div class="col">
            <br><br><br>
            <div class="photos row">
                <div class="photo col">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alexandre_flamme.jpg" width="220" alt="Photo de Alexandre Flamme" loading="lazy">
                    <h4>Alexandre Flamme</h4>
                    <p>Spécialiste du sommeil</p>
                </div>
                <div class="photo col">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thomas_lefebvre.jpg" width="220" alt="Photo de Thomas Lefebvre" loading="lazy">
                    <h4>Thomas Lefebvre</h4>
                    <p>Spécialiste du sommeil</p>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_2.png" alt="Image de style" loading="lazy" width="200" class="image_style">
    </div>
</section>

<section class="d-flex flex-column align-items-center" style="gap: 64px;">
    <div class="w-100">
        <h2 class="avis_title">Recommandé<br><b>par vous</b></h2>
        <p class="display-7 mt-5 mb-5">Découvrez les témoignages de nos utilisateurs:</p>
    </div>
    <div id="avis_list" class="row">
        <div class="avis col">
            <div class="star_container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
            </div>
            <br>
            <h3>Incroyable</h3>
            <p>Cela faisait maintenant 5 ans que je ne dormais plus, grâce à ce site je dors à nouveau comme un bébé !</p>
            <br>
            <p><i>Victor Boucher,</i> <span class="gray-color">il y a 16 heures</span></p>
        </div>
        <div class="avis col">
            <div class="star_container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
            </div>            
            <br>        
            <h3>Je dors mieux</h3>
            <p>Quand mon ami m’a parlé de ce site je n’y croyais pas vraiment, mais les résultats sont là !! Je dors nettement mieux maintenant.</p>
            <br>
            <p><i>Laurent Louche,</i> <span class="gray-color">il y a 1 jour</span></p>
        </div>
        <div class="avis col">
            <div class="star_container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstar.png" alt="FullStar" loading="lazy" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/halfstar.png" alt="halfstar" loading="lazy" width="40">
            </div>
            <br>
            <h3>Waoow</h3>
            <p>Depuis que j’applique les conseils qui m’ont été donnés sur ce site je dors vraiment mieux !</p>
            <br>
            <p><i>Axelle Vanmeerbeek,</i> <span class="gray-color">il y a 5 jours</span></p>                    
        </div>
    </div>
    <a href="/formulaire" class="px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Faire le Test</a>
</section>

<?php get_template_part('parts/footer') ?>