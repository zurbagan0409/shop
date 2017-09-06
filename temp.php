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
			<div class="row desktop--left-margin desktop--right-margin">
			<div style="margin-bottom:2%"></div>
				<div class="float-left-wrapper">
					<h3>Корзина</h3>
				</div>
				<div class="float-right-wrapper">
					<form class="form-inline" action="">
						<div class="form-group">
							<h4>Физическое лицо</h4>
						    <input type="radio" name="face" value="Физическое лицо">
						</div>
						<div class="form-group">
						    <h4>Юридическое лицо</h4>
						    <input type="radio" name="face" value="Юридическое лицо">
						</div>
					</form>
				</div>
				<div class="col-md-12 cart-info list">
					<div class="cart-header col-md-12">
						<div class="col-md-2">
							<div class="col-md-2"><h5></h5></div>
							<div class="col-md-9"><h5>Товар</h5></div>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2"><h5>Производитель</h5></div>
						<div class="col-md-1"><h5>Цена</h5></div>
						<div class="col-md-1"><h5>Количество</h5></div>
						<div class="col-md-1"><h5>Сумма</h5></div>
						<div class="col-md-1"><h5>Вес</h5></div>
						<div class="col-md-1"><h5>Доставка</h5></div>
						<div class="col-md-1"><h5>Адрес</h5></div>
					</div>
					<div class="cart-content list col-md-12" style="margin-top:1%">
						<div class="col-md-2">
							<div class="col-md-2"><h5>1</h5></div>
							<div class="col-md-9">
								<div class="menu-item__image-position">
									<img src="img/catalogue/30.png" alt="Документы" class="menu-item__image menu-item__image--style">
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<h5>Код: 27325</h5>
							<h4>Фильтры для питьевой воды</h4>
						</div>
						<div class="col-md-2">
							<form action="">
								<select name="product">
									<option value="">Product1</option>
									<option value="">Product2</option>
									<option value="">Product3</option>
									<option value="">Product4</option>
									<option value="">Product5</option>
									<option value="">Product6</option>
								</select>
							</form>
						</div>
						<div class="col-md-1"><h5>7538 тг за штуку</h5></div>
						<div class="col-md-1"><h5>1</h5></div>
						<div class="col-md-1"><h5>7538 тг</h5></div>
						<div class="col-md-1"><h5>20 кг</h5></div>
						<div class="col-md-1 list">
							<form action="">
								    <input type="text" style="width:70%" value="">
							</form>
						</div>
						<div class="col-md-1 list">
							<form action="">
								    <input type="text" style="width:70%" value="">
							</form>
						</div>
					</div>
					<div class="col-md-6 сart-li">
						<ul class="nav nav-tabs">
						    <li class="active pull-right"><a data-toggle="tab" href="#home" style="background-color: #fff;"><h5>Доставка</h5></a></li>
						    <li class="pull-right"><a data-toggle="tab" href="#menu1" style="background-color: #fff;"><h5>Самовывоз</h5></a></li>
						</ul>
						<div class="tab-content tab-content__cart">
						    <div id="home" class="tab-pane fade in active ">
						    	<form action="">
									<div class="form-group">
										<h5>1. Введите адрес доставки</h5>
									    <input type="text" class="form-control" value="" name="address">
									</div>
									<div class="form-group">
									    <h5>2. Время доставки</h5>
									    <select name="time" class="form-control">
											<option value="">7:00-12:00</option>
											<option value="">12:00-16:00</option>
											<option value="">18:00-23:00</option>
										</select>
									</div>
									<div class="form-group">
									    <h5>3. ФИО</h5>
									    <input type="text" value="" class="form-control" name="name">
									</div>
									<div class="form-group">
									    <h5>4. Ваша электронная почта</h5>
									    <input type="text" value="" class="form-control" name="email">
									</div>
									<div class="form-group">
									    <h5>5. Ваша номер телефона</h5>
									    <input type="text" value="" class="form-control" name="phone">
									</div>
									<div class="form-group checkbox">
									    <label>
									    <input type="checkbox" value="" name="logist"><h5>Грузчики</h5></label>
									    <label>
									    <input type="checkbox" value="" name="delivery"><h5>Доставка</h5></label>
									</div>
									<center><button type="submit" href='#' class='btn btn-first-cart'><h5>Купить без регистрации</h5></button></center>
								</form>
						    </div>
						    <div id="menu1" class="tab-pane fade">
								<center><button type="submit" href='#' class='btn btn-first-cart margin-result'><h5>Консолидировать</h5></button></center>
						    </div>
						</div>
					</div>
					<div class="col-md-6" style="position:relative">
						<div class="col-md-4 cart-result margin-result">
							<h4>Сумма заказа: 9235 тг</h4>
							<h4>Грузчики: 1479 тг</h4>
						</div>
					</div>
					<div class="col-md-12"><div style="margin-bottom:2%"></div></div>
				</div>
			</div>
		</div>
			
		<div style="margin-bottom:2%"></div>
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