<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management System</title>
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .navbar {
            background-color: #2c5c9a;
            padding: 10px;
            color: white;
            display: flex;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        .container {
            padding: 20px;
        }
        .title {
            background-color: #e9e9e9;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .actions a {
            margin: 0 5px;
            color: #007bff;
            text-decoration: none;
        }
        .actions a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <span><strong>Students Management System</strong></span>
        <span style="flex-grow: 1;"></span>
        <a href="MainPage.php">Home</a>
        <a href="StudentList.php">Liste des étudiants</a>
        <a href="SectionList.php">Liste des sections</a>
        <a href="loginpage.php">Logout</a>
    </div>
    
    <div class="container">
        <div class="title">Liste des sections</div>
       
        <table id="sectionsTable" class="display nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

require_once "../../classes/exPDO/EtudiantTable.php";
require_once "../../classes/exPDO/SectionTable.php";
                $sections = SectionTable::rechercherSectionByName("");

                foreach ($sections as $sec) {
                    echo "<tr>";
                    echo "<td>{$sec->id}</td>";
                    echo "<td>{$sec->name}</td>";
                    echo "<td class='actions'>  <a href='SectionList.php?id={$sec->id}'><i class='fas fa-list-ol'></i></a>";
                   

                    echo "</tr>";
                }
        
                ?>
            </tbody>
        </table>
    </div>
    <?php
    if(isset($_GET['id'])){
        echo "  there is ".EtudiantTable::countStudentsBySection($_GET['id'])." Student in the section ".SectionTable::rechercherSectionByID($_GET['id'])->name;
    }
    
    ?>
    <script>
        $(document).ready(function () {
            $('#sectionsTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    { extend: 'copy', text: '📋 Copy' },
                    { extend: 'excel', text: '📊 Excel' },
                    { extend: 'csv', text: '📁 CSV' },
                    { extend: 'pdf', text: '📄 PDF' }
                ],
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
                }
            });
        });
    </script>
</body>
</html>
