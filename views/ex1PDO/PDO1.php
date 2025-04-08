<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthday</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once "../../classes/exPDO/DatabaseConnexion.php" ;
         $connex=DatabaseConnexion::getInstance();
         $req="select * from student";
         $response=$connex->query($req);
         $students=$response->fetchAll(PDO::FETCH_OBJ);
         foreach($students as $student){
            echo"<tr> <td>".$student->id."</td>
            <td>".$student->name."</td>
            <td>".$student->datenaissance."</td>";
            echo  "<td><a href=\"detailEtudiant.php?id=" . $student->id . "\">ℹ️</a></td>";
            echo "</tr>";
         }
        
        
        ?>
    </tbody>
</table>

</body>
</html>
