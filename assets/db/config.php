<?php
class Database
{
    private $host = "localhost";
    private $username = "id729909_upx";
    private $password = "upx-academy";
    private $dbname = "id729909_upx";
    public $conn;

    public function Database_Connection()
    {
        $this->conn = NULL;
        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;

    }


}
?>
