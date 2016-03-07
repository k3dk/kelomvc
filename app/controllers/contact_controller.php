<?php

    class ContactController
    {
        public function contact()
        {
            $ime = 'Kostadin ';
            $prezime = 'Keljtanoski';
            require_once ('app/views/pages/contact.php');
        }

        public function error()
        {
            require_once ('app/views/pages/error.php');
        }
    }

?>