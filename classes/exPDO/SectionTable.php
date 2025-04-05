<?php 
require_once 'DatabaseConnexion.php';
 class SectionTable{
    public static function ajouterSection($name)  {
        $connex=DatabaseConnexion::getInstance();
        $req=$connex->prepare("insert into Sections(name) values(?);");
        $req->execute(array($name));
    }
    public static function rechercherSectionByName($name) {
        if($name != "") {
            $connex = DatabaseConnexion::getInstance();
            $req = "SELECT * FROM Sections WHERE name = ?";
            $res = $connex->prepare($req);
            $res->execute([$name]);
            return $res->fetch(PDO::FETCH_OBJ);
        } else {
            $connex = DatabaseConnexion::getInstance();
            $req = "SELECT * FROM Sections";
            $res = $connex->query($req);
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    }
    public static function rechercherSectionByID($id) {
        if($id != "") {
            $connex = DatabaseConnexion::getInstance();
            $req = "SELECT * FROM Sections WHERE id = ?";
            $res = $connex->prepare($req);
            $res->execute([$id]);
            return $res->fetch(PDO::FETCH_OBJ);
        } else {
            $connex = DatabaseConnexion::getInstance();
            $req = "SELECT * FROM Sections";
            $res = $connex->query($req);
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
    public static function deleteSectionByName($name) {
        $connex = DatabaseConnexion::getInstance();
        $req = $connex->prepare("DELETE FROM Sections WHERE name = ?");
        $req->execute(array($name));
    }
 }

?>