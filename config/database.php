<?php

class Database
{

    private $host = "ec2-34-193-113-223.compute-1.amazonaws.com";
    private $database_name = "d9fo3ar5rer89e";
    private $user = "rvlvigxnvjznqu";
    private $password = "b84eb851321b459eab114ec8035e4599b240341f518cf021e05daafbc6188fab";

    public $con;

    public function getConection()
    {
        $this->con = null;

        try {
            $this->con = new PDO("pgsql:host=" . $this->host . ";port=5432;dbname=" . $this->database_name, $this->user, $this->password);
           
        } catch (PDOException $exception) {
            echo "Database could not be connected: " . $exception->getMessage();
        }

        return $this->con;
    }
}
