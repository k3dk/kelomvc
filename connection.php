<?php

    class Db {
        private static $instance = NULL;
        private function __construct(){}
        private function __clone(){}

        public static function getInstance()
        {
            //Ako ne e postavena instanca -> postavi
            if (!isset(self::$instance))
            {
                //Konekciski string PDO
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;


                self::$instance = new PDO('mysql:host=localhost:3306;dbname=phpmvc','kelomvc','kelomvc',$pdo_options);
            }
            return self::$instance;
        }
    }

?>