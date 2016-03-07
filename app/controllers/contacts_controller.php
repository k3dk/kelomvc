<?php

    class ContactsController
    {
        public function contact()
        {
            $test = 'test';
            require_once ('app/views/contacts/contact.php');
        }

        public function contactPage()
        {
            require_once ('app/views/contacts/contact-page.php');
        }
    }

?>