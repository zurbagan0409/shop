<?php

	if (preg_match('/(?i)msie [2-9]/', @$_SERVER['HTTP_USER_AGENT'], $B)) {
		// Browsers IE 9 and below
		?>fuck you<?php
	} 
	else {

		if (preg_match('/(?i)chrome [0-23]/', @$_SERVER['HTTP_USER_AGENT'], $B)) {
			// Browsers chrome 23 and below
			?>fuck you<?php
		} 
		else {

			if (preg_match('/(?i)opera [0-14]/', @$_SERVER['HTTP_USER_AGENT'], $B)) {
			// Browsers opera 14 and below
			?>fuck you<?php
			} 
			else {
				if (preg_match('/(?i)mozilla [0-18]/', @$_SERVER['HTTP_USER_AGENT'], $B)) {
				// Browsers mozilla 18 and below
				?>fuck you<?php
				}
			}
		}
	}

				//header("Location:index.html");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Склад</title>
	<link rel="stylesheet" href="./dest/normalize.css">
	<link rel="stylesheet" href="./dest/jquery-ui.min.css">
	<link rel="stylesheet" href="./dest/bootstrap.min.css">
	<link rel="stylesheet" href="./dest/style.min.css">
</head>
<body class="page">

	<main class="main page__main main--style clearfix">
		<div class="container-fluid">
			<div class="row">
				<div class="main-finder col-md-12">
					<div class="text--blue text--center">
						<div style="margin-bottom:3%"></div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Сухие смеси и грунтовки</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/2.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Строительство стен и перегородок</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/3.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Изоляционные материалы</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/4.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Гидроизоляционные материалы</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/5.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Кровля и водосток</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/6.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Внешняя канализация</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
					</div>
				</div>
				<div class="main-finder col-md-12">
					<div class="text--blue text--center">
						<div style="margin-bottom:5%"></div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/14.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Сайдинг и фасадные панели</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/7.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Декоративный камень</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/8.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Потолки подвесные и акссесуары</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/9.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Камины</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/10.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Металлопрокат</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/11.png" alt="Документы" class="menu-item__image menu-item__image--style">
								<h4 class="text--center">Плитка тротуарная и дренажные каналы</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat'><h4>Перейти</h4></button></a>
						</div>
					</div>
				</div>
				<div class="main-finder col-md-12">
					<div class="text--blue text--center">
						<div style="margin-bottom:5%"></div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/15.png" alt="Документы" class="menu-item__image menu-item__image--style disable_img">
								<h4 class="text--center">Расходные материалы</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat disable_img' disabled><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/12.png" alt="Документы" class="menu-item__image menu-item__image--style disable_img">
								<h4 class="text--center">Строительная химия</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat disable_img' disabled><h4>Перейти</h4></button></a>
						</div>
						<div class="col-md-2">
							<a href="category.php">
								<div class="menu-item__image-position">
									<img src="img/catalogue/13.png" alt="Документы" class="menu-item__image menu-item__image--style disable_img">
								<h4 class="text--center">Строительное оборудование</h4>
								</div>
							</a>
							<a href="category.php"><button class='btn-cat-page menu-item__cat disable_img' disabled><h4>Перейти</h4></button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="margin-bottom:4%"></div>
		<div class="footer">
			<div class="main-finder page__main-finder main-finder--style-f-first">
				<div class="text-faded">
					<ul class="menu-list main-nav__menu-list">
						<li class="col-mdf-2 text--menu">
							<a href="#">
								<h4 class="text--center text--menu--text">Более 12 млн. наименованиий</h4>
							</a>
						</li>
						<li class="col-mdf-2 text--menu">
							<a href="#">
								<h4 class="text--center text--menu--text">Удобные варианты отгрузки</h4>
							</a>
						</li>
						<li class="col-mdf-2 text--menu">
							<a href="#">
								<h4 class="text--center text--menu--text">Система лояльности</h4>
							</a>
						</li>
						<li class="col-mdf-2 text--menu">
							<a href="#">
								<h4 class="text--center text--menu--text">Возврат и обмен товара</h4>
							</a>
						</li>
						<li class="col-mdf-2 text--menu">
							<a href="#">
								<h4 class="text--center text--menu--text">Возможность оплачивать где, и как угодно</h4>
							</a>
						</li>
						<li class="col-mdf-2 text--menu">
							<a href="#">
								<h4 class="text--center text--menu--text">Работаем круглосуточно</h4>
							</a>
						</li>	
						<li class="col-mdf-2 text--menu">
							<a href="#">
								<h4 class="text--center text--menu--text">Гарантия от производство</h4>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-finder page__main-finder main-finder--style">
				<div class="text-faded">
					<h3>
						Интернет-магазин бытовой техники и электроники
					</h3>
					<h4></h4>
					<h5>
						Сегодня, чтобы с уверенностью смотреть в будущее, важно уметь балансировать
						 между высокой скоростью и наслаждением мгновением, гениальной простотой и 
						 функциональной сложностью. Интернет-магазин бытовой техники «Технопарк» предлагает
						  технику и сервис, которые помогают найти баланс и наполняют будни новыми эмоциями. 
						  Мелкая и крупная бытовая техника представлена в широком ассортименте: от холодильников
						   и стиральных машин до телевизоров и ноутбуков, от пылесосов и очистителей воздуха 
						   до мультиварок и духовых шкафов, от обогревателей и кондиционеров до планшетов и 
						   смартфонов. Приобретенные товары можно сразу оснастить всем необходимым – на сайте 
						   представлен богатый выбор аксессуаров и сопутствующих товаров. Сервис 
						   интернет-магазина бытовой техники «Технопарк» строится на принципах оперативности, 
						   честности и индивидуального подхода к каждому клиенту. Покупки можно оплатить любым 
						   удобным способом, в том числе картой на сайте и при доставке. Имеется возможность оформить 
						   кредит on-line. Вы получаете индивидуального менеджера-профессионала, готового ответить на любые 
						   Ваши вопросы, и выгодные бонусы за каждую покупку. Продажа бытовой техники осуществляется с 
						   доставкой по Москве, Санкт-Петербургу и другим городам России. Купить бытовую технику можно 
						   с быстрой доставкой по всей России – в более чем 4000 городов и населенных пунктов.
					</h5>
				</div>
			</div>
			<div class="main-finder main-finder--style-third col-md-12">
				<div class="text-faded">
					<ul class="menu-list main-nav__menu-list">
						<li class="col-mdf-2 text--menu">
							<a href="#">
								<h5 class="text--center text--menu--text">Алматы</h5>
							</a>
						</li>
						<li class="col-md-3 text--menu">
							<a href="#">
								<h3 class="text--center text--menu--text">Сервис АИДА</h3>
							</a>
						</li>
						<li class="col-md-3 text--menu">
							<a href="#">
								<h3 class="text--center text--menu--text">Помощь и поддержка</h3>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>		
	</main>
	
	
	<script src="dest/libs.min.js"></script>
	<script src="dest/bootstrap.min.js"></script>
	<script src="dest/jquery-ui.min.js"></script>
	<script src="dest/main.min.js"></script>
</body>
</html>