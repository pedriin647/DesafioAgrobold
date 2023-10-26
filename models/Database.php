<?php


class Database{
    public function getConnection(){
        try{
            $pdo = new PDO("mysql:dbname=agrobold;host=localhost","root","");
            return $pdo;
        }catch(PDOException $err){
            echo $err->getMessage();
        }
    }
}