<?php session_start();?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Project2017c</title>
		<link rel="stylesheet" href="main.css">
		<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
		<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
		<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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
								<!-- InstanceBeginEditable name="EditRegion2" -->
								<?php
								include("mysql_connect.inc.php");
								$sidt = $_SESSION['sidt'];
								//此判斷為判定觀看此頁有沒有權限
								//說不定是路人或不相關的使用者
								//因此要給予排除
								if($_SESSION['username'] != null ){
									echo '<div><a href="member.php">修改資料</div>';
									echo '<div><a href="logout.php">登出</a></div>';
								}
								else if($_SESSION['username'] == null ){
									echo '<div><a href="login_a03.php">登入</a></div>';
									echo '<div><a href="register.php">註冊</a></div>';
								}   
								?>
								<!-- InstanceEndEditable --></div>
							</tr>
						</table>
				</div>
				<div class="container">
					<div class="header">    
						<!-- InstanceBeginEditable name="EditRegion3" -->
						<div class="editarea">
							<a href="a03.php"><img src="images/LOGOc.png" width="500" height="500" /></a>
							<?php
							include("mysql_connect.inc.php");
							//此判斷為判定觀看此頁有沒有權限
							//說不定是路人或不相關的使用者
							//因此要給予排除
							if($_SESSION['username'] != null ){
								echo '<div align="center"><a href="member.php"><img src="images/updatebtn.png" width="150" height="75" />&nbsp;<a href="logout.php"><img src="images/logoutbtn.png" width="150" height="75" /></a></div>';
							}
							else if($_SESSION['username'] == null ){
								echo '<div><a href="login_a03.php"><img src="images/loginbtn.png" width="150" height="75" />&nbsp;<a href="register.php"><img src="images/regibtn.png" width="150" height="75" /></a></div>';
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
