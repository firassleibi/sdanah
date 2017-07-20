<?php

if(!$_POST) exit;



if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$city    = $_POST['city'];
$ctype  = $_POST['ctype'];
$comments = $_POST['comments'];


if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


$address = "master@sdanah.com";

$e_subject = 'رسالة من '.$name;

$l1="الصفحة : تواصل معنا". PHP_EOL . PHP_EOL;;
$l2="الاسم : ".$name. PHP_EOL . PHP_EOL;;
$l7="الهاتف : ".$phone. PHP_EOL . PHP_EOL;;
$l3="البريد الإلكتروني : ".$email. PHP_EOL . PHP_EOL;;
$l4="المدينة : ".$city. PHP_EOL . PHP_EOL;;
$l5="نوع التواصل : ".$ctype. PHP_EOL . PHP_EOL;;
$l6="نص الرسالة : ".$comments. PHP_EOL . PHP_EOL;;

$msg = wordwrap( $l1 . $l2 . $l7. $l3 .$l4 .$l5 .$l6, 70 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<p class='alert alert-success'>شكراً، تم إرسال الرسالة بنجاح، سيتم الرد عليكم في أقرب وقت</p>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'حدث خطأ أثناء الإرسال الرجاء المحاول لاحقاً';

}
