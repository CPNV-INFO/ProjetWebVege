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
function displayAnArticle($articleName,$origin)
{
    require_once "model/articlesManager.php";
    try {
        $vegeResults = getArticle($articleName,$origin);
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/article.php";
    }
}