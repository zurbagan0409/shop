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
<div id="page-preloader"><span class="spinner"></span></div>


	<div class="main-finder page__main-finder main-finder--style-first">
		<div class="text-faded">
			<h4 class="menu-left">Алматы</h4>
			<div class="finder-input-wrapper">
				<h4 style="float: left;">Магазины</h4>
				<h4 class="menu-left">Покупателям</h4>
				<h4 class="menu-left">Наши проекты</h4>
			</div>
			<a href="#" id="opener"><h4 class="menu-right">Войти</h4></a>
			<a href="#" id="opener_reg"><h4 class="menu-right">Регистрация</h4></a>
			<h4 class="menu-right">Русский</h4>
		</div>
	</div>
	<div class="main-finder page__main-finder main-finder--style">
		<a href="index.php"><img src="img/icon.png" class="menu-left" alt=""></a>
		<div class="finder-input-wrapper main-finder--style--icon">
			<form action="" class="finder-form finder-form--style">
				<center><input type="text" class="finder-input main-finder__input main-finder__input--style" style="float: left" placeholder="Поиск"></center>
			</form>
			<a href="temp.php"><button class="menu-right" style="background-color:#a1a7b3;"><h4>Корзина</h4></button></a>
		</div>
	</div>
	<div class="main-finder main-finder--style-third col-md-12">
		<div class="text-faded">
			<ul class="menu-list main-nav__menu-list">
				<li class="col-mdm-2 text--menu">
					<a class="menu-item__link" href="build.php">
						<h4 class="text--center text--menu--text">Стройматериалы</h4>
					</a>
				</li>
				<li class="col-mdm-2 border-left text--menu">
					<a class="menu-item__link" href="electr.php">
						<h4 class="text--center text--menu--text">Электротовары</h4>
					</a>
				</li>
				<li class="col-mdm-2 border-left text--menu">
					<a class="menu-item__link" href="instruments.php">
						<h4 class="text--center text--menu--text">Инструменты</h4>
					</a>
				</li>
				<li class="col-mdm-2 border-left text--menu">
					<a class="menu-item__link" href="otdel.php">
						<h4 class="text--center text--menu--text">Отделочные материалы</h4>
					</a>
				</li>
				<li class="col-mdm-2 border-left text--menu">
					<a class="menu-item__link" href="stolyar.php">
						<h4 class="text--center text--menu--text">Столярные изделия</h4>
					</a>
				</li>
				<li class="col-mdm-2 border-left text--menu">
					<a class="menu-item__link" href="water.php">
						<h4 class="text--center text--menu--text">Водоснабжение и канализация</h4>
					</a>
				</li>	
				<li class="col-mdm-2 border-left text--menu">
					<a class="menu-item__link" href="warm.php">
						<h4 class="text--center text--menu--text">Отопление и вентиляция</h4>
					</a>
				</li>
				<li class="col-mdm-2 border-left text--menu">
					<a class="menu-item__link" href="brand.php">
						<h4 class="text--center text--menu--text">Выбор по бренду</h4>
					</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div style="display:none;" id="dialog" title="Введите логин и пароль">
		<form class="text--left col-md-12" action="">
		    <div class="form-group">
		    	<h4>Логин</h4>
		      	<input type="email" class="form-control" id="email" name="email">
		    </div>
		    <div class="form-group">
		    	<h4>Пароль</h4>
		      	<input type="password" class="form-control" id="pwd" name="pwd">
		    </div>
		    <center><button href='#' class='btn btn-first-cat text--center'><h4 class="arial">Войти</h4></button></center>
		</form>
		<a href=""><h4>Забыли пароль</h4></a>
	</div>
	<div style="display:none;" id="dialog_reg" title="Форма Регистрации">
		<form class="text--left col-md-12" action="">
		    <div class="form-group">
		    	<h4>Имя</h4>
		      	<input type="text" class="form-control" id="firstname" name="firstname">
		    </div>
		    <div class="form-group">
		    	<h4>Фамилия</h4>
		      	<input type="text" class="form-control" id="lastname" name="lastname">
		    </div>
		    <div class="form-group">
		    	<h4>Логин</h4>
		      	<input type="text" class="form-control" id="login" name="login">
		    </div>
		    <div class="form-group">
		    	<h4>Пароль</h4>
		      	<input type="password" class="form-control" id="pwd" name="pwd">
		    </div>
		    <div class="form-group">
		    	<h4>Подтверждение пароля</h4>
		      	<input type="password" class="form-control" id="pwd1" name="pwd1">
		    </div>
		    <center><button href='#' class='btn btn-first-cat text--center'><h4 class="arial">Регистрация</h4></button></center>
		</form>
	</div>	
	<main id="content" class="main page__main main--style clearfix">
		<div class="container-fluid">
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="img/build.png" alt="Chania">
				      <div class="carousel-caption">
				        <h2 class="text--red text--uppercase text--big arial--bold">Стройматериалы</h2>
				        <p class="text--blue text--medium-size arial--bold">В процессе строительства, эксплуатации и ремонта зданий и сооружений строительные 
				        	изделия и конструкции, из которых они возводятся, подвергаются различным 
				        	физико-механическим, физическим и технологическим воздействиям. От инженера-строителя 
				        	требуется со знанием дела правильно выбрать материал, изделия или конструкцию которая 
				        	обладает достаточной стойкостью, надёжностью и долговечностью для конкретных условий.
				        </p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="img/electric.png" alt="Chicago">
				      <div class="carousel-caption">
				        <h2 class="text--red text--uppercase text--big--not-so-big arial--bold">Электроматериалы</h2>
				        <p class="text--blue text--medium-size arial--bold">
				        	Электрика ближе всего понимание электроматериалов в виде предметов, приспособлений, сырья и прочего. Точнее, конкретные вещи, что используются при работе. Их ещё принято называть расходными электроматериалами. Не стоит путать электротехнические устройства с электроматериалами. Так как есть ощутимая разница между ними. Подумайте сами, устройство в любой электрической схеме (системе) выполняет основную функциональную задачу, к тому же, имеет относительно сложную внутреннюю конструкцию, в то время как расходный материал выступает в роли помощника и дополнения.
				        </p>
				      </div>
				    </div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<div id="myCarouselz" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarouselz" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarouselz" data-slide-to="1"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="img/factory_img.png" alt="Chania">
				      <div class="carousel-caption">
				        <h2 class="text--gradient text--uppercase text--big--so-so-big">Заводы</h2>
				        <p class="text--blue text--medium-size arial--bold">В процессе строительства, эксплуатации и ремонта зданий и сооружений строительные 
				        	изделия и конструкции, из которых они возводятся, подвергаются различным 
				        	физико-механическим, физическим и технологическим воздействиям. От инженера-строителя 
				        	требуется со знанием дела правильно выбрать материал, изделия или конструкцию которая 
				        	обладает достаточной стойкостью, надёжностью и долговечностью для конкретных условий.
				        </p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="img/factory_img.png" alt="Chicago">
				      <div class="carousel-caption">
				        <h2 class="text--gradient text--uppercase text--big--so-so-big">Заводы</h2>
				        <p class="text--blue text--medium-size arial--bold">
				        В процессе строительства, эксплуатации и ремонта зданий и сооружений строительные 
				        	изделия и конструкции, из которых они возводятся, подвергаются различным 
				        	физико-механическим, физическим и технологическим воздействиям. От инженера-строителя 
				        	требуется со знанием дела правильно выбрать материал, изделия или конструкцию которая 
				        	обладает достаточной стойкостью, надёжностью и долговечностью для конкретных условий.
				        </p>
				      </div>
				    </div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarouselz" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarouselz" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<div style="margin-bottom:2px"></div>
				<div class="col-md-12">
			      <div class="carousel slide multi-item-carousel" id="theCarousel">
			        <center><div class="carousel-inner">
			          <div class="item active">
			            <div class="col-xs-4"><a href="temp.php"><img src="img/sandwich2.png" class="img-responsive"></a>
							<a href="temp.php"><button class='btn btn-first-page'><h3>Хит продаж</h3></button></a>
			            </div>
			          </div>
			          <div class="item">
			            <div class="col-xs-4"><a href="temp.php"><img src="img/sandwich1.png" class="img-responsive"></a>
							<a href="temp.php"><button class='btn btn-first-page'><h3>Хит продаж</h3></button></a>
			            </div>
			          </div>
			          <div class="item">
			            <div class="col-xs-4"><a href="temp.php"><img src="img/sandwich2.png" class="img-responsive"></a>
							<a href="temp.php"><button class='btn btn-first-page'><h3>Хит продаж</h3></button></a>
						</div>
			          </div>
			          <!-- add  more items here -->
			          <!-- Example item start:  -->
			          
			          
			          <!--  Example item end -->
			        </div></center>
			        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
			        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			      </div>
			    </div>
			</div>
		</div>
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
	<script type="text/javascript">

		$(window).on('load', function () {
		    var $preloader = $('#page-preloader'),
		        $spinner   = $preloader.find('.spinner');
		    $spinner.fadeOut();
		    $preloader.delay(350).fadeOut('slow');
		});
		$(document).ready(function() {
			
	        $('.menu-item__link').click(function(){
	            var cont = $('#content');
	            var thisHref = $(this).attr('href');
	            	cont.load(''+thisHref+'');
	            	return false;      
	    	})
	    });
	</script>
</body>
</html>