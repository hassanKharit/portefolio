<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'hasjok@msn.com';
    $subject = "Message de $name $surname";
    $body = "Vous avez reçu un nouveau message de votre site web :\n\n".
            "Nom: $name\n".
            "Nom de famille: $surname\n".
            "Email: $email\n\n".
            "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
