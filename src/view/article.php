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

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg'); z-index: 500">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a
                                    href="index.html">Product</a></span> <span>Product Single</span></p>
                    <h1 class="mb-0 bread">Product Single</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail de l'article -->
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="<?= $vegeResults[0]['photo'] ?>" class="image-popup"><img
                                src="<?= $vegeResults[0]['photo'] ?>" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3><?= $vegeResults[0]['name'] ?> <?= $vegeResults[0]['origin'] ?> </h3>
                    <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span
                                        style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                    <p class="price"><span><?php
                            if (fmod($vegeResults[0]['price'], 1) > 0) {
                                echo $vegeResults[0]['price'] . "CHF";
                            } else
                                echo intval($vegeResults[0]['price']) . ".-CHF";
                             ?></span></p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <a data-toggle="modal" data-target="#detaillé" class="btn btn-block btn-black ">
                                    <div>
                                        Détail
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                   min="1" max="100">
                            <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <p style="color: #000;">600 kg available</p>
                        </div>
                    </div>
                    <p>
                        <a href="index.php?action=addPanier&add=<?= $vegeResults[0]['name'] . $vegeResults[0]['variety'] ?>&page=anArticle"
                           class="btn btn-black py-3 px-5">Add to Cart</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin du detail de l'article-->
    <!-- Debut du detail de l'article-->
    <div class="modal fade" id="detaillé" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle"><?= $vegeResults[0]['name'] ?> <?= $vegeResults[0]['variety'] ?> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body align-content-between">
                    <div class="col-lg-6 mb-5 ftco-animate">
                        <img src="<?= $vegeResults[0]['photo'] ?>" class="" alt="Colorlib Template">
                    </div>
                    <div style="color: #0b0b0b">
                        Description
                        <textarea  class="text-center container-fluid"><?= $vegeResults[0]['description'] ?></textarea>
                    </div>
                    <div class="text-center " style="color: #0b0b0b">
                        <p>Pays :<strong><?= $vegeResults[0]['origin'] ?></strong></p>
                        <p>Categorie :<strong><?= $vegeResults[0]['category'] ?></strong></p>
                        <p>Couleur :<strong><?= $vegeResults[0]['color'] ?></strong></p>
                        <p>Varieté :<strong><?php if(is_null($vegeResults[0]['variety']))echo "N/A" ;else echo $vegeResults[0]['variety']?></strong></p>
                        <p>Couleur :<strong><?php
                                if (fmod($vegeResults[0]['price'], 1) > 0) {
                                    echo $vegeResults[0]['price'] . "CHF";
                                } else
                                    echo intval($vegeResults[0]['price']) . ".-CHF";
                                ?></strong></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin modal -->
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


    <hr/>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>