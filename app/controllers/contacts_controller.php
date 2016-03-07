<?php

    class ContactsController
    {
        public function contact()
        {
            $test = 'test';
            require_once ('app/views/contacts/contact.php');
        }

        public function indexcontact()
        {
            require_once ('app/views/contacts/index.php');
        }
    }

?>