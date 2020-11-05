<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */
require "Class/Panier.php";
session_start();
require "controller/articles.php";
require "controller/navigation.php";
require "controller/users.php";


if (isset($_GET['action'])) {

    $action = $_GET['action'];
    switch ($action) {
        case 'displayArticles' :
            displayArticles();
            break;
        case 'displayArticlesFilter' :
            displayArticlesFilter($_GET['filter']);
            break;
        case 'displayAnArticle' :
            displayAnArticle($_GET['name'],$_GET['origin']);
            break;
        case 'home' :
            home();
            break;
        case 'panier' :
            displayPanier();
            break;
        case 'addPanier' :
            addToPanier($_SESSION['allArticle'][$_GET['add']],@$_GET['page']);
            break;
        case 'addLotPanier' :
            addToPanier($_SESSION['allArticle'][$_GET['add']],@$_GET['page'],$_GET['quantity']);
            break;
        case 'login' :
            login($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'register' :
            register($_POST);
            break;
        case 'coupon' :
            couponVerif($_POST);
            break;
        case 'remove':
            removeToPanier($_SESSION['allArticle'][$_GET['add']],);
            break;
        case 'checkout' :
            checkout();
            break;
        default :
            lost();
    }
} else {
    $_SESSION['panier'] = new \ProjetWebVege\Panier();
    home();
}
