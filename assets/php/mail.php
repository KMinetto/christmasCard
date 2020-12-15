<?php

require_once '../../vendor/autoload.php';

if ($_SERVER['SERVER_NAME'] === 'localhost') {
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
        ->setUsername('d40de4e8613a18')
        ->setPassword('9fdc20bdcddc98')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message($_POST['title']))
        ->setFrom([$_POST['email1']])
        ->setTo([$_POST['email2']])
        ->setBody("{$_POST['message']}, voici le lien de la carte :
http://localhost/ChristmasCard/christmasCard/wishCard.php?fname=". $_POST['firstName'] . "&lname=" . $_POST['lastName'] .
            "&title=" . $_POST['title'] . "&message=" . $_POST['message']);

// Send the message
    $result = $mailer->send($message);
} else {
    $email1 = htmlspecialchars($_POST['email1']);
    $email2 = htmlspecialchars($_POST['email2']);
    $to = $email2;
    $title = $_POST['title'];
    $content = "{$_POST['message']}, voici le lien de la carte :
https://kilianm.promo-45.codeur.online/christmasCard/wishCard.php?fname=". $_POST['firstName'] . "&lname=" . $_POST['lastName'] .
        "&titleContent=Je%20te%20souhaites%20de%20merveilleuses%20fêtes&messageContent=" . $_POST['message'];
    $headers = "From: {$email1}" . "\r\n" .
        "Reply-To: {$email2}" . "\r\n" .
        'X-Mailer: PHP/' . PHPVERSION();

    mail($to, $title, $content, $headers);
}