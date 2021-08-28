<!DOCTYPE html>
<html lang="ua-UA">
<head>
<meta charset="utf-8">
<title>Закупівлі | ТОВ "ГК ЕВРОХІММАШ К.О."</title>
<link rel="shortcut icon" href="http://euromash.kiev.ua/images/favicon.png"  type="image/x-icon">

<meta name="description" content="Закупівлі ТОВ ГК ЕВРОХІММАШ К.О." />
<meta name="keywords" content="Закупівля матеріалів, емальоване, теплообмінне, колонне, ємнісне обладнання хімічної, нафтопереробної, газопереробної галузі, Україна, Фастів" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="stylesheet" href="../style/nstyle.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="../style/mobile.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../style/font-awesome.css" />
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
include "menu_ua.php";
?>
<?php
include "header_img.php";
?>

<div id="contacts">
<h1>Закупівлі - ТОВ "ГК ЕВРОХІММАШ К.О."</h1>
<a href="addrecord.php"><img style="width: 100px; border-radius: 10px" src="../images/db/add.png" title="Додати новий запис в базу даних" alt=""></a>

<?php
include_once "dbconnect.php";
$res = mysql_query("SELECT *, DATE_FORMAT(date_start,'%d.%m.%Y') as date_start, DATE_FORMAT(date_finish,'%d.%m.%Y') as date_finish FROM zak") or die(mysql_error());
mysql_close();
$i = 1;
echo '<table><tr><th rowspan="2">№ з/п</th><th rowspan="2">Найменування товару</th><th rowspan="2">Категорія товару</th><th rowspan="2">Кількість</th><th colspan="2">Потреба в закупівлі</th><th rowspan="2">Характеристики</th><th rowspan="2">Технічні вимоги</th><th rowspan="2" colspan="2">Редагувати</th></tr><tr><th>початок</th><th>закінчення</th></tr>';
while($row = mysql_fetch_assoc($res))
{
echo '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td>'.$row['type_product'].'</td><td>'.$row['sum'].'</td><td>'.$row['date_start'].'</td><td>'.$row['date_finish'].'</td><td>'.$row['characteristics'].'</td><td>'.$row['teh_har'].'</td><td><a href="editrecord.php?id='.$row['id'].'"><img style="width: 40px; border-radius: 10px" src="../images/db/edit.png" title="редагувати запис" alt=""></a></td>
<td><a href="deleterecord.php?id='.$row['id'].'"><img style="width: 40px; border-radius: 10px" src="../images/db/delete.png" title="видалити запис" alt=""></a></td>
</tr>';
$i = $i + 1;
}
echo '</table>';

?>
<p>&ensp;</p>	
</div>
</div>	
</body>
</html>