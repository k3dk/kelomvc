<?php

    class Post
    {
        public $id;
        public $author;
        public $content;

        public function __construct($id, $author, $content)
        {
            $this->id       =$id;
            $this->author   =$author;
            $this->content  =$content;
        }

        public static function all()
        {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT * FROM posts');

            foreach($req->fetchAll() as $post)
            {
                $list[] = new Post($post['id'], $post['author'],$post['content']);
            }
        }
    }

?>