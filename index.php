<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<meta charset="utf-8">
	<title>Веломастер Уфа</title>
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="/site-files/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="/site-files/slick.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/site-files/slick.css">
</head>
<body>
<div id="wrapper">
	<div id="content">

		<!-- Шапка -->
		<div id="header-main">
			<div class="grid">
				<a href="/"><div id="logo"></div></a>
				<div id="short-contacts">
					<a href="tel:+79373384000">+7 937 338-40-00</a><br>
					<a href="#map">г. Уфа, ул. Менделеева, 114/2</a>
				</div>
				<div id="menu-main">
					<a href="/" class="active">О сервисе</a>
					<a href="/">Прайс-лист</a>
					<a href="/">Контакты</a>
				</div>
				<div class="clean"></div>
			</div>
			<div class="promo-text">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/slider.html'); ?>
			</div>
		</div>
		<!-- EOF Шапка -->

		<!-- В первую очередь -->
		<div id="first-of-all">
			<h1>Чем мы занимаемся —</h1>
			<div>
				<img src="img/fish-1.jpg">
				<span>Ремонт</span>
				Полный комплекс услуг&nbsp;по&nbsp;ремонту и&nbsp;обслуживанию велосипеда
			</div>
			<div>
				<img src="img/fish-1.jpg">
				<span>Тюнинг</span>
				Замена навесного оборудования на более качественное или подходящее
			</div>
			<div>
				<img src="img/fish-1.jpg">
				<span>Покраска</span>
				Пескоструйная обработка, покрытие кислотным грунтом, нанесение краски и лака
			</div>
			<div>
				<img src="img/fish-1.jpg">
				<span>Обучение</span>
				Обучающий курс по&nbsp;обслуживанию и&nbsp;ремонта велосипеда в&nbsp;домашних условиях
			</div>
			<div class="clean"></div>
			<a href="/" class="button">Записаться на ремонт</a>
		</div>
		<!-- EOF В первую очередь -->

		<!-- О сервисе -->
		<div id="about-velomaster">
			<div class="grid">
				<h1>О сервисе —</h1>
				Любой велосипед нуждается в заботе и тщательном обслуживании, а наши мастера знают что именно нужно вашему железному другу, чтобы он служил вам исправно и не подвел ни в какой ситуации. Наш сервис предоставляет полный набор услуг по ремонту велосипедов и мы не боимся сложных задач.
			</div>
		</div>
		<!-- EOF О сервисе -->

		<!-- Цены -->
		<div id="cost">
			<h1>Цены —</h1>
			<div>
				<span>150&thinsp;₽</span>
				<h2>Регулировка переключения</h2>
				Регулировка передач, тормозов, чистка тросиков, сборка на новую смазку рулевой колонки, кареточного узла, колесных втулок
			</div>
			<div>
				<span>150&thinsp;₽</span>
				<h2>Регулировка тормозов</h2>
				Регулировка передач, тормозов, чистка тросиков, сборка на новую смазку рулевой колонки, кареточного узла, колесных втулок
			</div>
			<div>
				<span>50&thinsp;₽</span>
				<h2>Смазка цепи</h2>
				Регулировка передач, тормозов, чистка тросиков, сборка на новую смазку рулевой колонки, кареточного узла, колесных втулок
			</div>
			<div>
				<span>100&thinsp;₽</span>
				<h2>Шиномонтаж</h2>
				Регулировка передач, тормозов, чистка тросиков, сборка на новую смазку рулевой колонки, кареточного узла, колесных втулок
			</div>
			<div class="clean"></div>
			<a href="/" class="button">Весь прайс-лист</a>
		</div>
		<!-- EOF Цены -->

		<!-- Статьи -->
		<div id="articles-mainpage">
			<h1>Статьи по ремонту —</h1>
			<div>
				<img src="img/fish-2.jpg">
				<a href="/">Регулировка тормозов V-brake</a>
			</div>
			<div>
				<img src="img/fish-2.jpg">
				<a href="/">Регулировка тормозов V-brake</a>
			</div>
			<div>
				<img src="img/fish-2.jpg">
				<a href="/">Регулировка тормозов V-brake</a>
			</div>
			<div>
				<img src="img/fish-2.jpg">
				<a href="/">Регулировка тормозов V-brake</a>
			</div>
			<div class="clean"></div>
		</div>
		<!-- EOF Статьи -->

		<!-- Запись на ремонт -->
		<div id="repair-record">
			<div class="grid-two">
				<h1>Запись на ремонт —</h1>
				<form action="" method="post">
					<label>Ваше имя:</label>
					<label>Тип ремонта:</label>
					<label>Желаемая дата:</label>
					<label>Телефон:</label>
					<input type="text" name="name" placeholder="Иван Иванов">
					<select size="1">
						<option>Комплексное ТО</option>
						<option>Чистка</option>
					</select>
					<input type="date" name="date" value="<?php echo date("Y-m-d");?>">
					<input type="text" name="phone" placeholder="Телефон">
					<button type="submit">Записаться</button>
				</form>
			</div>
		</div>
		<!-- EOF Запись на ремонт -->

		<!-- Контакты -->
		<div id="contacts-mainpage">
			<h1>Контакты —</h1>
			<div>
				<h2>Адрес —</h2>
				г. Уфа, ул. Менделеева, 114/2
			</div>
			<div>
				<h2>Режим работы —</h2>
				По записи
			</div>
			<div>
				<h2>Телефон —</h2>
				<a href="tel:+79373384000">+7&nbsp;937&nbsp;338-40&nbsp;00</a>
			</div>
			<div>
				<h2>Вконтакте —</h2>
				<a href="https://vk.com/rakhimov_i">vk.com/rakhimov_i</a>
			</div>
			<div class="clean"></div>
		</div>
		<!-- EOF Контакты -->

		<!-- Карта -->
		<script type="text/javascript">
			ymaps.ready(init);
			var myMap,
			myPlacemark;
			function init(){
				myMap = new ymaps.Map("map", {
					center: [54.71115609397562,55.991701160049445],
					zoom: 16,
					controls: ['zoomControl']
				});
				myPlacemark = new ymaps.Placemark([54.71115609397562,55.991701160049445], { 
					hintContent: 'Веломастер', 
					balloonContent: 'г. Уфа, ул. Менделеева, 114/2' 
				});
				myMap.geoObjects.add(myPlacemark);
				myMap.behaviors
				.disable(['scrollZoom']);
		    }
		</script>

		<div id="map-wrapper">
			<div id="map"></div>
		</div>
		<!-- EOF Карта -->

	</div>

	<div id="footer">
		<div id="copyright">
			<a href="/">velomaster-ufa.ru</a><br>
			г. Уфа, 2018 г.
		</div>
		<div class="footer-menu">
			<a href="/">О сервисе</a>
			<a href="/">Услуги</a>
			<a href="/">Прайс-лист</a>
		</div>
		<div class="footer-menu">
			<a href="/">Статьи</a>
			<a href="/">Контакты</a>
			<a href="/">Поиск по сайту</a>
		</div>
		<div id="footer-contacts">
			г. Уфа, ул. Менделеева, 114/2<br>
			<a href="tel:+79373384000">+7&nbsp;937&nbsp;338-40&nbsp;00</a><br>
			<a href="https://vk.com/rakhimov_i">vk.com/rakhimov_i</a>
		</div>
		<div id="made-by">
			Разработка сайта:<br>
			<a href="//marat-bakirov.ru">Марат Бакиров</a><br>
			<a href="/">Тимур Каррамов</a>
		</div>
		<div class="clean"></div>
	</div>

</div>
</body>
</html>