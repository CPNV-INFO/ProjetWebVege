<?php
/**
 * @file      articles.php
 * @brief     This view is designed to display articles
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = "VegeFoods";

ob_start();
$rows = 0; // Column count
?>
    <style>
        .imageSise {

        }
    </style>
    <article>
        <header>
            <h2> Nos Aliments</h2>
            <div class="yox-view" >
                <?php if (isset($articleErrorMessage)) : ?>
                    <h5><span style="color:red"><?= $articleErrorMessage; ?></span></h5>
                <?php else : ?>
                <?php foreach ($snowsResults as $result) : ?>

                <li class="span3">
                    <div class="thumbnail imageSise">
                        <a href="<?= $result['photo']; ?>.jpg" target="blank"><img
                                    src="<?= $result['photo']; ?>" alt="<?= $result['name']; ?>"></a>
                        <div class="caption">
                            <p>
                                <a href="index.php?action=displayAnArticle&code=<?= $result['name']; ?>"><?= $result['name'] ?></a>
                            </p>
                            <p><strong>Pays : </strong><?= $result['origin']; ?></p>
                            <?php if (is_null($result['variety'])) : ?>
                                <p><strong>variete : </strong>No varieté </p>
                            <?php else: ?>
                                <p><strong>variete : </strong><?= $result['variety']; ?> </p>
                            <?php endif ?>
                            <p><strong>Prix :</strong> CHF <?= $result['price']; ?>. /Kg</p>


                        </div>
                    </div>
                </li>


            </div>

            <?php endforeach ?>
            <?php endif ?>

        </header>
    </article>
    <hr/>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>