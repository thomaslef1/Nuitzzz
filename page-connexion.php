<?php get_template_part('parts/head') ?>

<a href="/">
    <?php get_template_part('parts/logo') ?>
</a>

<p class="green-color display-6 text-center mt-5 mb-4">Connectez-vous à votre compte nuizzz</p>

<form class="login_form mx-auto" action="" method="POST">
    <label for="email" class="green-color display-7 mb-3">Email :</label>
    <input type="email" name="email" id="email" class="mb-3" placeholder="Exemple@gmail.com" required>
    <label for="password" class="green-color display-7 mb-3">Mot de passe :</label>
    <input type="password" name="password" id="password" class="mb-3" placeholder="*********" required>
    <button class="mt-5 mb-3 mx-auto px-4 py-2 text-white rounded-pill border border-0 text-decoration-none green">Connexion</button>
    <small class="text-center mt-1 mb-1">Vous n'avez pas encore de compte ?</small>
    <small class="text-center mt-1 mb-1"><a class="green-link" href="/inscription">Créer un compte</a></small>
</form>