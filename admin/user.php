<?php 
    include_once './admin/connection.php';
    class User {
        public $name;
        public $email;
        public function __construct($name = 'null', $email = 'null')
        {
            $this->name = $name;
            $this->email = $email;
        }

        public function get_user($name, $email) {
            $cn = get_connection();
            $query = "SELECT * FROM admin WHERE name = '$name' AND email = '$email'";
            $result = $cn->query($query);
            $cn->close();
            return $result;
        }
    }
?>