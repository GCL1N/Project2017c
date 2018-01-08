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
							<p><img src="images/member.jpg" width="100%" /></p>
							<?php 
							include("mysql_connect.inc.php");
							$sidt = $_SESSION['sidt'];
							//此判斷為判定觀看此頁有沒有權限
							//說不定是路人或不相關的使用者
							//因此要給予排除
							if($_SESSION['username'] != null && $_SESSION['username'] == 'root'){
								echo '<br><br><h2>＊＊＊＊＊　歡迎　　管理員　　登入系統　＊＊＊＊＊</h2><br><br>';
								echo '<a href="register.php">新增</a>　　　';
								echo '<a href="rootupdate.php">修改用戶密碼</a>　　　';
								echo '<a href="delete.php">刪除</a>　　　';
								echo '<a href="logout.php">登出</a>  <br><br>';
								echo '<h3>目前使用者有 : </h3><br><br>';
								//將資料庫裡的所有會員資料顯示在畫面上
								$sql = "SELECT * FROM $sidt";
								$result = mysql_query($sql);
								while($row = mysql_fetch_row($result)){
									echo "$row[1]<br> ";
								}      
							}
							else if($_SESSION['username'] != null && $_SESSION['username'] != 'root'){
								$id = $_SESSION['username'];
								$sql = "SELECT * FROM $sidt where username='$id'";
								$result = mysql_query($sql);
								$row = mysql_fetch_row($result);
								echo '<h2>＊＊＊＊＊　　歡迎　',$_SESSION['username'],'　登入系統。　　＊＊＊＊＊</h2>';
								echo "<br><br>用戶:　<input type=\"text\" value=\"$row[1]\" readonly/>";
								echo "<br><br>電話:　<input type=\"text\" value=\"$row[3]\" readonly/>";
								echo "<br><br>電子信箱:　<input type=\"text\" value=\"$row[4]\" readonly/>";
								echo "<br><br>地址:　<input type=\"text\" value=\"$row[5]\" readonly/>";
								echo '<br><br><a href="update.php">修改密碼</a>　　';
								echo '<a href="infoupdate.php">修改個人資料</a>　　';
								echo '<a href="logout.php">登出</a>';
							}
							else{
								echo '您無權限觀看此頁面!<br>';
								echo '<meta http-equiv=REFRESH CONTENT=10;url=index.php>';
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