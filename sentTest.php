<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>


<body>
<?php
include("PHPMailerAutoload.php"); //匯入PHPMailer類別       
echo 'Current PHP version: ' . phpversion();
$mail= new PHPMailer(); //建立新物件        
$mail->IsSMTP(); //設定使用SMTP方式寄信        
$mail->SMTPAuth = true; //設定SMTP需要驗證        
$mail->SMTPSecure = "tls"; // Gmail的SMTP主機需要使用SSL連線   
$mail->Host = "smtp.office365.com"; //Gamil的SMTP主機        
$mail->Port = 587;  //Gamil的SMTP主機的SMTP埠位為465埠。        
$mail->CharSet = "big5"; //設定郵件編碼        

$mail->Username = "104021018@live.asia.edu.tw"; //設定驗證帳號        
$mail->Password = "19961210"; //設定驗證密碼        

$mail->From ="104021018@live.asia.edu.tw" ; //設定寄件者信箱        
$mail->FromName = "測試人員"; //設定寄件者姓名        

$mail->Subject = "PHPMailer 測試信件"; //設定郵件標題        
$mail->Body = "大家好,       
這是一封測試信件!       
"; //設定郵件內容        
$mail->IsHTML(true); //設定郵件內容為HTML        
$mail->AddAddress("project2017c@mailinator.com", ""); //設定收件者郵件及名稱        

if(!$mail->Send()) {        
echo "Mailer Error: " . $mail->ErrorInfo;        
} else {        
echo "Message sent!";        
}    
?>
</body>
</html>