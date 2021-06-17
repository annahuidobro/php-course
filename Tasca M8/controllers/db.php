<?php

class Connection
{
    private $host;
    private $username;
    private $passwd;
    private $dbname;

    function __construct()
    {
        $this->host = '127.0.0.1';
        $this->username = 'root';
        $this->passwd = '';
        $this->dbname = 'tasca_m8';
    }

    function create()
    {
        return new mysqli($this->host, $this->username, $this->passwd, $this->dbname);
    }

    function close($connection)
    {
        $connection->close();
    }
}