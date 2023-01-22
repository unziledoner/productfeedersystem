<?php

class DbConfig
{
    protected $serverName;
    protected $username;
    protected $password;
    protected $dbName;

    public function __construct()
    {
        $this->serverName = 'localhost';
        $this->username = 'root';
        $this->password = '123456';
        $this->dbName = 'productfeedersystem';
    }
}