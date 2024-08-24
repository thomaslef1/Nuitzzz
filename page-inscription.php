<?php get_template_part('parts/head') ?>

<a href="/">
    <?php get_template_part('parts/logo') ?>
</a>

<form class="login_form mx-auto" action="" method="POST">
    <label for="email" class="green-color display-7 mb-3">Email :</label>
    <input type="email" name="email" id="email" class="mb-3" placeholder="Exemple@gmail.com" required>
    <label for="password" class="green-color display-7 mb-3">Mot de passe :</label>
    <input type="password" name="password" id="password" class="mb-3" placeholder="*********" required>
    <label for="conf_password" class="green-color display-7 mb-3">Confirmer le mot de passe :</label>
    <input type="password" name="conf_password" id="conf_password" class="mb-3" placeholder="*********" required>
    <button class="mt-5 mx-auto px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Créer le compte</button>
</form>
