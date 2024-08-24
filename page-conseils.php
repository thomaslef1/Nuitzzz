<?php get_template_part('parts/head') ?>
<?php get_template_part('parts/header') ?>

<section id="conseils_list">
    <h1>Optimiser Votre Sommeil pour une Vie Plus Saine</h1>
    <p class="mt-5 mb-5">
        Le sommeil joue un rôle essentiel dans notre bien-être physique et mental. Une bonne nuit de repos régulière est cruciale pour maintenir une santé optimale et favoriser une vie équilibrée. Voici quelques conseils généraux pour améliorer la qualité de votre sommeil et pourquoi cela revêt une importance cruciale.
    </p>

    <div id="conseils" class="row">
        <?php 
        $conseils = new WP_Query([ // je crée une variable $conseils
            'post_type' => 'conseils', // la je précise quel post_type je veux (dans mon cas "conseils")
            'post_status' => 'publish', // la je précise que je veux des posts qui sont publié
            'limit' => 3, // dans mon cas je n'en ai besoin que de trois
            'orderby' => 'date', // je les trie par date 
            'date' => true // je récupéère ma date
            ]);
        
            if ($conseils->have_posts()):

            while ($conseils->have_posts()): // la je lance ma boucle sur mes posts contenu dans conseils
                $conseils->the_post();
        ?>
        <div class="col">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </div>

        <?php endwhile; endif; ?>
    </div>

    <hr class="mt-5 mb-5">
    <div id="conseils_2" class="row">
        <div class="col">
            <h3>4. Éviter les Stimulants en Soirée :</h3>
            <p>La caféine, la nicotine et d'autres
                stimulants peuvent entraver la qualité du
                sommeil. Essayez de les éviter quelques
                heures avant le coucher pour permettre à
                votre corps de se détendre naturellement.</p>
        </div>
        <div class="col">
            <h3>5. Intégrer l'Exercice Physique dans Votre Routine Quotidienne :</h3>
            <p>L'exercice régulier peut améliorer la
                qualité du sommeil, mais évitez les séances
                d'entraînement intensives juste avant de
                vous coucher, car cela peut avoir l'effet
                inverse.</p>
        </div>
    </div>
</section>

<section id="conseil_sommeil">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_3.png" alt="Image de style" loading="lazy" width="100" class="image_style">
    <h2>L'Importance d'une Bonne Nuit de Sommeil :</h2>
    <p>Un sommeil de qualité est essentiel pour plusieurs aspects de notre santé physique et mentale. Il contribue à renforcer le système immunitaire, à
        favoriser la récupération musculaire, à améliorer la concentration et la mémoire, et à réguler les émotions. De plus, un sommeil adéquat est lié à une
        réduction du risque de problèmes de santé tels que les maladies cardiaques, le diabète et la dépression.</p>
    <p>En conclusion, prendre des mesures pour améliorer la qualité de votre sommeil n'est pas seulement une question de confort, mais c'est un
        investissement dans votre santé à long terme. En adoptant des habitudes de sommeil saines, vous pouvez non seulement vous sentir plus reposé au
        quotidien, mais également favoriser une meilleure qualité de vie globale.</p>
    <a href="/formulaire" class="d-block mx-auto px-4 py-2 text-white rounded-pill border border-0 text-decoration-none blue">Faire le Test</a>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_style_3.png" alt="Image de style" loading="lazy" width="100" class="image_style">
</section>

<?php get_template_part('parts/footer') ?>
