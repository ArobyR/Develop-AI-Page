<?php 
    include_once './admin/connection.php';

    class Galery {
        public $id;
        public $title;
        public $description;
        public $url_img;
        
        public function __construct($id = 'null', $title = 'null', $description = 'null', $url_img = 'null')
        {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            $this->url_img = $url_img;
        }

        public function get_galery() {
            $cn = get_connection();
            $query = "SELECT * FROM galery";
            $result = $cn->query($query);
            $cn->close();
            return $result;
        }
    }
?>