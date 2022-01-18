<?php
class Connexion
{
    // attributs de la classe Connexion paramètres de connexion à la base
    private static $hostname = 'localhost';
    private static $database = 'luddiag';
    private static $login = 'root';
    private static $password = 'root';

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
        $h = self::$hostname;
        $d = self::$database;
        $l = self::$login;
        $p = self::$password;
        $t = self::$tabUTF8;
        try {
            self::$pdo = new PDO("mysql:host=$h;dbname=$d", $l, $p, $t);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de connexion !";
        }
    }
}
