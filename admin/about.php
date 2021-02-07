<?php 
    include_once './admin/connection.php';
    class About {
        public $id;
        public $description;
        public $url_img;

        public function __construct($id = 'null', $description = 'null', $url_img = null)
        {
            $this->id = $id;
            $this->description = $description;
            $this->url_img = $url_img;
        }

        public function get_about() {
            $cn = get_connection();
            $query = "SELECT * FROM about";
            $result = $cn->query($query);
            $cn->close();
            return $result;            
        }
    }
?>