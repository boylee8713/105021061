<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "105021061";
//資料庫管理者帳號
$db_user = "a870103";
//資料庫管理者密碼
$db_passwd = "1234";

//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd))
    die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
    die("無法使用資料庫");
?>