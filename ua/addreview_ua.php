<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../style/form-db.css" rel="stylesheet" type="text/css" />
<title>Написання відгука</title>

</head>
<body>
<div id="block-center">
<form method="post" action="addreview_ua.php" class="form">
<p id="title-form">Публікація відгука проводиться після попередньої модерації!</p>
<br />
Ваше ім'я (назва компанії):<br />
<textarea cols="80" rows="5" name="name_commentator"></textarea><br />
Текст відгука: <br />
<textarea cols="80" rows="5" name="text_comment"></textarea><br /><br />
<input type="hidden" name="date_comment" value="<?php echo date('Y-m-d');?>" />
<input type="submit" name="add" value="Відправити відгук" />&emsp;
<input type="reset" name="Reset" value="Очистити форму" />&emsp;
<input type="button" onclick="history.back();" value="Відмінити відправку відгука"/>

</form>
</div>

<?php

include_once("../admin/include/dbconnect.php");


if(isset($_POST['add']))
{
    $name = strip_tags(trim(addslashes($_POST['name_commentator'])));
	$text = strip_tags(trim(addslashes($_POST['text_comment'])));
	$date = $_POST['date_comment'];
    $result = mysql_query(" 
                    INSERT INTO reviews(name_commentator, text_comment, date_comment)
                    VALUES ('$name', '$text', '$date') 
    ");
    
	mysql_close();
    
    echo "<p style=\"color:green;text-align:center;font-size:17px;\">Відгук відправлено на модерацію!<br>Ви будете переадресовані на попередню сорінку сайту</p>"; 
    echo '<meta http-equiv="Refresh" content="1;url=../ua/reviews_ua.php"/>';
}
?>
 
</body>
</html>