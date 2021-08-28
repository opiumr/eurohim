<!DOCTYPE html>
<html lang="ua-UA">
<head>
<meta charset="utf-8">
<title>Закупівлі | ТОВ "ГК ЕВРОХІММАШ К.О."</title>
<link rel="shortcut icon" href="http://euromash.kiev.ua/images/favicon.png"  type="image/x-icon">

<meta name="description" content="Закупівлі ТОВ ГК ЕВРОХІММАШ К.О." />
<meta name="keywords" content="Закупівля матеріалів, емальоване, теплообмінне, колонне, ємнісне обладнання хімічної, нафтопереробної, газопереробної галузі, Україна, Фастів" />
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
<div id="contacts">
<h1>ТОВ "ГК ЕВРОХІММАШ К.О." закуповує наступний асортимент продукції:</h1>
<?php
include_once "dbconnect.php";
$res = mysql_query("SELECT * FROM zak") or die(mysql_error());
mysql_close();
echo '<table><tr><th>Найменування товару</th><th>Кількість</th><th>Характеристики</th><th>Технічні вимоги</th></tr>';
while($row = mysql_fetch_assoc($res))
{
echo '<tr><td>'.$row['name'].'</td><td>'.$row['sum'].'</td><td>'.$row['characteristics'].'</td><td>'.$row['teh_har'].'</td></tr>';
}
echo '</table>';

?>
<p>&ensp;</p>	
</div>
</div>
<?php
include "call_ua.php";
?>	
</body>
</html>