<?php
/**
 * Title      : dbConnector.php
 * Type       :  model
 * Purpose    : database manager
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

/**
 * This function is designed to execute a query received as parameter
 * @param $query : must be correctly build for sql (syntaxis)
 * @return array|null : get the query result (can be null)
 * Source : http://php.net/manual/en/pdo.prepare.php
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function executeQuerySelect($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();//open database connexion
    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}

/**
 * This function is designed to insert value in database
 * @param $query
 * @return bool|null : $statement->execute() returns true is the insert was successful
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function executeQueryInsert($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();//open database connexion
    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);//prepare query
        $queryResult = $statement->execute();//execute query
    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}

/**
 * This function is designed to manage the database connexion. Closing will be not proceeded there. The client is responsible of this.
 * @return PDO|null
 * Source : http://php.net/manual/en/pdo.construct.php
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function openDBConnexion()
{
    $tempDbConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'snows';
    $userName = 'appliConnector';
    $userPwd = '123qweasD!';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
    } catch (PDOException $exception) {
        throw new ModelDataBaseException();
    }
    return $tempDbConnexion;
}

class ModelDataBaseException extends Exception
{
}