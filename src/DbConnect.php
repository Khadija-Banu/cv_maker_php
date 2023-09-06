<?php
namespace App;

use PDO;
use PDOException;

class DbConnect{

    public $host = 'localhost';
    public $db_name = 'cv_maker_php';
    public $db_user = 'root';
    public $db_pass = '';
    public $pdo;


    public function __construct()
    {

        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=UTF8";

        try {
            $pdoOBJ = new PDO($dsn, $this->db_user, $this->db_pass);

            if ($pdoOBJ) {
                echo "Connected to the  database successfully!";
               $this->pdo = $pdoOBJ;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
  


?>