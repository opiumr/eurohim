<!DOCTYPE html>
<html lang="ua-UA">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108483747-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108483747-1');
</script>
<meta charset="utf-8">
<title>Відгуки | ТОВ "ГК ЕВРОХІММАШ К.О."</title>
<link rel="shortcut icon" href="http://euromash.kiev.ua/images/favicon.png"  type="image/x-icon">
<meta name="description" content="Відгуки ТОВ ГК ЕВРОХІММАШ К.О." />
<meta name="keywords" content="Відгуки" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="stylesheet" href="../style/nstyle.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../contact_menu/contact-blue.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" media="screen" href="../style/font-awesome.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../style/mobile.css" />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../jquery/jquery-1.5.2.js"></script>
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
		<li><a href="home_ru.php">Про компанію</a></li>
		<li><a href="#">Відгуки</a></li>
	</ul>
</div>

 
<div id="lang">
  <div id="button_ua">
  <a class="but_ua" href="http://euromash.kiev.ua/ua/reviews_ua.php" title="Українська версія сторінки"></a>
     <div id="button_uk">
     <a class="but_uk" href="http://euromash.kiev.ua/en/reviews_en.php" title="English version of the page"></a>
  <div id="button_ru">
  <a class="but_ru" href="http://euromash.kiev.ua/ru/reviews_ru.php" title="Русская версия страницы"></a>
  </div>
     </div>
  </div>
</div>
<div id="reviews">
<h1>Відгуки про компанію та продукцію ТОВ "ГК ЕВРОХІММАШ К.О."</h1>
	<p id="link-send-review" ><a class="send-review" href="addreview_ua.php" >Добавити відгук</a></p>
	
	
	
	
<?php
include_once "../admin/include/dbconnect.php";

$res = mysql_query("SELECT *, DATE_FORMAT(date_comment,'%d.%m.%Y') as date_comment FROM reviews WHERE `show_review`='1' ") or die(mysql_error());
mysql_close();

while($row = mysql_fetch_assoc($res))


echo '
<div class="block-reviews" >
<p class="date-review" >'.$row["date_comment"].'</p>
<p class="author-review" ><strong>'.$row["name_commentator"].'</strong></p>
<p class="text-review">'.$row["text_comment"].'</p>
</div>';

?>
	


	


<p>&emsp;</p>
</div>	

</div>

	
<?php
include "call_ua.php";
?>
</body>
</html>