<?php

/**
 *  @title : Model.php
 * 
 *  @brief : Model class, all models needs to extends Model. 
 */


require_once(__DIR__.'/Config.php');

abstract class Model {

    static protected $database = null;


    /**
     * 
     * @name : DBConnect
     * 
     * @param void
     * @return PDO
     * 
     * @brief : connection to database
     * 
     */
    protected static function DBConnect() {
        $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';

        $database = new PDO($dsn, Config::DB_USER, Config::DB_PWD);

        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $database;
    }


}


?>
