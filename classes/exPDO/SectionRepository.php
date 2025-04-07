<?php
require_once 'repository.php';

class sectionrepository extends repository {
    public function __construct() {
        parent::__construct('sections');
    }
}

$sectionrepo = new sectionrepository();

$sections = $sectionrepo->findall();
foreach ($sections as $section) {
    echo "id: {$section->id}, nom: {$section->name}<br>";
}

$section = $sectionrepo->findbyid(1);
echo "section trouvée: id: {$section->id}, nom: {$section->name}<br>";

$newsectiondata = [
    'name' => 'nouvelle section'
];
$sectionrepo->create($newsectiondata);

$sectionrepo->delete(2);
?>