<?php
/**
 * @file      articles.php
 * @brief     This view is designed to display articles
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = "Shop";

ob_start();
$rows = 0; // Column count
?>
<style>



</style>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Products</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li>
                        <a href="index.php?action=displayArticles" <?php if ($_SESSION['Selection'] == "") : ?> class="active" <?php endif; ?>>All</a>
                    </li>
                    <li>
                        <a href="index.php?action=displayArticlesFilter&filter=Vegeta" <?php if ($_SESSION['Selection'] == "Vegeta") : ?> class="active" <?php endif; ?>>Vegetables</a>
                    </li>
                    <li>
                        <a href="index.php?action=displayArticlesFilter&filter=Fruit"<?php if ($_SESSION['Selection'] == "Fruit") : ?> class="active" <?php endif; ?>>Fruits</a>
                    </li>
                    <li>
                        <a href="index.php?action=displayArticlesFilter&filter=Verdure"<?php if ($_SESSION['Selection'] == "Verdure") : ?> class="active" <?php endif; ?>>Verdure</a>
                    </li>
                    <li>
                        <a href="index.php?action=displayArticlesFilter&filter=Other"<?php if ($_SESSION['Selection'] == "Other") : ?> class="active" <?php endif; ?>>Other</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php foreach (@$vegeResults as $item)  : ?>
                <?php
                $_GET[$item['name'].$item["variety"]] = $item;
                $_SESSION['allArticle'] = $_GET;
                ?>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="index.php?action=displayAnArticle&name=<?= $item['name'] ?>&origin=<?= $item['origin'] ?>"
                           class="img-prod"><img class="img-fluid"
                                                 src="<?php if (file_exists($item['photo'])) echo $item['photo']; else  echo "view/content/images/pictureNoFound.jpg"; ?>"
                                                 alt="No image">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="index.php?action=displayAnArticle&name=<?= $item['name'] ?>&origin=<?= $item['origin'] ?>"><?= $item['name'] ?></a>
                            </h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="price-sale">
                                            <?php
                                                if (fmod($item['price'],1) > 0)
                                                {
                                                    echo $item['price']."CHF";
                                                } else
                                                    echo intval($item['price']).".-CHF"; ?>
                                        </span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="index.php?action=addPanier&add=<?= $item['name'].$item['variety']?>&page=displayarticles"
                                       class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="index.php?action=addPanier&add=<?= $item['name'].$item['variety'] ?>"
                                       class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>

</script>
<?php
$content = ob_get_clean();
require 'gabarit.php';
