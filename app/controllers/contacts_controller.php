<?php

    class ContactsController
    {
        public function contact()
        {
            $ime = 'Kostadin ';
            $prezime = 'Keljtanoski';
            require_once ('app/views/contacts/contact.php');
        }

        public function error_contact()
        {
            require_once ('app/views/contacts/error.php');
        }
    }

?>