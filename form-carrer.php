<?php
header("Content-type: text/html; charset=utf-8");

$to1 = 'info@gpl.ua';

$subject = "Обращение с сайта " . date("Y-m-d H:i:s");
$message = '
		<div>Данные:</div>
		<div>' . $_POST['name'] . '</div>
		<div>' . $_POST['phone'] . '</div> 
		<div>' . $_POST['email'] . '</div>
		<div>' . $_POST['comment'] . '</div>
	';

if (!empty($_FILES['file']['tmp_name'])) {
    $path = $_FILES['file']['name'];
    if (copy($_FILES['file']['tmp_name'], $path)) $picture = $path;
}

$headers = "From: gpl\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";

function getCaptcha($SecretKey)
{
    $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfVBu0UAAAAAI8-XCVUYCj0Xbp4zOJY8loypFYO&response={$SecretKey}");
    $Return = json_decode($Response);
    return $Return;
}

$Return = getCaptcha($_POST['g-recaptcha-response-career']);
//var_dump($Return);
if ($Return->success == true && $Return->score > 0.5) {
    if (empty($picture)) {
        mail($to1, $subject, $message, $headers);
    } else {
        send_mail($to1, $subject, $message, $picture);
        unlink($picture);
    }
} else {
    echo 'Форма заполнена некорректно';
    return;
}

function send_mail($to, $subject, $html, $path)
{
    $fp = fopen($path, "r");
    if (!$fp) {
        exit();
    }

    $file = fread($fp, filesize($path));
    fclose($fp);

    $boundary = "--" . md5(uniqid(time()));
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
    $multipart .= "--$boundary\n";
    $kod = 'utf-8';
    $multipart .= "Content-Type: text/html; charset=$kod\n";
    $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n";
    $multipart .= "$html\n\n";
    $message_part = "--$boundary\n";
    $message_part .= "Content-Type: application/octet-stream\n";
    $message_part .= "Content-Transfer-Encoding: base64\n";
    $message_part .= "Content-Disposition: attachment; filename = \"" . $path . "\"\n\n";
    $message_part .= chunk_split(base64_encode($file)) . "\n";
    $multipart .= $message_part . "--$boundary--\n";

    if (!mail($to, $subject, $multipart, $headers)) {
        exit();
    }
}

header("Location: /thank.php");
return true;
?>