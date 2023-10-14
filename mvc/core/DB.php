<?php
    class DB extends PDO{
        public $con;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "bookstote";

        public function __construct(){
            try {
                $this->con = new PDO('mysql:host=localhost;dbname=bookstote', 'root', '');
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $error_message = 'Không thể kết nối đến CSDL';
                echo $error_message;
                exit();
            }

        }
    }

?>