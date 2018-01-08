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
								<!-- InstanceBeginEditable name="EditRegion2" --><div align="center">
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
							<h1> 帳號註冊</h1>
							<?php
							if($_SESSION['sid'] == null)
							{
								$_SESSION['sid'] = $_POST['sid']; 
							}
							echo <<<EOT
<form name="form" method="post" action="register_finish.php"> 
帳號：　<input type="text" name="id" > <br><br>
密碼：　<input type="password" name="pw" > <br><br>
再一次輸入密碼：　<input type="password" name="pw2" > <br><br>
電話：　<input type="text" name="phone" > <br><br>
電子信箱：　<input type="text" name="email" > <br><br>
地址：　<input type="text" name="address" > <br><br>
<input type="button" name="button" value="確定" onClick = "check()" >
</form>
EOT;
							?>
							<script type="text/javascript">
								function check(){
									msg = "";
									if(form.id.value == ""){
										msg += " 帳號不可為空";
									}
									else if(form.pw.value == "")
									{
										msg += "<br>please input password";
									}
									else if(form.pw2.value != form.pw.value)
									{
										msg += "<br>please check password";
									}
									else if(form.phone.value == "")
									{
										msg += "<br>please input your phone";
									}
									else if(form.address.value == "")
									{
										msg += "<br>please input your address";
									}
									else if(form.email.value == "")
									{
										msg += "<br>please input eMail";
									}
									else if(form.email.value.indexOf("@") < 1)
									{
										msg += "<br>eMail format incorrect.";
									}
									else{
										form.submit(); 
										return true;
									}
									alert(msg);
									return false;
								}
							</script>
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
