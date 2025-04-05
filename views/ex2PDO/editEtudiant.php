<?php
require_once "../../classes/exPDO/EtudiantTable.php";
require_once "../../classes/exPDO/SectionTable.php";

if (isset($_GET["name"])) {
    // Fetch the student's details based on the name
    $students = EtudiantTable::rechercherEtudiantByName($_GET["name"]);
    if (count($students) > 0) {
        $student = $students[0]; // Assume there's only one student matching the name
    } else {
        echo "Student not found!";
        exit;
    }
} else {
    echo "No student selected!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updatedName = $_POST['name'];
    $updatedBirthday = $_POST['birthday'];
    $updatedSectionId = $_POST['section_id'];

    EtudiantTable::updateStudent($student->id, $updatedName, $updatedBirthday, $updatedSectionId);
    echo "Student information updated successfully!";
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

<h2>Edit Student Information</h2>

<form method="POST" action="editStudent.php?name=<?php echo $student->name; ?>">
    <input type="hidden" name="id" value="<?php echo $student->id; ?>">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($student->name); ?>" required><br><br>

    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" value="<?php echo $student->birthday; ?>" required><br><br>

    <label for="section_id">Section:</label>
    <select id="section_id" name="section_id" required>
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
