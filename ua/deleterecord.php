<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <link href="../style/form-db.css" rel="stylesheet" type="text/css" />
	<title>Видалення запису</title>
</head>

<body>


<?php

include_once("dbconnect.php");

$id = $_GET['id'];
?>
<div id="block-center">
<form method="post" action="deleterecord.php?id=<?php echo $id; ?>">

Ви дійсно впевнені, що хочете видалити цей запис?<br />
<input type="submit" name="delete" value="ТАК" />&emsp;&emsp;&emsp;
<input type="button" onclick="history.back();" value="Відмінити видалення запису"/>


</form>
</div>


<?php
if(isset($_POST['delete']))
{
	mysql_query(" DELETE FROM zak WHERE id='$id' ");

	mysql_close();
    
	echo "<p style=\"color:green;text-align:center;font-size:17px;\">Вибраний запис видалено з бази даних!<br>Ви будете переадресовані на попередню сторінку</p>"; 
	echo '<meta http-equiv="Refresh" content="1;url=zakupki_db_ua.php"/>'; 
}

?>

</body>
</html>