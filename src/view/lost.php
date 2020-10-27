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
    <h2>Oupsss... on vous a perdu en chemin ;(.</h2>
<?php
$content = ob_get_clean();
require 'Exgabarit.php';
?>