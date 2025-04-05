<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail d'etudiant</title>
</head>
<body>
    <?php 
     require_once "../classes/exPDO/DatabaseConnexion.php" ;
      if(isset($_GET['id'])){
        $connex=DatabaseConnexion::getInstance();
        $req=$connex->prepare("select * from student where id=?");
        $id=$_GET['id'];
        $req->execute(array($id));
        $student=$req->fetch(PDO::FETCH_OBJ);
        echo "name: ".$student->name."<br>";
        echo "date de naissance: ".$student->datenaissance."<br>";
      }
    ?>
</body>
</html>