<?php 

class Db 
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect()
    {

        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "contact_tracer";
        $this->charset = "utf8mb4";

        try {
            //code...
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new \PDO($dsn, $this->username, $this->password);
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (Exception $e) {
            //throw $th;
            echo "Connection Failed: ".$e->getMessage();
        }
        
    }
}


?>