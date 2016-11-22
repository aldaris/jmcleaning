<?php
    require_once 'Mail.php';
    require '../config.php';

    //SMTP server settings
    $host = "ssl://smtp.gmail.com";
    $port = "465";

    $name = '';
    $from = '';
    $phonenumber = '';
    $messageBody = '';

    if (isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_EMAIL);
        $messageBody .= 'Visitor: ' . $name . "\n";
    }
    if (isset($_POST['email'])) {
        $from = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $messageBody .= 'Email Address: ' . $from . "\n";
    }
    if (isset($_POST['phonenumber'])) {
        $phonenumber = filter_var($_POST['phonenumber'], FILTER_SANITIZE_EMAIL);
        $messageBody .= 'Phone Number: ' . $phonenumber . "\n";
    }
    if (isset($_POST['message'])) {
        $messageBody .= 'Message: ' . "\n" . $_POST['message'] . "\n";
    }

    $messageBody = htmlspecialchars($messageBody);

    $headers = array(
      'From' => 'From:' . $from,
      'Content-Type' => 'text/plain; charset=UTF-8',
      'To' => $to,
      'Subject' => 'A message from your site visitor'
    );

    $smtp = Mail::factory(
                'smtp',
                array(
                    'host' => $host,
                    'port' => $port,
                    'auth' => true,
                    'username' => $username,
                    'password' => $password));

sleep(5);
echo '{"success": true}'; die();
    $mail = $smtp->send($to, $headers, $messageBody);

    header('Content-Type', 'application/json');
    try {
        if (PEAR::isError($mail)) {
            echo '{"success": false}';
        } else {
            echo '{"success": true}';
        }
    } catch (Exception $mail) {
        echo '{"success": false}';
    }
?>
