<?php 
    // variabel dalam class = PROPERTI
    class DB {
        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";
        
        // function dalam class = METHOD
        public function __construct()
        {
            echo "CONSTRUCT";
        }

        public function selectData ()
        {
            echo "select data";
        }

        public function getDatabase()
        {
            return $this->database;
        }

        public function tampil()
        {
            $this->selectData();
        }

        public static function insert()
        {
            echo "STATIC FUNCTION";
        }
    }

    DB :: insert();

    echo "<br>";

    $db = new DB;

    echo "<br>";

    $db->selectData();

    echo "<br>";

    echo $db->host;

    echo "<br>";

    echo $db->getDatabase();

    echo "<br>"; echo "<br>";

    $db->tampil();


?>