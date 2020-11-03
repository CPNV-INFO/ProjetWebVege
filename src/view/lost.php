<?php
/**
 * @file      lost.php
 * @brief     This view is designed to inform the user when he tries to navigate to an resource who doesn't exist
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = 'Lost';

ob_start();
?>
    <section class="container block-20 bg-danger">
        <div class="align-content-center contents align-middle">
            <h2 class="text-center">Oupsss... on vous a perdu en chemin <span class="icon-frown-o btn " style="background-color: yellow"></span></h2>
        </div>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>