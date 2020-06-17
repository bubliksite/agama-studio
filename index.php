
 <?php get_header(); ?>

	<header class="container-fluid dark">
		<div class="d-flex justify-content-between align-items-center">
			<div class="col-md-4 dont-display-mobile">
				<ul class="nav justify-content-start">
					<li class="nav-item mr-3">
						Наш сайт в разработке.
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt="логотип">
			</div>
			<div class="col-md-4">
				<ul class="nav justify-content-end">
					<li class="nav-item mr-3 dont-display-desktop">
						Наш сайт в разработке.
					</li>
					<!--<li class="nav-item">
						<a class="nav-link active" href="#top">Студия</a>
					</li>
					<li class="nav-item ml-3 mr-5">
						<a class="nav-link" href="#studio-contact">Контакты</a>
					</li>
					<li class="nav-item language">
						<a class="nav-link active" href="#">Ru</a>
					</li>
					<li class="nav-item language">
						<a class="nav-link" href="#">En</a>
					</li>-->
				</ul>
			</div>
		</div>
	</header>


	<div class="background studio" id="top">
		<div class="container-fluid">
			<h1 class="dark">
				Создаем <br>
				мультфильмы
			</h1>
			<p>
				Cтудия «Агама Фильм» основана в 2017 году с целью
				реализации проектов в области анимации. Основные
				направления деятельности студии – подготовка и реализация
				анимационных проектов любого уровня сложности.
				<br>
				Основной проект студии «Фееринки» на сегодняшний день
				находится в активной разработке и первые серии увидят свет
				уже осенью 2019 года.
			</p>
			<img src="<?php echo get_template_directory_uri(); ?>/img/pink-fairy.png" alt="" class="dont-display-desktop">
		</div>

		<!--<a href="#studio-description"><img class="chevron-down" src="<?php echo get_template_directory_uri(); ?>/img/chevron-down.png" alt="вниз"></a>-->
	</div>
	<div id="studio-contact" class="">
		<img class="map dont-display-mobile" src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="">
		<img class="map dont-display-desktop" src="<?php echo get_template_directory_uri(); ?>/img/map-2.jpg" alt="">
		<h1 class="dark">
			Контакты
		</h1>
		<div class="container-fluid" style="padding-left: 5%;">
			<div class="row my-3 py-3">
				<div class="col-lg-6">
					<p class="regular">
						129085, Москва г, Годовикова ул, дом № 9, строение 3 <br>
						<span class="black-bold"><a class="no-link" href="tel:+7 (495) 230-01-80">8 (495) 230-01-80</a></span>
					</p>
					<br>
					<div class="dont-display-mobile">
						<p class="pink-bold">Генеральный продюсер</p>
						<p class="regular">Дмитрий Ловейко <a class="no-link" href="mailto: loveiko@animaccord.com">loveiko@animaccord.com</a></p>
						<p class="pink-bold">Исполнительный продюсер</p>
						<p class="regular">Марина Бурлаченко <a class="no-link" href="mailto: mb@agamafilm.ru">mb@agamafilm.ru</a></p>
						<p class="pink-bold">Художественный руководитель</p>
						<p class="regular">Наталья Березовая <a class="no-link" href="mailto: nb@agamafilm.ru">nb@agamafilm.ru</a></p>
						<br>
						<br>
						<p class="pink-bold">ИНФОРМАЦИЯ О ПРАВООБЛАДАТЕЛЕ</p>
						<p class="regular">
							LARANJO ENTERPRISES LIMITED (республика Кипр) <br>
							Регистрационный номер HE 185179. <br>
							Адрес: ул. Омиру, 64, Империум Тауэр, 3096, г. Лимассол, Кипр
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="pink-bold">Отправить сообщение</p>
					<?php echo do_shortcode( '[caldera_form id="CF5d0aa74d3c796"]' ); ?>
				</div>
			</div>
		</div>
	</div>
	<!--<footer>
		<ul class="list-unstyled">
			<li class="mb-3"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook"></li>
			<li class="my-3"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter"></li>
		</ul>
	</footer>-->


 <?php get_footer(); ?>