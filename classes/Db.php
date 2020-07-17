<?php
error_reporting(1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");
/**
 * Description of DB
 *
 * @author Michael
 */
class Db {
    //Database Connection
    //check if there is connection
    public $isConn;
    public $datab;
        $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    //connect to db
    public function __construct($username = $cleardb_url["root"], $password = "", $host = $cleardb_url["host"], $dbname = "newsletter", $options = []) {
        $this->isConn = TRUE;
        try {
            $this->datab = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }


}
