<!DOCTYPE html>
<html lang="ua-UA">
<head>
<meta charset="utf-8">
<title>Вибірка закупівлі | ТОВ "ГК ЕВРОХІММАШ К.О."</title>
<link rel="shortcut icon" href="http://euromash.kiev.ua/images/favicon.png"  type="image/x-icon">

<meta name="description" content="Закупівлі ТОВ ГК ЕВРОХІММАШ К.О." />
<meta name="keywords" content="Закупівлі, емальоване, теплообмінне, колонне, ємнісне обладнання хімічної, нафтопереробної, газопереробної галузі, Україна, Фастів" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="stylesheet" href="../style/him.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../contact_menu/contact-blue.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../jquery/jquery-1.5.2.js"></script>

<style>
   table {
    width: 99%; /* Ширина таблицы */
	margin: auto;
	border-collapse: collapse; /* Убираем двойные линии между ячейками */
	font-size: 150%;
   }
  TD, TH, TR {
	
    padding: 1px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
   TH {
	   text-align: center;
	    background: #28528C; /* Цвет фона */
   }
   #center {
	text-align: center;
   }
</style>
<body>
<div id="container">
<?php
$punkt='ads_ua';
include "g_menu_ua.php";
?>
<?php
include "header_img.php";
?>

<div id="view_content_db">

<?php
include_once "dbconnect.php";
//
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0; 
$res = mysql_query('SELECT *, DATE_FORMAT(date_start,"%d.%m.%Y") AS date_start, DATE_FORMAT(date_finish,"%d.%m.%Y") AS date_finish FROM `zak` WHERE `id` = ' . $id) or die(mysql_error());
mysql_close();

$row = mysql_fetch_assoc($res);

?>
<h1><strong><?php echo $row['name']?></strong></h1>
<p><strong>Потреба в закупівлі:</strong> з <?php echo $row['date_start']?> по <?php echo $row['date_finish']?> року</p><br />
<p>Кількість: <?php echo $row['sum']?></p><br />
<p>Характеристики:</p>
<p><?php echo $row['characteristics']?></p><br />
<p>Технічні вимоги:</p>
<p><?php echo $row['teh_har']?></p>
<p>&nbsp;</p>

</div>
<?php
include "r_bar_ua.php";
?>
</div>
<?php
include "call_ua.php";
?>
</body>
</html>