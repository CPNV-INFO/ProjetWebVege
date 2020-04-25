<?php
/**
 * Title      : login.php
 * Type       :  view
 * Purpose    : login view for existing user
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

$title = 'Rent A Snow - Login/Logout';

ob_start();
?>
    <h2>S'annoncer</h2>
<?php if ($loginErrorMessage != null) : ?>
    <h5><span style="color:red"><?= $loginErrorMessage; ?></span></h5>
<?php endif ?>
    <article>
        <form class='form' method='POST' action="index.php?action=login">
            <div class="container">
                <label for="userEmail"><b>Adresse email</b></label>
                <input type="email" placeholder="Adresse email" name="inputUserEmailAddress" required>

                <label for="userPsw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="inputUserPsw" required>
            </div>
            <div class="container">
                <button type="submit" class="btn btn-default">S'annoncer</button>
                <button type="reset" class="btn btn-default">Effacer</button>
                <span class="psw"><a href="index.php?action=forgotPassword">Mot de passe oublié ?</a></span>
            </div>
        </form>
        <div class="container signin">
            <p>Besoin d'un compte <a href="index.php?action=register">S'inscrire</a>.</p>
        </div>
    </article>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>