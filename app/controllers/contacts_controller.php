<?php

    class ContactsController
    {
        public function contact()
        {

            require_once ('app/views/contacts/contact.php');
        }

        public function indexcontact()
        {
            $ime = 'Kostadin ';
            $prezime= 'Keljtanoski';
            require_once ('app/views/contacts/index.php');
        }
    }

?>