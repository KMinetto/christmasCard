<?php

require_once '../../vendor/autoload.php';



//Create the Transport
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
        ->setUsername('e730313f24c366')
        ->setPassword('25d5b38684f393')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create Message
    $message = (new Swift_Message($_POST['message']))
        ->setFrom($_POST['email1'])
        ->setTo([$_POST['email2']])
        ->setBody(htmlspecialchars($_POST['message']));

    $result = $mailer->send($message);

}
else {
    $email = htmlspecialchars($_POST['email1']);
    $to      = $_POST['email2'];
    $subject = htmlspecialchars($_POST['subjectMail']);
    $message = htmlspecialchars($_POST['textMail']);
    $headers = "From: {$email}" . "\r\n" .
        "Reply-To: {$email}" . "\r\n" .
        'X-Mailer: PHP/' . PHP_VERSION;

    mail($to, $subject, $message, $headers);
}