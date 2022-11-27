<?php
class reservation {
    private $pdo;
    private $stmt;
    public $error;
    function_construct () {
        try {
            $this->pdo = new PDO(
                "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHAR,DB_USER,DB_PASS,[PDO::ATTR_MODE => PDO::ERRMODE_EXCEPTION]
            );

        } catch (\Exception $ex) {exit(1ex ->getMessage()); } 
    }
//DESTRUCTOR
function_destruct() {
    $this->pdo = null;
    $this->stnt = null;
 }
}
//database settings
define("DB_HOST","localhost");
define("DB_NAME","test");
define("DB_CHAR","utf8");
define("DB_USER","root");
define("DB_PASS","");

//USER RESERVED
$_RSV = new Reservation();
