<?php

    function call($controller, $action)
    {
        //pobaraj go dukumentot sto odgovara na kontrolerot
        require_once ('app/controllers/' . $controller . '_controller.php');

        //kreiraj nova instanca od potrebniot kotnroler

        switch($controller)
        {
            case 'pages':
                $controller = new PagesController();

                break;
            case 'posts':
                require_once ('app/models/post.php');
                $controller = new PostsController();

                break;

            case 'contacts':

                $controller = new ContactsController();

                break;


        }

        //povikaj ja akcijata
        $controller->{ $action }();

    }

    //lista na kontroleri sto gi imame i nivnite akcii
    //ovie se smetaat za dozvoleni vrednosti

    $controllers = array('pages'    => ['home','error'],
                         'contacts'  => ['contact','error_contact'],
                         'posts'    => ['index','show']

    );

    //proverka dali pobaranite kontroleri i akcii se dozvoleni za uptoreba
    if(array_key_exists($controller,$controllers))
    {
        if(in_array($action,$controllers[$controller]))
        {
            call($controller, $action);
        }
        else
        {
            call('pages','error');
        }
    }
    else
    {
        call('pages','error');
    }

?>