<?php
/**
 * @file      register.php
 * @brief     This view is designed to display the register form
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = 'Register';

ob_start();
?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="m-0 bread">Register</h1>
                </div>
            </div>
        </div>
    </div>
<?php if(isset($registerErrorMessage)) : ?>
    <h5><span style="color:red"><?= $registerErrorMessage; ?></span></h5>
<?php endif ?>


    <section class="ftco-section contact-section bg-light">

        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <h1>Register</h1>
            </div>
            <div class="row block-9">
                <p>Pour vous inscrire chez Vege, nous vous prions de renseigner les champs suivants:</p>
                <div class="col-md-12 order-md-last d-flex">
                    <form action="#" class="bg-white p-5 contact-form" method="POST" action="index.php?action=register">
                        <div class="form-group">
                            <label for="inputUserEmail">Addresse e-mail</label>
                            <input type="email"  class="form-control" placeholder="exemple@xyz.com" name="inputUserEmailAddress" required>
                        </div>
                        <div class="form-group">
                            <label for="userPsw">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="password123" name="inputUserPsw" required>
                        </div>
                        <div class="form-group">
                            <label for="psw-repeat">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" placeholder="password123" name="inputUserPswRepeat" required>
                        </div>

                        <div class="row block-9" align="center">
                            <div class="col-md-12 ce py-3 px-5">
                                <p>En soumettant votre demande de compte, vous validez les conditions générales d'utilisation.<a
                                            href="https://termsfeed.com/blog/privacy-policies-vs-terms-conditions/">CGU et vie
                                        privée</a>.</p>
                            </div>
                            <div class="col-md-3 ">
                                <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
                            </div>
                            <div class="col-md-3 ce">
                                <input type="reset" class="btn btn-primary py-3 px-5" placeholder="Subject">
                            </div>

                            <div class=" col-md-3 ce py-3 px-5">
                                Déjà membre ?<a href="index.php?action=register">login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>