<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\formation.css"/>
        <title>Formation</title>
    </head>
    </body>
</html>

<?php
require_once("yaml\yaml.php");
$data=yaml_parse_file('fichieryaml/Formation.yaml');

echo "<h2>Formations</h2>\n";
$Formations=$data["Formations"] ;
echo "<p>".ucfirst($Formations["Etudes"])."</p>\n";
?>

<body>
    <div class="h">
        <?php echo "<h>".ucfirst($Formations["etude1"])."</h>\n";?>
    </div>
    <div class="container">
        <?php echo "<p>".ucfirst($Formations["bdc"])."</p>\n";?>
    </div>
    <div class="h">
        <?php echo "<h>".ucfirst($Formations["etude2"])."</h>\n";?>
    </div>
    <div class="container">
        <img src="image\image Lycée Charle Tellier.jpg">
    </div>
    <?php echo "<p>".ucfirst($Formations["bpsn"])."</p>\n";?>
</body>