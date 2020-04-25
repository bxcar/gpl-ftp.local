<?php

header("Content-type: text/html; charset=utf-8");

if ($_POST) {
    $to1 = 'info@gpl.ua';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $subject = "Заявка с сайта " . date("Y-m-d H:i:s");
    $message = '
		<div>' . $name . '</div>
		<div>' . $phone . '</div>
		<div>' . $comment . '</div>
	';

    $headers = "From: gpl.ua\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";

    function getCaptcha($SecretKey) {
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfVBu0UAAAAAI8-XCVUYCj0Xbp4zOJY8loypFYO&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }

    $Return = getCaptcha($_POST['g-recaptcha-response']);
    //var_dump($Return);
    if ($Return->success == true && $Return->score > 0.5) {
        mail($to1, $subject, $message, $headers);
        header("Location: /thank.php");
        return true;
    } else {
        echo 'Форма заполнена некорректно';
    }
}

?>