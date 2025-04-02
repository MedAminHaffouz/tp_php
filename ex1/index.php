<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <style>
        table {
            width: 400px;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th {
            background: #f5f5f5;
            padding: 10px;
            font-weight: bold;
            text-align: center;
            border: 1px solid #ccc;
        }
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        .page{
            display: flex;
            flex-direction: row;
        }
        .green { background: #d4edda; }
        .red { background: #f8d7da; }
        .yellow { background: #fff3cd; }
        .blue { background: #cce5ff; }
    </style>
</head>
<body><div class="page">
    <table>
        <tr>
            <th>Aymen</th>
        </tr>
        <tr><td class="green">11</td></tr>
        <tr><td class="green">13</td></tr>
        <tr><td class="green">18</td></tr>
        <tr><td class="red">7</td></tr>
        <tr><td class="yellow">10</td></tr>
        <tr><td class="green">13</td></tr>
        <tr><td class="red">2</td></tr>
        <tr><td class="red">5</td></tr>
        <tr><td class="red">1</td></tr>
        <tr><td class="blue"><?php 
        require_once 'Etudiant.php';
        $etud= new Etudiant("aymen",[11,13,18,7,10,13,2,5,1]);
        echo "votre moyenne est ".(string)$etud->moyenne() ;
        ?></td></tr>
    </table>
    
    <table>
        <tr>
            <th>Skander</th>
        </tr>
        <tr><td class="green">15</td></tr>
        <tr><td class="red">9</td></tr>
        <tr><td class="red">8</td></tr>
        <tr><td class="green">16</td></tr>
        <tr><td class="blue"><?php 
        require_once 'Etudiant.php';
        $etud= new Etudiant("skander",[15,9,8,16]);
        echo "votre moyenne est ".(string)$etud->moyenne() ;
        ?></td></tr>
    </table>
    </div>
</body>
</html>
