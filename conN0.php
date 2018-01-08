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
							//連接資料庫
							include("mysql_connect.inc.php");
							$id = $_POST['id'];
							$pw = $_POST['pw'];
							$sid = $_POST['sid'];
							$sidt = "`'$sid'_users`";
							//搜尋資料庫資料
							$sql = "SELECT * FROM $sidt where `SID` = '$id'";
							$result = mysql_query($sql);
							$row = @mysql_fetch_row($result);
							//判斷帳號與密碼是否為空白
							//以及MySQL資料庫裡是否有這個會員
							if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw && $row[4] == 'y')
							{
								//將帳號寫入session，方便驗證使用者身份
								$_SESSION['username'] = $id;
								$_SESSION['sidt'] = $sidt;
								$_SESSION['sid'] = $sid;
								echo '<h1>登入成功! 將轉跳至你管理的平台</h1>';
								switch ($id){
									case root :
										$_SESSION['username'] = "root";
										$_SESSION['sid'] = "root";
										$_SESSION['sidt'] = "`'$id'_users`";
										echo '<meta http-equiv=REFRESH CONTENT=10;url=root.php>';
										echo '<a href="root.php">系統將自動轉跳，或按此手動轉跳。</a>';
										break;
									case a01 :
										$_SESSION['username'] = "root";
										$_SESSION['sid'] = "a01";
										$_SESSION['sidt'] = "`'$id'_users`";
										echo '<meta http-equiv=REFRESH CONTENT=10;url=a01.php>';
										echo '<a href="a01.php">系統將自動轉跳，或按此手動轉跳。</a>';
										break;
									case a02 :
										$_SESSION['username'] = "root";
										$_SESSION['sid'] = "a02";
										$_SESSION['sidt'] = "`'$id'_users`";
										echo '<meta http-equiv=REFRESH CONTENT=10;url=a02.php>';
										echo '<a href="a02.php">系統將自動轉跳，或按此手動轉跳。</a>';
										break;
									case a03 :
										$_SESSION['username'] = "root";
										$_SESSION['sid'] = "a03";
										$_SESSION['sidt'] = "`'$id'_users`";
										echo '<meta http-equiv=REFRESH CONTENT=10;url=a03.php>';
										echo '<a href="a03.php">系統將自動轉跳，或按此手動轉跳。</a>';
										break;
									default :
										break;
								}
							}
							else if ($row[4] == 'n'){
								echo <<<EOT
	<h1>平台尚未認證成功，請聯絡管理員。</h1>
EOT;
								echo '<meta http-equiv=REFRESH CONTENT=10;url=index.php>';
								echo '<a href="index.php">系統將自動轉跳，或按此手動轉跳。</a>';
							}
							else
							{
								echo '<h1>登入失敗! 請確認帳號與密碼是否正確!</h1>';
								echo '<meta http-equiv=REFRESH CONTENT=10;url=login.php>';
								echo '<a href="login.php">系統將自動轉跳，或按此手動轉跳。</a>';
							}
							?>
						</div><!-- InstanceEndEditable --></div>
				</div>
				</body>
			<div class="footer"><strong>本網站目前僅供研究、交流之用。</strong>  </div>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="https://www.facebook.com/profile.php?id=100000424224637">GCL1N</a></li>
				</ul>
			</div>
			<!-- InstanceEnd --></html>
