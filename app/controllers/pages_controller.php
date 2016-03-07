<?php

    class PagesController
    {
        public function home()
        {
            $naslov = 'This is the home page';
            $podnaslov = 'MVC by Kelo';
            require_once ('app/views/pages/home.php');
        }

//        public function contact()
//        {
//            $ime ='Kostadin ';
//            $prezime = 'Keljtanoski';
//
//            require_once ('app/views/pages/contact.php');
//        }


        public function error()
        {
            require_once ('app/views/pages/error.php');
        }
    }

?>