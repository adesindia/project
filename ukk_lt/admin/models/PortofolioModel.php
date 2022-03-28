<?php

class PortofolioModel{

    private $host   = DB_HOST;
    private $user   = DB_USER;
    private $pass   = DB_PASS;
    private $db_name=DB_NAME;

    private $dbh;
    private $stmt;
    public function__construct()
    {
        $dsn = 'mysql:host='.$this->host. ';dbname='.$this->db_name;
        $option =[
            PDO::ATTR_PERSISTENT =>true,
            PDO::ATTR_ARMODE =>PDO::ERRMODE_EXCEPTION


        ];
        try{
            $this->dbh =new
        }

    }
}