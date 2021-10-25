<?php
namespace App\Models;
use PDO;
use PDOException;
class DBConnect
{
    public string $username;
    public string $password;

    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    public function connect()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=thi", $this->username,$this->password);
        }catch(PDOException $exception){
            echo "database error !!!";
            exit();
        }
    }
}