<?php

use PSpell\Config;

require_once 'Configuration.php';
class DatabaseConnexion{
private static $_dbname;
private static $_user ;
private static $_pwd ;
private static $_host;
private static $_bdd = null;
private function __construct()
{
    $config=Config();
    self::$_dbname = $config['dbname'];
    self::$_user = $config['user'];
    self::$_pwd = $config['pwd'];
    self::$_host = $config['host'];
try {
self::$_bdd = new PDO("mysql:host=" . self::$_host . ";dbname=" . self::$_dbname . ";charset=utf8", self::$_user, self::$_pwd,
array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
} catch (PDOException $e) {
die('Erreur : ' . $e->getMessage());
}
}
public static function getInstance()
{
if (!self::$_bdd) {
new DatabaseConnexion();
}
return (self::$_bdd);
}
}
?>