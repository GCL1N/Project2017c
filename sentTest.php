<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>無標題文件</title>
		<body>
			<?php
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			require 'vendor/autoload.php'; //匯入PHPMailer類別       
			echo 'Current PHP version: ' . phpversion();
			$mail = new PHPMailer(true);
			try {
				//Server settings
				$mail->SMTPDebug = 2;                                 // Enable verbose debug output
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = '104021018@live.asia.edu.tw';                 // SMTP username
				$mail->Password = '19961210';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to

				//Recipients
				$mail->setFrom('104021018@live.asia.edu.tw', 'Mailer');
				$mail->addAddress('104021018@live.asia.edu.tw', 'Joe User');     // Add a recipient
							

				//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'Project2017c NEW';
				$mail->Body    = 'NEW USER</b>';
				$mail->AltBody = 'href="http://isrc.ccs.asia.edu.tw/~project2017c/">http://isrc.ccs.asia.edu.tw/~project2017c/</a>';

				$mail->send();
				echo 'Message has been sent';
			} catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
			
			?>
		</body>
		</html>