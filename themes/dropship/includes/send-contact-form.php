<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");

$postData = [];
$postData['toTop'] = true;

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


$admin_email = get_field('admin_email','theme-settings');
$to = $admin_email;


$sitename = echo get_bloginfo();
$subject = $sitename . ':Contact form';

$message = '
<html>
<head>
    <title>' . $subject . '</title>
</head>
<body>
<p><b>Vardas Pavardė:</b> '.$name.'</p>
<p><b>Telefonas:</b> '.$phone.'</p>
<p><b>El. paštas:</b> '.$email.'</p>
<p><b>Cover Letter:</b> '.$message.'</p>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: ExpertMedia <info@expertmedia.lt>';

mail($to, $subject, $message, implode("\r\n", $headers));

