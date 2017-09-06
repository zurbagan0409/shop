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
				<div class="col-md-3">
					<div class="main-finder">
						<ul class="menu-list main-nav__menu-list">
							<li class="border-bottom--red dropdown-menu col-md-12 text--center">
								<div class="settings-roles__table-cat1 settings-roles__table-cat1--style">
								<h4 class="text--uppercase text--blue">Категория</h4>
								</div>
								<div id="drop-add-cat1" class="dropdown__content dropdown__content--style" style="position:relative;z-index:100;width:100%">
									<ul class="dropdown-list dropdown-list--style">
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Штукатурки</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Шпаклевки</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Сухие смеси для устройства полов</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Монтажные и кладочные смеси</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Грунтовки</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Сыпучие материалы</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Красители для бетонных смесей</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Добавки для строительных растворов</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Клей для плитки и камня</p></li>
									</ul>
								</div>
						<!--<div class="dropdown">
								<h4 class="text--center text--uppercase text--blue dropdown-toggle" data-toggle="dropdown">Стройматериалы<span class="caret"></span></h4>
								    <ul class="dropdown-menu">
								      <li><a href="#">HTML</a></li>
								      <li><a href="#">CSS</a></li>
								      <li><a href="#">JavaScript</a></li>
								    </ul>
								</div>-->
							</li>
							<li class="border-bottom--red dropdown-menu col-md-12 text--center">
								<div class="settings-roles__table-cat2 settings-roles__table-cat2--style">
									<h4 class="text--uppercase text--blue">Бренд производителя</h4>
								</div>
								<div id="drop-add-cat2" class="dropdown__content dropdown__content--style" style="position:relative;z-index:100;width:100%">
									<ul class="dropdown-list dropdown-list--style">
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Брэнд1</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Брэнд2</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Брэнд3</p></li>
									</ul>
								</div>	
							</li>
							<li class="border-bottom--red dropdown-menu col-md-12 text--center">
								<div class="settings-roles__table-cat3 settings-roles__table-cat3--style">
									<h4 class="text--uppercase text--blue">Страна-производитель</h4>
								</div>
								<div id="drop-add-cat3" class="dropdown__content dropdown__content--style" style="position:relative;z-index:100;width:100%">
									<ul class="dropdown-list dropdown-list--style">
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Штукатурстан</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Шпаклевия</p></li>
										<li class="dropdown-list__item dropdown-list__item--style text--left"><p>Остров Сухие смеси</p></li>
									</ul>
								</div>	
							</li>
							<li class="border-bottom--red dropdown-menu col-md-12 text--center">
								<div class="settings-roles__table-cat4 settings-roles__table-cat4--style">
									<h4 class="text--uppercase text--blue">Цена</h4>
								</div>
								<div id="drop-add-cat4" class="dropdown__content dropdown__content--style" style="position:relative;z-index:100;width:100%">
									<form class="form-inline text--left col-md-12" action="">
									    <div class="col-md-6">
									    	от
									      	<input type="email" class="form-control" id="email" style="width:80%" name="email">
									    </div>
									    <div class="col-md-6">
									    	до
									      	<input type="password" class="form-control" id="pwd" style="width:80%" name="pwd">
									    </div>
									    <p>Price Range:<p id="amount"></p></p>
									    <div id="slider-range"></div>
									    <input type="hidden" id="amount1">
   										<input type="hidden" id="amount2">
									</form>
								</div>	
							</li>
							<li class="border-bottom--red dropdown-menu col-md-12 text--center">
								<div class="settings-roles__table-cat5 settings-roles__table-cat5--style">
									<h4 class="text--uppercase text--blue">Тип основания</h4>
								</div>
								<div id="drop-add-cat5" class="dropdown__content dropdown__content--style" style="position:relative;z-index:100;width:100%">
									<form class="form-inline text--left" action="">
									    <input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style">
										<label class="settings-roles__adding-label--check">
										<p>штукатурка</p>
										</label><br>
										<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style">
										<label class="settings-roles__adding-label--check">
										<p>бетон</p>
										</label><br>
										<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style">
										<label class="settings-roles__adding-label--check">
										<p>гипсовая штукатурка</p>
										</label><br>
										<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style">
										<label class="settings-roles__adding-label--check">
										<p>цементная штукатурка</p>
										</label><br>
									</form>
								</div>	
							</li>
							<li class="border-bottom--red dropdown-menu col-md-12 text--center">
								<div class="settings-roles__table-cat6 settings-roles__table-cat6--style">
									<h4 class="text--uppercase text--blue">Для работы в помещениях</h4>
								</div>
								<div id="drop-add-cat6" class="dropdown__content dropdown__content--style" style="position:relative;z-index:100;width:100%">
									<form class="form-inline text--left" action="">
									    <input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style">
										<label class="settings-roles__adding-label--check">
										<p>комната</p>
										</label><br>
										<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style">
										<label class="settings-roles__adding-label--check">
										<p>санузел</p>
										</label><br>
										<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style">
										<label class="settings-roles__adding-label--check">
										<p>улица</p>
										</label><br>
									</form>
								</div>		
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-9 border-left--red">
					<div class="main-finder col-md-12">
						<div class="text--blue text--center">
							<div style="margin-bottom:3%"></div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-placement="left" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-placement="left" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="text--blue text--center">
							<div style="margin-bottom:3%"></div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-placement="left" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-placement="left" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="text--blue text--center">
							<div style="margin-bottom:3%"></div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Штукатурка гипсовая" data-toggle="popover" data-html="true" data-trigger="click" data-placement="left" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Штукатурка гипсовая</h4>
								</a>
							</div>
							<div class="col-md-2">
								<a href="#" title="Побелка" data-toggle="popover" data-html="true" data-trigger="click" data-placement="left" data-content="
								<h4>Код товара: 76348</h4>
								<h4>Наличие на 31.07.2017</h4>
								<h4>Поставщиков: 8 шт</h4>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<p>короткое описание короткое описание</p>
								<a href='tovar.php'><button class='btn btn-first-cat'><h4>Выбрать поставщика</h4></button></a>
								">
									<div class="menu-item__image-position-cat">
										<img src="img/catalogue/1.png" alt="Документы" class="menu-item__image-cat menu-item__image--style">
									</div>
									<h4 class="text--center">Побелка</h4>
								</a>
							</div>
						</div>
					</div>
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