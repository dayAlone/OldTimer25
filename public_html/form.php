<?
$EOL = "\r\n";

$body = "<br />
С сайта было отправлено сообщение следующего содержания:<br />
____________________________________________________________<br />
<br />
";
$body .= 'Email : '.nl2br($_REQUEST['email'])."<br /><br />\r\n";
$body .= 'Кол-во мест : '.nl2br($_REQUEST['number'])."<br /><br />\r\n";


$boundary = "--".md5(uniqid(time()));
$un = strtoupper(uniqid(time()));
$headers = "MIME-Version: 1.0;$EOL";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";
$headers .= "From: ".$_SERVER['HTTP_HOST']." <mailer@".$_SERVER['HTTP_HOST'].">\r\n";
$multipart  = "--$boundary$EOL";
$multipart .= "Content-Type: text/html; charset=UTF-8$EOL";
$multipart .= "Content-Transfer-Encoding: base64$EOL";
$multipart .= $EOL; // ðàçäåë ìåæäó çàãîëîâêàìè è òåëîì html-÷àñòè
$multipart .= chunk_split(base64_encode($body));
//$multipart .=  "$EOL--$boundary$EOL";
//$multipart .= "Content-Type: application/octet-stream; name=\"$name\"$EOL";
//$multipart .= "Content-Transfer-Encoding: base64$EOL";
//$multipart .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n";
//$multipart .= $EOL;
//$multipart .= chunk_split(base64_encode($file));
//$multipart .= "$EOL--$boundary--$EOL";

$body .= "<br />
____________________________________________________________<br />
";

$subject = "Регистрация на конференцию | www.oldtimer.ru";
$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

foreach (array('spec@oldtimer.ru') as $email) {
	mail($email, $subject, $multipart, $headers);
}
echo 'success';
?>
