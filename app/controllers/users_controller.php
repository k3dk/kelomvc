<?php

class UsersController
{
    public function showUsers()
    {

        require_once ('app/views/users/showUsers.php');
    }

    public function korisnici()
    {
        $korisnik = 'Kostadin ';
        $prezime= 'Keljtanoski';
        require_once ('app/views/users/korisnici.php');
    }
}

?>
