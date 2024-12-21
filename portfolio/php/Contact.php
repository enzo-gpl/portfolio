<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\contact.css"/>
        <title>Contact</title>
    </head>
</html>

<?php

session_start();
if (!isset($_SESSION['captcha'])) {
    $_SESSION['captcha'] = rand(1000, 9999);
}

require_once("yaml\yaml.php");
$data = yaml_parse_file('fichieryaml/Contact.yaml');

echo "<h2>Contactez moi</h2>\n";
$contact = $data["contact"];
echo "<p>" . ucfirst($contact["email"]) . "</p>\n";
echo "<p>" . ucfirst($contact["numéro"]) . "</p>\n";
echo "<h2>Formulaire de contact</h2>\n";
?>

<form action="" method="POST">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message :</label><br>
    <textarea id="message" name="message" rows="4" required></textarea>

    <label for="captcha">Veuillez entrer le texte ci-dessous :</label>
    <div class="captcha">
        <span id="captchaText"><?php echo $_SESSION['captcha']; ?></span>
    </div>
    <input type="text" name="userInput" required>
    <button type="submit" name="validate">Soumettre</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['validate'])) {
    $userInput = $_POST['userInput'];

    if ($userInput == $_SESSION['captcha']) {
        echo "<p>Captcha validé avec succès !</p>";

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Préparer l'email
        $to = $contact["email"]; // Adresse email du destinataire (depuis le fichier YAML)
        $subject = "Nouveau message de contact de $name";
        $emailMessage = "
        <html>
        <head>
            <title>Message de contact</title>
        </head>
        <body>
            <h2>Vous avez reçu un nouveau message</h2>
            <p><strong>Nom :</strong> $name</p>
            <p><strong>Email :</strong> $email</p>
            <p><strong>Message :</strong></p>
            <p>$message</p>
        </body>
        </html>
        ";

        // En-têtes
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: $email" . "\r\n";

        // Envoyer l'email
        if (mail($to, $subject, $emailMessage, $headers)) {
            echo "<p>Email envoyé avec succès.</p>";
        } else {
            echo "<p>Erreur lors de l'envoi de l'email.</p>";
        }

        $_SESSION['captcha'] = rand(1000, 9999);
    } else {
        echo "<p>Erreur : Captcha invalide. Veuillez réessayer.</p>";
    }
}
?>