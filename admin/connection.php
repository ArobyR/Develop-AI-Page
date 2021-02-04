<?php
    function get_connection() {
        $host = 'localhost';
        $user = 'root';
        $pwd = '';
        $data_base = 'web';
        $cn = mysqli_connect($host, $user, $pwd, $data_base);
        if ($cn->connect_errno) {
            echo 'Connection Error';
            return null;
        }
        else {
        return $cn;
        }
    }
?>