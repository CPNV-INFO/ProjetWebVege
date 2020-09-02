<?php
/**
 * @file      articles.php
 * @brief     This view is designed to display articles
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = "Rent A Snow - Snows";

ob_start();
$rows = 0; // Column count
?>

    <article>
        <header>

            <div class="yox-view">
                <?php if (isset($articleErrorMessage)) : ?>
                    <h5><span style="color:red"><?= $articleErrorMessage; ?></span></h5>
                <?php else : ?>
                    <?php foreach ($snowsResults as $result) : ?>
                        <h2><?= $result['name'] ?></h2>

                        <div class="row-fluid">
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="<?= $result['photo']; ?>.jpg" target="blank"><img
                                                src="<?= $result['photo']; ?>" alt="<?= $result['name']; ?>"></a>
                                    <div class="caption">
                                        <p><strong>Pays : </strong><?= $result['origin']; ?></p>
                                        <?php if (is_null($result['variety'])) : ?>
                                            <p><strong>variete : </strong>No varieté </p>
                                        <?php else: ?>
                                            <p><strong>variete : </strong><?= $result['variety']; ?> </p>
                                        <?php endif ?>
                                        <?php /**<p><strong>Prix :</strong> CHF <?= $result['']; ?>.- / jour</p>**/ ?>
                                        <p><strong>Description : </strong><?= $result['description']; ?></p>
                                        <p><strong>Prix :</strong> CHF <?= $result['price']; ?>. /Kg</p>

                                    </div>
                                </div>
                            </li>


                        </div>

                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </header>
    </article>
    <hr/>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>