<?php get_template_part('parts/head') ?>
<?php get_template_part('parts/header') ?>

<section id="avis">
    <br><br>
    <div id="avis_list" class="row">
        <div class="avis col">
            <?php get_template_part('parts/stars') ?>
            <br>
            <h3>Incroyable</h3>
            <p>Cela faisait maintenant 5 ans que je ne dormais plus, grâce à ce site je dors à nouveau comme un bébé !</p>
            <br>
            <p><i>Victor Boucher,</i> <span class="gray-color">il y a 16 heures</span></p>
        </div>
        <div class="avis col">
            <?php get_template_part('parts/stars') ?>
            <br>
            <h3>Je dors mieux</h3>
            <p>Quand mon ami m’a parlé de ce site je n’y croyais pas vraiment, mais les résultats sont la !! Je dors nettement mieux maintenant.</p>
            <br>
            <p><i>Laurent Louche,</i> <span class="gray-color">il y a 1 jour</span></p>
        </div>
        <div class="avis col">
            <?php get_template_part('parts/stars') ?>
            <br>
            <h3>Waoow</h3>
            <p>Depuis que j’applique les conseils qui m’ont été donné sur ce site je dors vraiment mieux !</p>
            <br>
            <p><i>Axelle Vanmeerbeek,</i> <span class="gray-color">il y a 5 jours</span></p>
        </div>
    </div>
</section>
<section>
    <h3 class="green-color font-weight-bold">Laissez votre avis!</h3>
    <br>
    <form id="avis_form" class="mb-7" action="" method="POST">
        <textarea name="avis" id="avis" cols="30" rows="3" placeholder="_________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________"></textarea>
        <button class="mt-5 px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Soumettre</button>
    </form>
    <br><br>
</section>

<?php get_template_part('parts/footer') ?>
