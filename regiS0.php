<?php session_start();?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Project2017c</title>
		<link rel="stylesheet" href="main.css">
		<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
		<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
		<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
		<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
		<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
		<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
		<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
		<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
		<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
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
									echo '<div><a href="member.php">修改平台資料</div>';
									echo '<div><a href="logout.php">平台登出</a></div>';
								}
								else if($_SESSION['username'] == null ){
									echo '<div><a href="login.php">平台登入</a></div>';
									echo '<div><a href="regiS0.php">平台註冊</a></div>';
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
							<?php
							if($_SESSION['sid'] == null)
							{
								$_SESSION['sid'] = 'root'; 
							}
							echo <<<EOT
<h1>平台註冊</h1>
  <form name="form" method="post" action="regiS0_finish.php">
    <div class="formtitile">平台名稱<br></div>
	<span id="sprytextfield2">
    <label for="text1"></label>
    <input type="text" name="id" id="id">
    <span class="textfieldRequiredMsg"><br>請輸入您的平台名稱。</span>
	</span><br><br>
    <div class="formtitile">密碼<br></div>
	<span id="sprypassword1">
      <label for="pw"></label>
      <input type="password" name="pw" id="pw">
      <span class="passwordRequiredMsg"><br>請輸入密碼。</span></span>
	<br><br>
    <div class="formtitile">再一次輸入密碼<br></div>
	<span id="spryconfirm1">
      <label for="pw2"></label>
      <input type="password" name="pw2" id="pw2">
      <span class="confirmRequiredMsg"><br>請確認密碼。</span><span class="confirmInvalidMsg">密碼不相符。</span></span>
	<br><br>
	<div class="formtitile">電子信箱<br></div>
	<span id="sprytextfield1">
      <label for="email"></label>
      <input type="text" name="email" id="email">
      <span class="textfieldRequiredMsg"><br>請輸入信箱。</span></span>
	<br><br>
	  <div class="formtitile">申請原因(簡短說明使用目的)<br></div>
	 <span id="sprytextarea1">
      <label for="reason"></label>
      <textarea name="reason" id="reason" cols="45" rows="5"></textarea>
      <span class="textareaRequiredMsg"><br>請輸入說明。</span></span>
	  <br><br>
  	<input type="button" name="button" value="確定" onClick="check()">
  </form>
EOT;
							?>
							<script type="text/javascript">
								var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
								var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
								var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pw");
								var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
								var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
								function check(){
									msg = "";
									if(form.email.value == "")
									{
										msg = "please input eMail";
									}
									else if(form.email.value.indexOf("@") < 1)
									{
										msg = "eMail format incorrect.";
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
