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
								<!-- InstanceBeginEditable name="EditRegion2" -->
								<div align="center">
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
									?>
								</div><!-- InstanceEndEditable --></div>
							</tr>
						</table>
				</div>
				<div class="container">
					<div class="header">    
						<!-- InstanceBeginEditable name="EditRegion3" -->
						<div class="editarea">
							<?php session_start(); ?>
							<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
							<?php
							include("mysql_connect.inc.php");
							if($_SESSION['username'] != null){
								//將$_SESSION['username']丟給$id
								//這樣在下SQL語法時才可以給搜尋的值
								$id = $_SESSION['username'];
								$sidt = $_SESSION['sidt'];
								//若以下$id直接用$_SESSION['username']將無法使用
								$sql = "SELECT * FROM $sidt where `username` = '$id'";
								$result = mysql_query($sql);
								$row = mysql_fetch_row($result);
								echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
								echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" readonly/>(此項目無法修改) <br><br>";
								echo "原密碼：<input type=\"password\" name=\"opw2\" value=\"\"/> <br><br>";
								echo "新密碼：<input type=\"password\" name=\"pw\" value=\"\"/> <br><br>";
								echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"\"/> <br><br>";
								echo "<input type=\"password\" name=\"opw\" value=\"$row[2]\" / hidden><br>";
								echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
								echo "</form>";
							}
							else
							{
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
