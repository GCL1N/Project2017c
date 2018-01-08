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
								<!-- InstanceBeginEditable name="EditRegion2" --><!-- InstanceEndEditable --></div>
							</tr>
						</table>
				</div>
				<div class="container">
					<div class="header">    
						<!-- InstanceBeginEditable name="EditRegion3" -->
						<div class="editarea">
							<?php
							include("mysql_connect.inc.php");
							$sid = $_SESSION['sid'];
							$sidt = "`'$sid'_users`";
							$id = $_POST['id'];
							$pw = $_POST['pw'];
							$pw2 = $_POST['pw2'];
							$pho = $_POST['phone'];
							$email = $_POST['email'];
							$address = $_POST['address'];
							//判斷帳號密碼是否為空值
							//確認密碼輸入的正確性
							$sql = "SELECT * FROM $sidt";
							$result = mysql_query($sql);
							$row = mysql_fetch_row($result);
							if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
							{		
								//新增資料進資料庫語法
								$sql = "INSERT INTO `project2017c`.$sidt (`SID`,`username`, `password`,`phone`,`mail`,`address`) VALUES ('$sid','$id', '$pw','$pho','$email','$address');";
								if(mysql_query($sql))
								{
									unset($_SESSION['username']);
									echo '<h1>註冊成功!將為您轉回首頁!</h1><br>';
									switch ($sid){
										case a01 :
											echo '<meta http-equiv=REFRESH 	CONTENT=10;url=a01.php>';
											echo '<a href="a01.php">系統將自動轉跳，或按此手動轉跳。</a>';
											break;
										case a02 :
											echo '<meta http-equiv=REFRESH 	CONTENT=10;url=a02.php>';
											echo '<a href="a02.php">系統將自動轉跳，或按此手動轉跳。</a>';
											break;
										case a03 :
											echo '<meta http-equiv=REFRESH 	CONTENT=10;url=a03.php>';
											echo '<a href="a03.php">系統將自動轉跳，或按此手動轉跳。</a>';
											break;		
										default :
											break;
									}
								}
								else
								{	
									echo '<h1>註冊失敗! 帳號有人使用</h1><br>';
									echo '<meta http-equiv=REFRESH CONTENT=10;url=register.php>';
									echo '<a href="register.php">系統將自動轉跳，或按此手動轉跳。</a>';
								}
							}
							else if($pw != $pw2)
							{
								echo '<h1>註冊失敗! 密碼確認錯誤</h1><br>';
								echo '<meta http-equiv=REFRESH CONTENT=10;url=register.php>';
								echo '<a href="register.php">系統將自動轉跳，或按此手動轉跳。</a>';
							}
							else{
								echo '無權使用<br>';
								echo '<meta http-equiv=REFRESH CONTENT=10;url=error.php>';
								echo '<a href="error.php">系統將自動轉跳，或按此手動轉跳。</a>';
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
