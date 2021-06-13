<?php
namespace Core;

use App\Config;

use Exception;
use PDO;
use \Pecee\Pixie\Connection;

class QueryBuilder {

    public static $instance;
  
    public static function connection(){
      
        $dotenv = new \Symfony\Component\Dotenv\Dotenv(true);
        $dotenv->loadEnv(dirname(__DIR__).'/.env');
      
        $config = [
            'driver'    => getenv('DB_DRIVER'), 
            'host'      => getenv('DB_HOST'),
            'database'  => getenv('DB_NAME'),
            'username'  => getenv('DB_USER'),
            'password'  => getenv('DB_PASS'),
            'charset'   => getenv('DB_CHARSET'), 
            'collation' => getenv('DB_COLLATION'),
            'options'   => [
                PDO::ATTR_TIMEOUT => 5,
                PDO::ATTR_EMULATE_PREPARES => false,
            ],
        ];
      
        if(!isset(self::$instance)){
            self::$instance = (new \Pecee\Pixie\Connection('mysql', $config))->getQueryBuilder();
        }
        return self::$instance;
    }
}