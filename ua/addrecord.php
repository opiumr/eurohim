<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../style/form-db.css" rel="stylesheet" type="text/css" />
<title>Внесення запису в базу закупівлі</title>
<script type="text/javascript" src="../jquery/jquery-3.2.1.min.js">
</script>
<script type="text/javascript" src="../jquery/jquery.maskedinput.js"></script>
<script type="text/javascript">
	jQuery(function($) {
	$('#dat1').mask('99.99.9999', {placeholder: "дд.мм.рррр" });
	$('#dat2').mask('99.99.9999', {placeholder: "дд.мм.рррр" });
	});
</script>

</head>
<body>
<div id="block-center">
<form method="post" action="addrecord.php" class="form">
Найменування товару:<br />
<textarea cols="80" rows="5" name="name"></textarea><br />
Категорія товару:<br />
<input type="text" name="type_product" /><br />
<br />
Кількість:<br />
<input type="text" name="sum" /><br />
Дата початку потреби в закупівлі:&emsp;
<input id="dat1" type="text" name="date_start" /><br /><br />
Дата закінчення потреби в закупівлі:
<input id="dat2" type="text" name="date_finish" /><br />
Характеристики:<br />
<textarea cols="80" rows="5" name="characteristics"></textarea><br />
Технічні вимоги: <br />
<textarea cols="80" rows="5" name="teh_har"></textarea><br /><br />
<input type="hidden" name="date_create" value="<?php echo date('Y-m-d H:i:s');?>" />
<input type="submit" name="add" value="Добавити запис в базу даних" />&emsp;
<input type="reset" name="Reset" value="Очистити форму" />&emsp;
<input type="button" onclick="history.back();" value="Відмінити внесення запису"/>

</form>
</div>

<?php

include_once("dbconnect.php");


if(isset($_POST['add']))
{
    $name = strip_tags(trim(addslashes($_POST['name'])));
	$type_product = strip_tags(trim(addslashes($_POST['type_product'])));
    $sum = strip_tags(trim(addslashes($_POST['sum'])));
	$date_start = strip_tags(trim(addslashes($_POST['date_start'])));
	$date_start = date("Y-m-d",strtotime(str_replace('/','-',$date_start))); //перевод dd.mm.yyyy в yyyy-mm-dd
	$date_finish = strip_tags(trim(addslashes($_POST['date_finish'])));
    $date_finish = date("Y-m-d",strtotime(str_replace('/','-',$date_finish))); //перевод dd.mm.yyyy в yyyy-mm-dd
	$characteristics = strip_tags(trim(addslashes($_POST['characteristics'])));
	$teh_har = strip_tags(trim(addslashes($_POST['teh_har'])));
    $date_create = $_POST['date_create'];	
    $result = mysql_query(" 
                    INSERT INTO zak(name, type_product, sum, date_start, date_finish, characteristics, teh_har, date_create)
                    VALUES ('$name', '$type_product', '$sum', '$date_start', '$date_finish', '$characteristics', '$teh_har', '$date_create') 
    ");
    
	mysql_close();
    
    echo "<p style=\"color:green;text-align:center;font-size:17px;\">Запис внесено в базу даних!<br>Ви будете переадресовані на попередню сторінку</p>"; 
    echo '<meta http-equiv="Refresh" content="1;url=zakupki_db_ua.php"/>';
}
?>
 
</body>
</html>