<?php
class DataBase{
    protected static $cnx;
    public static  function connect_db(){
        if (!self::$cnx) {
            try {
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ];
                self::$cnx =  new PDO("mysql:host=localhost;dbname=55_dababase", "root", "", $options);
            } catch (PDOException $e) {
                die("erreur de connexion a la base de donnees " . $e->getMessage());
            }
        }
    }
}