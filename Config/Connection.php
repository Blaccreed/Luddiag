<?php
class Connexion
{
    // attributs de la classe Connexion paramètres de connexion à la base
    private static $hostname = 'ec2-79-125-93-182.eu-west-1.compute.amazonaws.com';
    private static $database = 'd1fed40j8f36go';
    private static $login = 'hkyuvxishugyfr';
    private static $password = 'c31891e28d73419204922937201ff7ef899e30ad7dcbe50767b67a10a75565c1';
    private static $port = 5432;

    // attribut de la classe Connexion paramètres d'encodage
    private static $tabUTF8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    // attribut de la classe Connexion qui recevra l'instance PDO
    private static $pdo;

    // getter de pdo
    public static function pdo()
    {return self::$pdo;}

    // fonction de connexion
    public static function connect()
    {
        $host = self::$hostname;
        $db = self::$database;
        $lgn = self::$login;
        $pass = self::$password;
        $tf8 = self::$tabUTF8;
        $port = self::$port;
        try {
            self::$pdo = new PDO("pgsql:" . sprintf(
                "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                $host,
                $port,
                $lgn,
                $pass,
                ltrim($db, "/")
            ));
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de connexion !";
        }
    }
}
