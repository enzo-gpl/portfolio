<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\accueil.css"/>
        <title>Port folio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="menu">
        <ul>
            <a href="#presentation" class="button">Accueil</a>
            <a href="#Compétence" class="button">Compétences</a>
            <a href="#réalisation" class="button">Réalisation</a>
            <a href="#formation" class="button">Formation</a>
            <a href="#contact" class="button">Contact</a>
        </ul>
    </div>
    <div id="presentation"class="presentation">
        <?php echo "<h2>Présentation</h2>\n";?>
        <img src="image\image-de-profil.png">
        <?php

        require_once("yaml\yaml.php");
        $data=yaml_parse_file('fichieryaml/acceuil.yaml');

        $Accueil=$data["Accueil"] ;
        echo "<p>".ucfirst($Accueil["prenom"])."  ".$Accueil["nom"]."</p>\n";
        echo "<p>".ucfirst($Accueil["accroche"])." ".ucfirst($Accueil["présentation"])."</p>\n";
        ?>
    </div>
    <div id="Compétence"class="Compétence">
        <?php include 'php/Compétence.php'; ?>
    </div>
    <div id="réalisation"class="réalisation">
        <?php include 'php/Réalisations.php'; ?>
    </div>
    <div id="formation"class="formation">
        <?php include 'php/Formation.php'; ?>
    </div>
    <br>
    <div id="contact"class="contact">
        <?php include 'php/Contact.php'; ?>
    </body>
</html>