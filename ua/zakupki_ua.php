<!DOCTYPE html>
<html lang="ua-UA">
<head>
<meta charset="utf-8">
<title>Закупівлі | ТОВ "ГК ЕВРОХІММАШ К.О."</title>
<link rel="shortcut icon" href="http://euromash.kiev.ua/images/favicon.png"  type="image/x-icon">

<meta name="description" content="Закупівлі ТОВ ГК ЕВРОХІММАШ К.О." />
<meta name="keywords" content="Закупівлі, емальоване, теплообмінне, колонне, ємнісне обладнання хімічної, нафтопереробної, газопереробної галузі, Україна, Фастів" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="stylesheet" href="../style/nstyle.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../contact_menu/contact-blue.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" media="screen" href="../style/font-awesome.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../style/mobile.css" />
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
   hr {
    /*border: none; Убираем границу */
    margin: 25px 0 0 25px;
	background-color: grey; /* Цвет линии */
    color: grey; /* Цвет линии для IE6-7 */
    height: 1px; /* Толщина линии */
	width: 90%
   }
</style>
<body>
<div id="container">
<?php
$punkt='ads_ua';
include "menu_ua.php";
?>
<?php
include "header_img.php";
?>
<div id="breadcrumbs">
	<ul>
		<li><a href="home_ua.php">Про компанію</a></li>
		<li><a href="#">Закупівлі</a></li>
	</ul>
</div>
<div id="lang">
  <div id="button_ua">
  <a class="but_ua" href="http://euromash.kiev.ua/ua/zakupki_ua.php" title="Українська версія сторінки"></a>
     <div id="button_uk">
     <a class="but_uk" href="http://euromash.kiev.ua/en/zakupki_en.php" title="English version of the page"></a>
  <div id="button_ru">
  <a class="but_ru" href="http://euromash.kiev.ua/ru/zakupki_ru.php" title="Русская версия страницы"></a>
  </div>
     </div>
  </div>
</div>
<div id="view_content_db">
<h1>ТОВ "ГК ЕВРОХІММАШ К.О." закуповує наступний асортимент продукції:</h1>

<?php
include_once "../admin/include/dbconnect.php";

$res = mysql_query("SELECT * FROM zak") or die(mysql_error());
mysql_close();

while($row = mysql_fetch_assoc($res))
{?>

<p><strong><?php echo $row['name']?></strong></p>
<pi><?php echo '<a href="view_content.php?id='. $row['id']  . '">детальніше</a>'?></pi>
<hr>
<?php }?>
<p>&ensp;</p>	
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