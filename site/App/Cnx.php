<?php
namespace App;

use PDO;

class Cnx
{
    const HOST = 'localhost';
    const USER = 'root';
    const PASSWORD = '';
    const DB_NAME = 'boutique';
    
    /**
     *
     * @var PDO
     */
    private static $instance;
    
    /**
     * constructeur privé pour empêcher d'instancier
     * la classe Cnx
     */
    private function __construct() {}

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new PDO(
                'mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME,
                self::USER,
                self::PASSWORD,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }
        
        return self::$instance;
    }


}
