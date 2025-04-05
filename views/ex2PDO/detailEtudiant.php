<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail d'étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 60%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .student-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .student-info div {
            margin: 10px 0;
        }

        .student-info label {
            font-weight: bold;
        }

        .student-info img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .back-link {
            margin-top: 20px;
            text-align: center;
        }

        .back-link a {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <?php 
            require_once "../../classes/exPDO/EtudiantTable.php";
            require_once "../../classes/exPDO/SectionTable.php";
        
            if(isset($_GET["name"])){
                $students = EtudiantTable::rechercherEtudiantByName($_GET["name"]);
                foreach($students as $student){
                    echo "<div class='student-info'>";
                    echo "<img src='{$student->image}' alt='Profile'>";
                    echo "<div><label>ID:</label> {$student->id}</div>";
                    echo "<div><label>Name:</label> {$student->name}</div>";
                    echo "<div><label>Birthday:</label> {$student->birthday}</div>";
                    echo "<div><label>Section:</label> " . SectionTable::rechercherSectionByID($student->section_id)->name . "</div>";
                    echo "</div>";
                }
            }
        ?>

        <div class="back-link">
            <a href="StudentList.php">Back to Student List</a>
        </div>
    </div>

</body>
</html>
