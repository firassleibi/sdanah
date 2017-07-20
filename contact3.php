<?php

if(!$_POST) exit;
if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
$type	= $_POST['type'];
$name     = $_POST['name'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$ptype    = $_POST['ptype'];
$ltype  = $_POST['ltype'];
$price  = $_POST['price'];
$description  = $_POST['description'];
if(get_magic_quotes_gpc()) {
	$description = stripslashes($description);
}

$to = "master@sdanah.com";
$from = $email ;
$subject ="رسالة من ".$name;
$message.="طلب تسويق عقاري". "\n\n";
$message.="الاسم : ".$name. "\n\n";
$message.="الهاتف : ".$phone. "\n\n";
$message.="البريد الإلكتروني : ".$email. "\n\n";
$message.="نوع العقار : ".$ptype. "\n\n";
$message.="موقع العقار : ".$ltype. "\n\n";
$message.="السعر : ".$price. "\n\n";
$message.="النوع : ".$type. "\n\n";
$message.="الوصف : ".$description. "\n\n";
$message = wordwrap( $message, 70 );
$headers = "From: $from";



//FILES
if(isset($_FILES) && (bool) $_FILES) {
        $AllowedExtensions = ["pdf","doc","docx","gif","jpeg","jpg","png","rtf","txt"];
        $files = [];
        $server_file = [];
        foreach($_FILES as $name => $file) {
            $file_name = $file["name"];
            $file_temp = $file["tmp_name"];
            foreach($file_name as $key) {
                $path_parts = pathinfo($key);
                $extension = strtolower($path_parts["extension"]);
                if(!in_array($extension, $AllowedExtensions)) { 
				//MAIL Without Attachment
				$headers .= "Reply-To: $email" . "\n";
				$headers .= "MIME-Version: 1.0" . "\n";
				$headers .= "Content-type: text/plain; charset=utf-8" . "\n";
				$headers .= "Content-Transfer-Encoding: quoted-printable" . "\n";
				if(mail($to, $subject, $message, $headers)) {

					header("location:Real-Estate-Marketing.php?r=success");
					exit;
                    } else {
            header("location:Real-Estate-Marketing.php?r=fail");
			exit;
				
				}
				 }
                $server_file[] = "uploads/{$path_parts["basename"]}";
            }
            for($i = 0; $i<count($file_temp); $i++) { move_uploaded_file($file_temp[$i], $server_file[$i]); }
        }
  
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"utf-8\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
        $message .= "--{$mime_boundary}\n";
        $FfilenameCount = 0;
        for($i = 0; $i<count($server_file); $i++) {
            $afile = fopen($server_file[$i],"rb");
            $data = fread($afile,filesize($server_file[$i]));
            fclose($afile);
            $data = chunk_split(base64_encode($data));
            $name = $file_name[$i];
            $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            $message .= "--{$mime_boundary}\n";
        }
        if(mail($to, $subject, $message, $headers)) {
			header("location:Real-Estate-Marketing.php?r=success");
                    } else {
            header("location:Real-Estate-Marketing.php?r=fail");
        }
    }
	//END FILES





