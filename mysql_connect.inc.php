<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
$link_ID = mysql_connect("127.0.0.1", "project2017c", "20174309");
mysql_select_db("project2017c");

//對資料庫連線
if(!@$link_ID)
	die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

?> 