<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "Panier";
?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="view/content/index.html">Home</a></span> <span>Cart</span>
                    </p>
                    <h1 class="mb-0 bread">My Cart</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $total = 0;
                            $discount = 0;
                            if ($_SESSION['panier']->getListItem() == 0) :?>
                                <tr class="text-center">
                                    <td colspan="12" class="contents align-content-center ">
                                        <a href="index.php?action=displayArticles" class="btn btn-primary align-content-center"> Vous avez aucun article cliquer pour en ajouter</a>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($_SESSION['panier']->getListItem() as $item) : ?>
                                    <tr class="text-center">
                                        <td class="product-remove"><a
                                                    href="index.php?action=remove&add=<?= $item[0]->element ?>"><span
                                                        class="ion-ios-close"></span></a></td>

                                        <td class="image-prod">
                                            <div class="img"
                                                 style="background-image:url(<?= $item[0]->photo; ?>);"></div>
                                        </td>

                                        <td class="product-name">
                                            <h3><?= $item[0]->element ?> </h3>
                                            <p><?= $item[0]->description ?> </p>
                                        </td>

                                        <td class="price"><?= $item[0]->price ?> </td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity"
                                                       class="quantity form-control input-number"
                                                       value="<?= $item[0]->quantity ?> " min="1" max="100">
                                            </div>
                                        </td>

                                        <td class="total"><?php if ( fmod(round($item[0]->price * $item[0]->quantity, 2),1) > 0) echo round($item[0]->price * $item[0]->quantity, 2) . "CHF"; else echo $item[0]->price * $item[0]->quantity . ".-CHf"; ?></td>
                                    </tr><!-- END TR-->
                                    <?php $total += $item[0]->price * $item[0]->quantity;
                                endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Coupon Code</h3>
                        <p>Enter your coupon code if you have one</p>
                        <form action="#" class="info">
                            <div class="form-group">
                                <label for="">Coupon code</label>
                                <input type="text" class="form-control text-left px-3" placeholder="">
                            </div>
                        </form>
                    </div>
                    <p><a href="index.php?action=couponVerify" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
                </div>
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Estimate shipping and tax</h3>
                        <p>Enter your destination to get a shipping estimate</p>
                        <form action="#" class="info">
                            <div class="form-group">
                                <label for="">Country</label>
                                <input type="text" class="form-control text-left px-3" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="country">State/Province</label>
                                <input type="text" class="form-control text-left px-3" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="country">Zip/Postal Code</label>
                                <input type="text" class="form-control text-left px-3" placeholder="">
                            </div>
                        </form>
                    </div>
                    <p><a href="index.php?action=checkout" class="btn btn-primary py-3 px-4">Estimate</a></p>
                </div>
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span><?php if (fmod(round($total, 2), 1) > 0) echo round($total, 2) . "CHF"; else echo $total . ".-CHf"; ?></span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery</span>
                            <span><?= 3.95 % 1 ?></span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span><?php if (fmod(round($discount, 2), 1) > 0) echo round($discount, 2) . "CHF"; else echo $discount . ".-CHf"; ?></span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span><?php if (fmod(round($total - $discount, 2), 1) > 0) echo round($total - $discount, 2) . "CHF"; else echo $total - $discount . ".-CHf"; ?></span>
                        </p>
                    </div>
                    <p><a href="index.php?action=checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
                </div>
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
<?php
$content = ob_get_clean();
require "gabarit.php";