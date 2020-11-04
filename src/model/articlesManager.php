<?php
/**
 * @file      articlesManager.php
 * @brief     This model is designed to implement the articles business logic
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

/**
 * @brief This function is designed to get all active articles
 * @return array : containing all information about the articles. Array can be empty.
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function getArticles()
{

    $snowsQuery = 'SELECT id, name, origin, variety, color, description, photo,price FROM vege';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}
function getArticle($articleName,$origine)
{

    $snowsQuery = "SELECT id, name, origin, variety, color, description, photo,price,category FROM vege where name = '$articleName' and origin = '$origine'; ";

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}
function getArticleFilter($article)
{

    $snowsQuery = "SELECT id, name, origin, variety, color, description, photo,price FROM vege where category = '$article' ";

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}