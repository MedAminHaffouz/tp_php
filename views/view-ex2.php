<?php
require_once '../classes/ex2/GestionnaireSessions.php';

// Pour la bouton RESET
if (isset($_POST['reset'])) {
    SessionManager::reset();
    // Redirection pour éviter la résoumission car en refresh parfois la méthode POST serait envoyé une autre fois
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

SessionManager::incrementVisites();
$visites = SessionManager::getVisites();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>

<form method="post">
    <button type="submit" name="reset">Réinitialiser</button>
</form>

<?php if ($visites === 1) : ?>
    <h2>Bienvenue !</h2>
<?php else : ?>
    <h2>Merci pour votre fidélité (<?= $visites; ?> visites).</h2>
<?php endif; ?>
</body>
</html>