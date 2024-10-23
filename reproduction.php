<?php

$menu = array(
    "0" => array('nom' => "durant", 'prenom' => "loic", 'age' => "29", 'metier' => "webmaster", 'site' => "openclassroom", 'lien' => "http://www.openclassrooms.com/"),
    "1" => array('nom' => "dupont", 'prenom' => "michel", 'age' => "55", 'metier' => "intégrateur", 'site' => "alsacreations", 'lien' => "http://www.alsacreations.com/"),
    "2" => array('nom' => "martin", 'prenom' => "yannick", 'age' => "25", 'metier' => "développeur", 'site' => "creative juiz", 'lien' => "http://www.creativejuiz.fr/")
);

echo '<pre>';
print_r($menu);
echo '</pre>';


echo '<style>
    table { border-collapse: collapse; width: auto; }
    th { background-color: black; color: white; }
    tr, td { background-color: red; color: white; }
    td a { color: white; text-decoration: none; }
</style>';


$lgTabMenu = count($menu); // Nombre de personnes dans le tableau


// Génération du tableau HTML
echo '<table border="1">';
echo '<tr><th>NOM</th><th>PRENOM</th><th>ÂGE</th><th>PROFESSION</th><th>SITE WEB</th></tr>';

for ($p = 0; $p < $lgTabMenu; $p++) {
    echo "<tr>";
    echo '<td>' . $menu[$p]['nom'] . '</td>';  // Colonne Nom
    echo '<td>' . $menu[$p]['prenom'] . '</td>';  // Colonne Prénom
    echo '<td>' . $menu[$p]['age'] . '</td>';  // Colonne Âge
    echo '<td>' . $menu[$p]['metier'] . '</td>';  // Colonne Métier
    echo '<td><a href="' . $menu[$p]['lien'] . '">' . $menu[$p]['site'] . '</a></td>';  // Colonne Site avec lien
    echo '</tr>';
}

echo '</table>';