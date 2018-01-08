<?php session_start();?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Project2017c</title>
		<link rel="stylesheet" href="main.css">
		<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
		<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
		<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
		<!-- InstanceEndEditable -->
	</head>
	<body>
		<div class="TOP" >
			<table width="100%" border="0" bgcolor="#333333">
				<tr>
					<td width="229"> &nbsp;&nbsp; &nbsp; &nbsp; <a href="index.php"><img src="images/LOGO.png" width="150" height="150" /></a></td>
					<td width="375" align="center" valign="middle" nowrap="nowrap"><div align="center">
						<ul id="MenuBar1" class="MenuBarHorizontal">
							<li><a href="a01.php"><strong>網站A</strong></a> </li>
							<li><a href="a02.php"><strong>網站B</strong></a></li>
							<li><a href="a03.php"><strong>網站C</strong></a> </li>
							<li><a href="about.php"><strong>關於我們</strong></a> </li>
						</ul>
						</div></td>
					<td width="221" align="center" valign="middle" nowrap="nowrap"><div align="right">
						<ul id="MenuBar1" class="MenuBarHorizontal">
							<div class="header">    
								<!-- InstanceBeginEditable name="EditRegion2" -->  <!-- InstanceEndEditable --></div>
							</tr>
						</table>
				</div>
				<div class="container">
					<div class="header">    
						<!-- InstanceBeginEditable name="EditRegion3" -->
						<div class="editarea">
							<?php
							include("mysql_connect.inc.php");
							include("PHPMailerAutoload.php"); //匯入PHPMailer類別 
							$sid = $_SESSION['sid'];
							$sidt = "`'$sid'_users`";
							$id = $_POST['id'];
							$pw = $_POST['pw'];
							$pw2 = $_POST['pw2'];
							$email = $_POST['email'];
							$reason = $_POST['reason'];
							$iipp=$_SERVER["REMOTE_ADDR"];
							//判斷帳號密碼是否為空值
							//確認密碼輸入的正確性
							$sql = "SELECT * FROM $sidt";
							$result = mysql_query($sql);
							$row = mysql_fetch_row($result);
							if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
							{		
								//新增資料進資料庫語法
								$sql = "INSERT INTO `project2017c`.$sidt (`SID`,`password`,`email`,`reason`,`IP`) VALUES ('$id','$pw','$email','$reason','$iipp');";
								if(mysql_query($sql))
								{
									unset($_SESSION['username']);		
									echo <<<EOT
			<h1>註冊成功!請等待通知，將派人替您審核資格。</h1>
			<meta http-equiv=REFRESH 	CONTENT=10;url=index.php>
			<a href="index.php">系統將自動轉跳，或按此手動轉跳。</a>			
EOT;
									$mail = new PHPMailer(true);
									$mail->isSMTP();
									$mail->Host = 'smtp.office365.com';
									$mail->Port       = 587;
									$mail->SMTPSecure = 'tls';
									$mail->SMTPAuth   = true;
									$mail->Username = '104021018@live.asia.edu.tw';
									$mail->Password = '19961210';
									$mail->SetFrom('104021018@live.asia.edu.tw', 'project2017c');
									$mail->addAddress('asd96851210@gmail.com', 'ToEmail');
									//$mail->SMTPDebug  = 3;
									//$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
									$mail->IsHTML(true);
									$mail->Subject = 'Project2017c NEW';
									$mail->Body    = 'NEW USER <br> <a href="http://isrc.ccs.asia.edu.tw/~project2017c/">http://isrc.ccs.asia.edu.tw/~project2017c/</a>';
									$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
									$mail->send();
								}
								else
								{	
									echo <<<EOT
		<h1>註冊失敗! 平台名稱有人使用<br></h1>		
		<meta http-equiv=REFRESH CONTENT=10;url=regiS0.php>
		<a href="regiS0.php">系統將自動轉跳，或按此手動轉跳。</a>
EOT;
								}
							}
							else if($pw != $pw2)
							{
								echo <<<EOT
	<h1>註冊失敗! 密碼確認錯誤<br></h1>
	<meta http-equiv=REFRESH CONTENT=10;url=regiS0.php>
	<a href="regiS0.php">系統將自動轉跳，或按此手動轉跳。</a>
EOT;
							}
							else{
								echo <<<EOT
	<h1>無權使用<br></h1>
	<meta http-equiv=REFRESH CONTENT=10;url=index.php>
	<a href="regiS0.php">系統將自動轉跳，或按此手動轉跳。</a>
EOT;
							}
							?>
						</div>
						<!-- InstanceEndEditable --></div>
				</div>
				</body>
			<div class="footer"><strong>本網站目前僅供研究、交流之用。</strong>  </div>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="https://www.facebook.com/profile.php?id=100000424224637">GCL1N</a></li>
				</ul>
			</div>
			<!-- InstanceEnd --></html>
