<?php
require_once 'repository.php';

class userrepository extends repository {
    public function __construct() {
        parent::__construct('users');
    }
}

$userrepo = new userrepository();

$users = $userrepo->findall();
foreach ($users as $user) {
    echo "id: {$user->id}, username: {$user->username}, email: {$user->email}<br>";
}

$user = $userrepo->findbyid(1);
echo "utilisateur trouvé: id: {$user->id}, username: {$user->username}, email: {$user->email}<br>";

$newuserdata = [
    'username' => 'john_doe',
    'email' => 'john@example.com',
    'password' => 'password123',
    'role' => 'user'
];
$userrepo->create($newuserdata);

$userrepo->delete(3);
?>
