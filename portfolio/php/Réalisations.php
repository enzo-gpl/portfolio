<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\Réalisation.css"/>
        <title>Présentation</title>
    </head>
</html>

<?php

require_once("yaml\yaml.php");
$data=yaml_parse_file('fichieryaml/Réalisation.yaml');

echo "<h2>Réalisation</h2>\n";
$Réalisation=$data["Réalisation"] ;
echo "<p>".ucfirst($Réalisation["Projets"])."</p>\n";
echo "<p>".ucfirst($Réalisation["pourquoi"])."</p>\n";

?>
<body>
    <div class="container">
        <a href="#presentation" class="button">Accueil</a>
    </div>
</body>