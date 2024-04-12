<?php
class sql
{
    public $conn;

    public function __construct(){
        $user = "root";
        $pass = "";
        $server = "localhost";
        $db = "prueba12024";

        $this->conn = new mysqli($server, $user, $pass, $db);
    }

    public function ejecutar($sql){
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>