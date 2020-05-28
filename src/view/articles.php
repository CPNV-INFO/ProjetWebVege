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
            <h2> Nos snows</h2>
            <div class="yox-view">
                <?php if(isset($articleErrorMessage)) : ?>
                    <h5><span style="color:red"><?= $articleErrorMessage; ?></span></h5>
                <?php else : ?>
                    <?php foreach ($snowsResults as $result) : ?>
                        <?php $rows++; ?>
                        <?php if ($rows % 4) : // tests to have 4 items / line ?>
                            <div class="row-fluid">
                            <ul class="thumbnails">
                            <?php $rows = 0; ?>
                        <?php endif ?>

                        <li class="span3">
                            <div class="thumbnail">
                                <a href="<?= $result['photo']; ?>.jpg" target="blank"><img
                                            src="<?= $result['photo']; ?>" alt="<?= $result['name']; ?>"></a>
                                <div class="caption">
                                    <h3>
                                        <a href="index.php?action=displayASnow&code=<?= $result['name']; ?>"><?= $result['code']; ?></a>
                                    </h3>
                                    <p><strong>Alliment : </strong><?= $result['name']; ?></p>
                                    <p><strong>Pays : </strong><?= $result['origin']; ?></p>
                                    <p><strong>variete : </strong><?= $result['variety']; ?> cm</p>
                                    <p><strong>Prix :</strong> CHF <?= $result['']; ?>.- / jour</p>
                                    <p><strong>Disponibilité : </strong><?= $result['qtyAvailable']; ?></p>
                                    <?php if ($result['active']) : ?>
                                        <p><a href="index.php?action=snowLeasingRequest&code=<?= $result['code']; ?>"
                                              class="btn btn-primary">Louer ce snow</a></p>
                                    <?php else : ?>
                                        <p><a class="btn btn-danger" disabled="disabled">Plus en location</a></p>
                                    <?php endif ?>
                                </div>
                            </div>
                        </li>

                        <?php if ($rows % 4) : ?>
                            </ul>
                            </div>
                        <?php endif ?>
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