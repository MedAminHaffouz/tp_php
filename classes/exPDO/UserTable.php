<?php 
require_once 'DatabaseConnexion.php';

class UsersTable {

    public static function ajouterUser($username, $email, $password, $role)  {
        $connex = DatabaseConnexion::getInstance();
        $req = $connex->prepare("INSERT INTO Users(username, email, password, role) VALUES(?, ?, ?, ?);");
        $req->execute(array($username, $email, $password, $role));
    }


    public static function rechercherUserByUsername($username) {
        if($username != "") {
            $connex = DatabaseConnexion::getInstance();
            $req = "SELECT * FROM Users WHERE username = ?";
            $res = $connex->prepare($req);
            $res->execute([$username]);
            return $res->fetch(PDO::FETCH_OBJ);
        } else {
            $connex = DatabaseConnexion::getInstance();
            $req = "SELECT * FROM Users";
            $res = $connex->query($req);
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
    public static function deleteUserByUsername($username) {
        $connex = DatabaseConnexion::getInstance();
        $req = $connex->prepare("DELETE FROM Users WHERE username = ?");
        $req->execute(array($username));
    }
}
?>
