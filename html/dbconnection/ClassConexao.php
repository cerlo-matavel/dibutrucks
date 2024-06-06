<?php

 class ClassConexao{

    public function conectaDB(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "root";
        $db = "db_dibu_trucks";

        try{
            $Con = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser, $dbpass);
            return $Con;
        }catch(PDOException $Erro){
            return $Erro->getMessage();
        }
    }

}

// function OpenCon()
// {
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "root";
// $db = "db_dibu_trucks";
// $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
// return $conn;
// }
// function CloseCon($conn)
// {
// $conn -> close();
// }
?>