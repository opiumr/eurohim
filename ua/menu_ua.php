<div id="header-menu">
<nav class="dws-menu">
	<img class="logo-menu" src="http://euromash.kiev.ua/images/e_s.png" alt="">
	<input type="checkbox" name="toggle" id="menu" class="toggleMenu">
	<label for="menu" class="toggleMenu"><i class="fa fa-bars"></i>Меню</label>
<ul>
	<li><a <?php if ($punkt=='home_ua') {echo 'class="active"';} ?> href="home_ua.php">
	<i class="fa fa-home"></i>
	Про компанію</a></li>
	<li><a <?php if ($punkt=='catalog_ua') {echo 'class="active"';} ?> href="catalog_ua.php">
	<i class="fa fa-shopping-cart"></i>
	Продукція</a></li>
	<li><a <?php if ($punkt=='services_ua') {echo 'class="active"';} ?> href="services_ua.php">
	<i class="fa fa-cogs"></i>
	Послуги</a></li>
	<li><a <?php if ($punkt=='certificates_ua') {echo 'class="active"';} ?> href="certificates_ua.php">
	<i class="fa fa-certificate" aria-hidden="true"></i>
	Сертифікати</a></li>
	<li>
	<input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1">
	<a <?php if ($punkt=='ads_ua') {echo 'class="active"';} ?> href="#">
	<i class="fa fa-newspaper-o" aria-hidden="true"></i>
	Оголошення</a>
	<label for="sub_m1" class="toggleSubmenu">
		<i class="fa"></i>
		</label>
		<ul>
                      <li>
                          <a href="zakupki_ua.php">Закупівлі</a>
                      </li>
					  <li>
                          <a href="prodazi_ua.php">Продаж</a>
                      </li>
                      <li>
					      <a href="vacancies_ua.php">Вакансії</a>
					  </li>
					  <li>
					       <a href="reviews_ua.php">Відгуки</a>
					  </li>
		</ul>
	</li>
	<li><a <?php if ($punkt=='contacts_ua') {echo 'class="active"';} ?> href="contacts_ua.php">
	<i class="fa fa-envelope-open"></i>
	Контакти</a></li>
</ul>
</nav>
</div>