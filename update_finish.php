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
							$id = $_POST['id'];
							$opw = $_POST['opw'];
							$opw2 = $_POST['opw2'];
							$pw = $_POST['pw'];
							$pw2 = $_POST['pw2'];
							$sidt = $_SESSION['sidt'];
							//紅色字體為判斷密碼是否填寫正確
							if($_SESSION['username'] != null && $pw != null && $pw2 != null && $pw == $pw2 && $opw != null && $opw2 != null && $opw == $opw2 && $pw != $opw){
								$id = $_SESSION['username'];
								//更新資料庫資料語法
								$sql = "UPDATE `project2017c`.$sidt SET `password` = '$pw' WHERE $sidt.`username` = '$id'";
								if(mysql_query($sql)){
									echo '<h1>修改成功!</h1>';
									echo '<meta http-equiv=REFRESH CONTENT=10;url=member.php>';
									echo '<a href="member.php">系統將自動轉跳，或按此手動轉跳。</a>';
								}
								else{
									echo '<h1>修改失敗!</h1>';
									echo '<meta http-equiv=REFRESH CONTENT=10;url=member.php>';
									echo '<a href="member.php">系統將自動轉跳，或按此手動轉跳。</a>';
								}
							}
							else if($pw == null || $pw2 == null || $opw == null || $opw2 == null){
								echo '<h1>請確認密碼是否正確填寫</h1><br>';
								echo '<meta http-equiv=REFRESH CONTENT=10;url=update.php>';
								echo '<a href="update.php">系統將自動轉跳，或按此手動轉跳。</a>';
							}
							else if($opw2 != $opw){
								echo '<h1>請確認原密碼是否正確</h1><br>';
								echo '<meta http-equiv=REFRESH CONTENT=10;url=update.php>';
								echo '<a href="update.php">系統將自動轉跳，或按此手動轉跳。</a>';
							}
							else if($pw2 != $pw){
								echo '<h1>請確認新密碼是否正確填寫</h1><br>';
								echo '<meta http-equiv=REFRESH CONTENT=10;url=update.php>';
								echo '<a href="update.php">系統將自動轉跳，或按此手動轉跳。</a>';
							}
							else if($pw == $opw){
								echo '<h1>新密碼不可與原密碼相同</h1><br>';
								echo '<meta http-equiv=REFRESH CONTENT=10;url=update.php>';
								echo '<a href="update.php">系統將自動轉跳，或按此手動轉跳。</a>';
							}
							else{
								echo '您無權限觀看此頁面!<br>';
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
