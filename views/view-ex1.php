<?php require_once 'classes/ex1/Etudiant.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Exercice1</title>
    <style>
        .container {display: flex;}

        .item {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<?php
$aymen=new Etudiant(nom:"Aymen",notes:[11,13,18,7,10,13,2,5,1]);
$skander=new Etudiant(nom:"Skander",notes:[15,9,8,16]);
function couleur($val){
    if ($val<10){return 'red';}
    if ($val>10){return 'green';}
    else {return 'orange';}
}
function style($val){
    return "style=background-color:".couleur($val);
}
?>
<div class="container">
    <div class="item">
        <div>
            <p><?php echo $aymen->getNom(); ?></p>
            <?php
            $notet_aymen=$aymen->getNotes();
            foreach ($notet_aymen as $note){
                echo "<p".style($note).$note."</p>";
            }
            ?>
            <p style="background-color: aqua">Votre mpoyenne est <?php echo $aymen->calcMoyenne()?></p>
        </div>
    </div>
    <div class="item">
        <h3><?php echo $skander->getNom(); ?></h3>
    </div>
</div>
</body>
</html>
