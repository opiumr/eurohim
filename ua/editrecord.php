<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../style/form-db.css" rel="stylesheet" type="text/css" />
<title>Редагування запису</title>
<script type="text/javascript" src="../jquery/jquery-3.2.1.min.js">
</script>
<script type="text/javascript" src="../jquery/jquery.maskedinput.js"></script>
<script type="text/javascript">
	jQuery(function($) {
	$('#dat1').mask('99.99.9999');
	$('#dat2').mask('99.99.9999');
	});
</script>
</head>

<body>


<?php

include_once("dbconnect.php");

$id = $_GET['id'];

$result = mysql_query("  SELECT *, DATE_FORMAT(date_start,'%d.%m.%Y') as date_start, DATE_FORMAT(date_finish,'%d.%m.%Y') as date_finish 
						 FROM zak
                         WHERE id='$id'   
");


$row = mysql_fetch_assoc($result);
?>
<div id="block-center">
<form method="post" action="editrecord.php?id=<?php echo $id; ?>">
Найменування товару:<br />
<textarea cols="80" rows="5"  name="name"><?php echo $row['name']; ?></textarea><br />
Категорія товару:<br />
<input type="text" name="type_product" value="<?php echo $row['type_product']; ?>" /><br />
<br />
Кількість: <br />
<input type="text" name="sum" value="<?php echo $row['sum']; ?>" /><br />
Дата початку потреби в закупівлі:&emsp;
<input id="dat1" type="text" name="date_start" value="<?php echo $row['date_start']; ?>" /><br /><br />
Дата закінчення потреби в закупівлі:
<input id="dat2" type="text" name="date_finish" value="<?php echo $row['date_finish']; ?>" /><br />
Характеристики:<br />
<textarea cols="80" rows="5" name="characteristics"><?php echo $row['characteristics']; ?></textarea><br />

Технічні вимоги:<br />
<textarea cols="80" rows="5" name="teh_har"><?php echo $row['teh_har']; ?></textarea><br /><br />

<input type="hidden" name="date_edit" value="<?php echo date('Y-m-d H:i:s');?>" />

<input type="submit" name="save" value="Сохранить" />&emsp;&emsp;
<input type="button" onclick="history.back();" value="Відмінити внесення змін в базу даних"/>
</form>
</div>

<?php
if(isset($_POST['save']))
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
    $date_edit = $_POST['date_edit'];
	
	mysql_query(" UPDATE zak SET name='$name', type_product='$type_product', sum='$sum', date_start='$date_start', date_finish='$date_finish', characteristics='$characteristics', teh_har='$teh_har', date_edit='$date_edit' WHERE id='$id' ");

	mysql_close();
    
	echo "<p style=\"color:green;text-align:center;font-size:17px;\">Зміни в запис внесені в базу даних!<br>Ви будете переадресовані на попередню сторінку</p>"; 
    echo '<meta http-equiv="Refresh" content="1;url=zakupki_db_ua.php"/>'; 
}
?>

</body>
</html>