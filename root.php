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
									if($_SESSION['username'] != null && $_SESSION['username'] != 'root'  ){
										echo '<div><a href="member.php">平台修改資料</div>';
										echo '<div><a href="logout.php">平台登出</a></div>';
									}
									else if($_SESSION['username'] == 'root' ){
										echo '<div><a href="root.php">平台修改資料</div>';
										echo '<div><a href="logout.php">平台登出</a></div>';
									}	
									else if($_SESSION['username'] == null ){
										echo '<div><a href="login.php">平台登入</a></div>';
										echo '<div><a href="register.php">平台註冊</a></div>';
									}   
									?>  <!-- InstanceEndEditable --></div>
								</tr>
							</table>
						</div>
						<div class="container">
							<div class="header">    
								<!-- InstanceBeginEditable name="EditRegion3" -->
								<div class="inner">
									<p><img src="images/member.jpg" width="100%" /></p>
									<h2>待審核</h2>
									<table width="80%" border="1" align="center">
										<tr align="center">
											<td>SID</td>
											<td>Email</td>
											<td>Reason</td>
											<td>IP</td>     
										</tr>
										<?php 
										include("mysql_connect.inc.php");
										$sidt = $_SESSION['sidt'];
										//此判斷為判定觀看此頁有沒有權限
										//說不定是路人或不相關的使用者
										//因此要給予排除
										if($_SESSION['username'] != null && $_SESSION['username'] == 'root'){
											//將資料庫裡的所有會員資料顯示在畫面上
											$sql = "SELECT `SID`, `email`, `reason`, `pass`, `IP` FROM $sidt WHERE `pass` LIKE 'n'";
											$result = mysql_query($sql);
											for($i=1;$i<=mysql_num_rows($result);$i++)
											{ 
												$rs=mysql_fetch_row($result);
										?>
										<tr align="center">
											<td><?php echo $rs[0]?></td>
											<td><?php echo $rs[1]?></td>
											<td><?php echo $rs[2]?></td>
											<td><?php echo $rs[4]?></td>
										</tr>
										<?php }}?>
									</table>
									<a href="check.php">審核用戶</a>
									<br><br>
									<h2>已審核</h2>
									<table width="80%" border="1" align="center">
										<tr align="center">
											<td>SID</td>
											<td>Email</td>
											<td>IP</td>     
										</tr>
										<?php 
										include("mysql_connect.inc.php");
										$sidt = $_SESSION['sidt'];
										//此判斷為判定觀看此頁有沒有權限
										//說不定是路人或不相關的使用者
										//因此要給予排除
										if($_SESSION['username'] != null && $_SESSION['username'] == 'root'){
											//將資料庫裡的所有會員資料顯示在畫面上
											$sql = "SELECT `SID`, `email`, `pass`, `IP` FROM $sidt WHERE `pass` LIKE 'y'";
											$result = mysql_query($sql);
											for($i=1;$i<=mysql_num_rows($result);$i++)
											{ 
												$rs=mysql_fetch_row($result);
										?>
										<tr align="center">
											<td><?php echo $rs[0]?></td>
											<td><?php echo $rs[1]?></td>
											<td><?php echo $rs[3]?></td>
										</tr>
										<?php }}?>
									</table>
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
