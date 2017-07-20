<?php

if(!$_POST) exit;



if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$ptype    = $_POST['ptype'];
$ltype  = $_POST['ltype'];

if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


$address = "master@sdanah.com";

$e_subject = 'رسالة من '.$name;

$l1="طلب تقييم عقاري". PHP_EOL . PHP_EOL;;
$l2="الاسم : ".$name. PHP_EOL . PHP_EOL;;
$l7="الهاتف : ".$phone. PHP_EOL . PHP_EOL;;
$l3="البريد الإلكتروني : ".$email. PHP_EOL . PHP_EOL;;
$l5="نوع العقار : ".$ptype. PHP_EOL . PHP_EOL;;
$l6="موقع العقار : ".$ltype. PHP_EOL . PHP_EOL;;
if(isset($_POST['description'])){
	$l8="الملاحظات : ".$_POST['description']. PHP_EOL . PHP_EOL;;
}else{
	$l8="";
}

$msg = wordwrap( $l1 . $l2 . $l7 . $l3 .$l5 .$l6 .$l8,  70 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<p class='alert alert-success'>شكرا ، سيتم التواصل معكم لاحقا في حال الموافقة من أجل الحصول على معلومات إضافية</p>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'حدث خطأ أثناء الإرسال الرجاء المحاول لاحقاً';

}
