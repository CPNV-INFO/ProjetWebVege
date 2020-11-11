<?php
/**
 * @file      articles.php
 * @brief     this controller is designed to manage articles actions
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

/**
 * @brief This function is designed to display Articles
 */
function displayArticles()
{
    $_SESSION['Selection'] = "";
    require_once "model/articlesManager.php";
    try {
        $vegeResults = getArticles();
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/articles.php";
    }
}

/**
 * @brief This function is designed to display Articles
 */
function displayArticlesFilter($filerCondition)
{
    $_SESSION['Selection'] = $filerCondition;
    require_once "model/articlesManager.php";
    try {
        $vegeResults = getArticleFilter($filerCondition);
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/articles.php";
    }
}

function displayAnArticle($articleName, $origin)
{
    require_once "model/articlesManager.php";
    try {
        $vegeResults = getArticle($articleName, $origin);
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/article.php";
    }
}

/**
 *
 */
function displayPanier()
{
    require_once "view/panier.php";
}

/**
 * @param $element
 * @param $page
 * @param int $quantity
 */
function addToPanier($element, $page, $quantity = 1)
{
    $_SESSION['panier']->AddItem($element, $quantity);
    if ($page == "displayarticles")
        displayArticles();
    else
        if ($page == "anArticle")
            displayAnArticle($element['name'], $element['origin']);
        else
            require_once "view/panier.php";

}

/**
 * @param $element
 */
function removeToPanier($element)
{
    $_SESSION['panier']->DeleteItem($element);
    require_once "view/panier.php";
}

function removeAllPanier($element)
{
    $_SESSION['panier']->DeleteAllItem($element);
    require_once "view/panier.php";
}

/**
 *
 */
function checkout()
{
    require "view/checkout.php";
}