<?php
/**
 * @file      login.php
 * @brief     This view is designed to display the login form
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = 'Login';

ob_start();
?>
<style>
    #register:hover{
        color: #001808;
    }
</style>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">Login</h1>
                </div>
            </div>
        </div>
    </div>
<?php if(isset($loginErrorMessage)) : ?>
    <h5><span style="color:#ff0000"><?= $loginErrorMessage; ?></span></h5>
<?php endif ?>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <h1>Login</h1>
            </div>
            <div class="row block-9">
                <div class="col-md-12 order-md-last d-flex">
                    <form class="bg-white p-5 contact-form" method="POST" action="index.php?action=login">
                        <div class="form-group">
                            <label for="inputUserEmail">Addresse e-mail</label>
                            <input type="email"  class="form-control" placeholder="exemple@xyz.com" name="inputUserEmailAddress" required>
                        </div>
                        <div class="form-group">
                            <label for="inputUserPsw">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="password123" name="inputUserPsw" required>
                        </div>
                        <div class="row block-9" align="center">
                            <div class="col-md-3 ">
                                <input type="submit" value="log in" class="btn btn-primary py-3 px-5">
                            </div>
                            <div class="col-md-3 ce">
                                <input type="reset" class="btn btn-primary py-3 px-5" placeholder="Subject">
                            </div>
                            <div class="col-md-3 " ">
                                <a href="index.php?action=register"><input type="button" class="btn btn-primary py-3 px-5" value="Mot de passe oublié?" placeholder="Subject"></a>
                            </div>
                            <div class=" col-md-3 ce py-3 px-5">

                                 <a id="register" href="index.php?action=register" >Pas de compte, connectez vous</a>
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