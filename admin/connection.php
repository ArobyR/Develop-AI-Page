<?php
    function get_connection() {
        $host = 'localhost';
        $user = 'root';
        $pwd = '';
        $data_base = 'web';
        $cn = mysqli_connect($host, $user, $pwd, $data_base);
        if (!$cn) {
            die("Connection failed" . mysqli_connect_error());
        }
        else {
        return $cn;
        }
    }
?>