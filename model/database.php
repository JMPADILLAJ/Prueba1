<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=josepj.mysql.database.azure.com;dbname=prueba1;charset=utf8', 'jose@josepj', 'infantLobin081289');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
