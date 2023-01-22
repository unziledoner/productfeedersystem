<?php

include '../app/config/Dbconfig.php';

class MySQL extends Dbconfig
{
    protected $databaseName;
    protected $hostName;
    protected $username;
    protected $password;

    private static $instance = null;
    private $conn = null;

    public function __construct()
    {
        parent::__construct();
        $this->databaseName = $this->dbName;
        $this->hostName = $this->serverName;
        $this->username = $this->username;
        $this->password = $this->password;

        try {
            $this->conn = new PDO("mysql:host=".$this->hostName.";dbname=".$this->databaseName.';charset=utf8mb4;',$this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "DB Connection Error !";
            http_response_code(500);
            die();
        }
    }

    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new MySQL;
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }

}