<?php
require_once "../../classes/exPDO/EtudiantTable.php";
require_once "../../classes/exPDO/SectionTable.php";
ob_start();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updatedName = $_POST['name'];
    $updatedBirthday = $_POST['birthday'];
    $updatedSectionId = $_POST['section_id'];
    $updatedImage = $_POST['image']; 

    EtudiantTable::ajouterEtudiant( $updatedName, $updatedBirthday, $updatedSectionId, $updatedImage);
    header("Location: StudentList.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>

<h2>Add a new Student </h2>

<form method="POST" action="ajoutEtudiant.php?name=<?php echo $student->name; ?>">
    <input type="hidden" name="id" value="<?php echo $student->id; ?>">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" ><br><br>
    <label for="img">img (shouldn't be longer than 255 char ):</label>
    <input type="url" id="image" name="image" ><br><br>
    <label for="section_id">Section:</label>
    <select id="section_id" name="section_id" >
        <?php
        
        $sections = SectionTable::rechercherSectionByName("");
        foreach ($sections as $section) {
            $selected = ($section->id == $student->section_id) ? 'selected' : '';
            echo "<option value='{$section->id}' {$selected}>{$section->name}</option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Save Changes</button>
</form>

<br>
<a href="StudentList.php">Back to Student List</a>

</body>
</html>
<?php ob_end_flush();?>