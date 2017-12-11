 <?php session_start();?>
 <html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Project2017c</title>

<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
	font-family: Verdana, Arial, Helvetica, sans-serif,微軟正黑體;;
	text-align: left;
	background-image:url(../images/BG.jpg);
	background-repeat:repeat-y;
	background-attachment: fixed;
}

/
ul, ol, dl { 
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 素接觸。 
	padding-right: 15px;
	padding-left: 15px; 
}
a img { 
	border: none;
}

a:link {
	color:#414958;
	text-decoration: underline; 
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { 
	text-decoration: none;
}



.container {
	width: 80%;
	max-width: 1260px;
	min-width: 780px;
	margin: 0 auto; 
}

.content {
	padding: 25px 0;
	padding-left: 5%;
}
.header {
	width: 100%;
}
.inner{
	text-align: center;
	font-size:20px ;
	letter-spacing: 5px;
	margin-left: 10%;
	margin-right: 10%;
	padding: 25px 0;
}




/* ~~ 這個群組選取器會在 .content 區域空間中提供清單 ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* 這個欄位間隔反映出上方標題和段落規則中的右方間隔。當欄位間隔位於下方時，便可將清單中的其他元素間隔開來；當位於左方時，則可藉此建立縮排。這些動作均可依需要進行調整。 */
}

/* ~~ 導覽清單樣式 (如果選擇使用 Spry 之類的預製飛出選單，則可移除) ~~ */
ul.nav {
	list-style: none; /* 這會移除清單標記 */
	border-top: 1px solid #666; /* 這會建立連結的上方邊框，其他則都會使用下方邊框放置在 LI 上 */
	margin-bottom: 15px; /* 這會在下方的內容上建立導覽間的間距 */
}
ul.nav li {
	border-bottom: 1px solid #666; /* 這會建立按鈕分隔 */
}
ul.nav a, ul.nav a:visited { /* 將這些選取器放入群組，即可確保您的連結即使在受到點擊後仍保有按鈕外觀 */
	padding: 5px 5px 5px 15px;
	display: block; /* 這會為連結提供區塊屬性，使連結能填滿包含它的整個 LI，讓整個區域都能回應滑鼠點按動作。 */
	text-decoration: none;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* 這會同時變更滑鼠及鍵盤導覽器的背景及文字顏色 */
	background-color: #6F7D94;
	color: #FFF;
}

/* ~~ 頁尾 ~~ */
.footer {
	padding: 10px 0;
	position: relative;/* 這會為 IE6 提供 hasLayout 以進行適當的清除動作 */
	clear: both; /* 這個 clear 屬性可以強制 .container 辨識欄結束於何處以及包含欄的位置 */
	background-color: #333;
	color: #FFF;
	text-align: center;
	width:100%;
	margin-top:50px;
}

/* ~~ 其他 float/clear 類別 ~~ */
.fltrt {  /* 這個類別可用來讓元素在頁面中浮動，浮動的元素必須位於頁面上相鄰的元素之前。 */
	float: right;
	margin-left: 8px;
}
.fltlft { /* 這個類別可用來讓元素在頁面左方浮動，浮動的元素必須位於頁面上相鄰的元素之前。 */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* 這個類別可放置在 <br /> 或空白的 Div 上，當做接在 #container 內最後一個浮動 Div 後方的最後一個元素 (如果從 #container 移除或取出 #footer) */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
.TOP table tr td #MenuBar1 li a strong {
	text-align: center;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.editarea{
	height: auto;
	max-width:90%;
	margin: auto;
	margin-top:auto;
	text-align: center;
}
.formtitile{
	text-align:center;
	font-size:18px;
}
.copyright {
			color: #999;
			margin-top: 1.5em;
			text-align: center;
			font-size: 0.9em;
		}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
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
if($_SESSION['username'] != null && $_SESSION['username'] == 'root'){
        echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\">";
        echo "要刪除的帳號：<input type=\"text\" name=\"id\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
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
