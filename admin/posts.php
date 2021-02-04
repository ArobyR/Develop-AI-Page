<?php
include_once './admin/connection.php';

class Post
{
    public $id;
    public $title;
    public $paragraph;
    public $url_img;

    function __construct($id = 'null', $title = 'null', $paragraph = 'null', $url_img = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->paragraph = $paragraph;
        $this->url_img = $url_img;
    }

    public function get_posts($limit=null)
    {
        $cn = get_connection();
        $query = "SELECT * FROM posts";
        if ($limit) {
            $query = $query . " ORDER BY id DESC  LIMIT 0, $limit ";
        }

        $result = $cn->query($query);
        $cn->close();
        return $result;
    }
}
