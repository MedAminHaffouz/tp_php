<?php 
require_once 'DatabaseConnexion.php';
 class EtudiantTable{
    public static function ajouterEtudiant($name,$birthday,$image,$section)  {
        $connex=DatabaseConnexion::getInstance();
        $req=$connex->prepare("insert into Etudiants(name,birthday,image,section_id) values(?,?,?,?);");
        $section_id=SectionTable::rechercherSectionByName($section)->id;
        $req->execute(array($name,$birthday,$image,$section_id));
    }
    public static function rechercherEtudiantByName($name){
        if($name!=""){
            $connex = DatabaseConnexion::getInstance();
            $req = $connex->prepare("SELECT * FROM Etudiants WHERE name = ?");
            $req->execute(array($name));
      return  $req->fetchAll(PDO::FETCH_OBJ);
    }
    else{
        $connex=DatabaseConnexion::getInstance();
        $req="select * from Etudiants" ;
    $res=$connex->query($req);
      return  $res->fetchAll(PDO::FETCH_OBJ);
    }
}
    public static function deleteEtudiantByName($name) {
        $connex = DatabaseConnexion::getInstance();
        $req = $connex->prepare("DELETE FROM Etudiants WHERE name = ?");
        $req->execute(array($name));
    }
    public static function rechercherfilterByName($name) {
        $connex = DatabaseConnexion::getInstance();
        $req = "SELECT * FROM Etudiants WHERE name LIKE ?";
        $stmt = $connex->prepare($req);
        $stmt->execute(["%$name%"]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

        public static function updateStudent($id,$name,$birthday,$section_id,$image_id){
            $connex=DatabaseConnexion::getInstance();
            $query="UPDATE Etudiants SET name = ?, birthday = ?, section_id = ? ,image=? WHERE id = ?";
            $stmt=$connex->prepare($query);
            $stmt->execute([$name,$birthday,$section_id,$image_id,$id]);
            if($stmt->rowCount()>0){
                return true;
            }else{
                return false;
            }
        }
        public static function countStudentsBySection($section_id) {
            $connex = DatabaseConnexion::getInstance();
            $req = $connex->prepare("SELECT COUNT(*) FROM Etudiants WHERE section_id = ?");
            $req->execute([$section_id]);
            return $req->fetchColumn(); 
        }
    
    
    
 }

?>