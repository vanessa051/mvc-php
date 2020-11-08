<?php

namespace app\Model;

class Conexao{
    private static $instance;

    //CHECK IF THERE IS A CONNECTION INSTACY
    public static function getConn(){

        if(!isset(self::$instance)):
        self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');

        endif;
        
            return self::$instance;

       
}
}


?>