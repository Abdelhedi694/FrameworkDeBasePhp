<?php 
namespace Database;

class PdoMySQL{
/**
 * retourne un objet PDO pour intéragir avec la base de données
 * 
 * @return PDO
 */
public static function getPdo(){
                            //acces à la base de donnée, nom de l'ip, nom bdd, et deux derniers, nom utilisateur et mot de passe
    return $pdo = new \PDO("mysql:host=localhost;dbname=nom bdd;charset=utf8", "username","password", [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
]);   
}
}
?>