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
				<div class="col-md-9 text--blue">
					<h3>Стройматериалы/Штукатурка гипсовая</h3>
					<h4>Код товара:786325</h4>
					<h2 class="text--red margin-bottom">Штукатурка гипсовая 500x250x300 мм AEROC (D400)</h2>
					<div class="col-md-2 good-img">
						<div class="col-md-8 float-left-wrapper"><img src="img/catalogue/1.png" alt="" class="margin-img"></div>
						<div class="col-md-4 float-right-wrapper text--red text--center list good-word margin-img"><h4 class="margin-img">Акция</h4></div>
						<div class="col-md-4 float-right-wrapper text-faded text--center list good-hit margin-img"><h4 class="margin-img">Хит продаж</h4></div>
						<div class="col-md-4 float-right-wrapper text--center list good-sale margin-img"><h4 class="margin-img">-12% скидка</h4></div>
					</div>
					<div class="col-md-10" style="min-height:200px">
						<ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#home"><h4>Описание</h4></a></li>
						    <li><a data-toggle="tab" href="#menu1"><h4>Характеристика</h4></a></li>
						    <li><a data-toggle="tab" href="#menu2"><h4>Заводы</h4></a></li>
						    <li><a data-toggle="tab" href="#menu3"><h4>Доставка</h4></a></li>
						    <li><a data-toggle="tab" href="#menu4"><h4>Статьи</h4></a></li>
						    <li><a data-toggle="tab" href="#menu5"><h4>Документация</h4></a></li>
						    <li><a data-toggle="tab" href="#menu6"><h4>Хранение</h4></a></li>
						</ul>
						<div class="tab-content tab-content__tab">
						    <div id="home" class="tab-pane fade in active">
						    	<h4>Производство KNAUF (Россия)</h4>
						    	<h4>Вес брутто: 25 кг</h4>
						    	<p>Фруген</p>
						    	<p>для заделки швов</p>
						    	<p>гипсокартона и выравнивания</p>
						    	<p>поверхностей</p>
						    	<h4>Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара</h4>
						    </div>
						    <div id="menu1" class="tab-pane fade">
						    	<h4>Производство KNAUF (Россия)</h4>
						    	<h4>Вес брутто: 25 кг</h4>
						    	<p>Фруген</p>
						    	<p>для заделки швов</p>
						    	<p>гипсокартона и выравнивания</p>
						    	<p>поверхностей</p>
						    	<h4>Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара</h4>
						    </div>
						    <div id="menu2" class="tab-pane fade">
						    	<h4>Menu 2</h4>
						    	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						    </div>
						    <div id="menu3" class="tab-pane fade">
						    	<h4>Menu 3</h4>
						    	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						    </div>
						    <div id="menu4" class="tab-pane fade">
						    	<h4>Производство KNAUF (Россия)</h4>
						    	<h4>Вес брутто: 25 кг</h4>
						    	<p>Фруген</p>
						    	<p>для заделки швов</p>
						    	<p>гипсокартона и выравнивания</p>
						    	<p>поверхностей</p>
						    	<h4>Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара</h4>
						    </div>
						    <div id="menu5" class="tab-pane fade">
						    	<h4>Производство KNAUF (Россия)</h4>
						    	<h4>Вес брутто: 25 кг</h4>
						    	<h5>Фруген
						    	для заделки швов гипсокартона и выравнивания поверхностей
						    	<h4>Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара</h4>
						    </div>
						    <div id="menu6" class="tab-pane fade">
						    	<h4>Производство KNAUF (Россия)</h4>
						    	<h4>Вес брутто: 25 кг</h4>
						    	<p>Фруген</p>
						    	<p>для заделки швов</p>
						    	<p>гипсокартона и выравнивания</p>
						    	<p>поверхностей</p>
						    	<h4>Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара</h4>
						    </div>
						</div>
					</div>
					<div class="col-md-12">
						<h4>Похожие товары: </h4>
						<div class="chess-table--style">
							<div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
        	<!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo menu-item__image-position">
                                    <img src="img/catalogue/1.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4>Сухие смеси и грунтовки</h4>
                                            <h5>Код товара: 76348</h5>
                                            <h4>Цена: 2344 тг</h4>
                                        </div>
                                    </div>
                               		<a href="temp.php"><button href='temp.php' class='btn btn-first-good'><h5>Добавить в корзину</h5></button></a>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo menu-item__image-position">
                                    <img src="img/catalogue/10.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4>Металлопрокат</h4>
                                            <h5>Код товара: 76348</h5>
                                            <h4>Цена: 2344 тг</h4>
                                        </div>
                                    </div>
                               		<a href="temp.php"><button href='temp.php' class='btn btn-first-good'><h5>Добавить в корзину</h5></button></a>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo menu-item__image-position">
                                    <img src="img/catalogue/3.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4>Изоляционные материалы</h4>
                                            <h5>Код товара: 76348</h5>
                                            <h4>Цена: 2344 тг</h4>
                                        </div>
                                    </div>
                               		<a href="temp.php"><button href='temp.php' class='btn btn-first-good'><h5>Добавить в корзину</h5></button></a>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo menu-item__image-position">
                                    <img src="img/catalogue/14.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4>Сайдинг и фасадные панели</h4>
                                            <h5>Код товара: 76348</h5>
                                            <h4>Цена: 2344 тг</h4>
                                        </div>
                                    </div>
                               		<a href="temp.php"><button href='temp.php' class='btn btn-first-good'><h5>Добавить в корзину</h5></button></a>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo menu-item__image-position">
                                    <img src="img/catalogue/5.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4>Кровля и водосток</h4>
                                            <h5>Код товара: 76348</h5>
                                            <h4>Цена: 2344 тг</h4>
                                        </div>
                                    </div>
                               		<a href="temp.php"><button href='temp.php' class='btn btn-first-good'><h5>Добавить в корзину</h5></button></a>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo menu-item__image-position">
                                    <img src="img/catalogue/6.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4>Внешняя канализация</h4>
                                            <h5>Код товара: 76348</h5>
                                            <h4>Цена: 2344 тг</h4>
                                        </div>
                                    </div>
                               		<a href="temp.php"><button href='temp.php' class='btn btn-first-good'><h5>Добавить в корзину</h5></button></a>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo menu-item__image-position">
                                    <img src="img/catalogue/7.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4>Декоративный камень</h4>
                                            <h5>Код товара: 76348</h5>
                                            <h4>Цена: 2344 тг</h4>
                                        </div>
                                    </div>
                               		<a href="temp.php"><button href='temp.php' class='btn btn-first-good'><h5>Добавить в корзину</h5></button></a>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo menu-item__image-position">
                                    <img src="img/catalogue/9.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h4>Камины</h4>
                                            <h5>Код товара: 76348</h5>
                                            <h4>Цена: 2344 тг</h4>
                                        </div>
                                    </div>
                               		<a href="temp.php"><button href='temp.php' class='btn btn-first-good'><h5>Добавить в корзину</h5></button></a>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
				  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
        </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 text--blue text--center good-info">
					<h3>Средняя стоимость на рынке</h3>
					<h2>3264 тг</h2>
					<h4 class="text--left">Рейтинг</h4>
					<div class="star-ctr">
					  	<ul style="width:90%">
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
						</ul>
					</div>
					<a href="temp.php"><button class="btn btn-first-good"><h4>Цена производителей</h4></button></a>
					<div class="settings-roles__table-import settings-roles__table-import--style">
						<h4>Оставить отзыв</h4>
					</div>
					<div class="col-md-12 text--left">
						<div class="margin-bottom col-md-12">
							<h5 class="text--uppercase">Сергей Белов</h5>
							<p>Отличный подбор и качественный товар</p>
							<p class="text--uppercase">Преимущества</p>
							<p class="text--uppercase">Недостатки</p>
							<div class="good-like col-md-4 desktop--right-margin">
								<img src="img/like.png" class="float-left-wrapper" alt="">
								<h5 class="menu-right">8</h5>
							</div>
							<div class="good-like col-md-4"><img src="img/dis.png" class="float-left-wrapper" alt=""></div>
						</div>
						<div class="margin-bottom col-md-12">
							<h5 class="text--uppercase">Сергей Белов</h5>
							<p>Отличный подбор и качественный товар</p>
							<p class="text--uppercase">Преимущества</p>
							<p class="text--uppercase">Недостатки</p>
							<div class="good-like col-md-4 desktop--right-margin">
								<img src="img/like.png" class="float-left-wrapper" alt="">
								<h5 class="menu-right">8</h5>
							</div>
							<div class="good-like col-md-4"><img src="img/dis.png" class="float-left-wrapper" alt=""></div>
						</div>
						<div class="margin-bottom col-md-12">
							<h5 class="text--uppercase">Сергей Белов</h5>
							<p>Отличный подбор и качественный товар</p>
							<p class="text--uppercase">Преимущества</p>
							<p class="text--uppercase">Недостатки</p>
							<div class="good-like col-md-4 desktop--right-margin">
								<img src="img/like.png" class="float-left-wrapper" alt="">
								<h5 class="menu-right">8</h5>
							</div>
							<div class="good-like col-md-4"><img src="img/dis.png" class="float-left-wrapper" alt=""></div>
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