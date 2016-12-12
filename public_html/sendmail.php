<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once '../config.php';

    //SMTP server settings
    $host = "ssl://smtp.gmail.com";
    $port = "465";

    $messageBody = '';

    if (isset($_POST['g-recaptcha-response'])) {
        $response = $_POST['g-recaptcha-response'];
        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
        $result = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
        if (!$result->isSuccess()) {
            echo '{"success": false, "message": "Unable to verify CAPTCHA, please try again."}';
            return;
        }
    } else {
        echo '{"success": false, "message", "Invalid request."}';
        return;
    }

    if (isset($_POST['name'])) {
        $messageBody .= 'Name: ' . $_POST['name'] . "\n";
    }
    if (isset($_POST['email'])) {
        $from = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $messageBody .= 'E-mail: ' . $from . "\n";
    }
    if (isset($_POST['phonenumber'])) {
        $messageBody .= 'Phone #: ' . $_POST['phonenumber'] . "\n";
    }
    if (isset($_POST['message'])) {
        $messageBody .= 'Message: ' . "\n" . $_POST['message'] . "\n";
    }

    $messageBody = htmlspecialchars($messageBody);

    $headers = array(
      'From' => 'From:' . $sender,
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
