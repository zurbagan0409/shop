<!DOCTYPE html>
<html lang="ru">
<head>

</head>
<body class="page">
	<div id="content" class="main-content main__main-content">
		<div class="clearfix">
			<div class="tabs">
			<!--header-->
				<div class="content-function content-function--style clearfix">
					<ul class="tab-links tabs__tab-links tab-links--style">
						<li class="tab-links__item"><a href="#tab1" class="tab-link tab-link--style tab-link--active">Учетные данные</a></li>
						<li class="tab-links__item"><a href="#tab2" class="tab-link tab-link--style">Реквизиты</a></li>
						<li class="tab-links__item"><a href="#tab3" class="tab-link tab-link--style">Пользователи (юр.лица)</a></li>
						<li class="tab-links__item"><a href="#tab4" class="tab-link tab-link--style">Подписки</a></li>
						<li class="tab-links__item"><a href="#tab5" class="tab-link tab-link--style">Уведомления (куда)</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="horizontal-tabs__container">
			<div id="tab1" class="horizontal-tabs__content settings-opportunities-grad settings-opportunities-style settings-opportunities-style-height horizontal-tabs-active">
				<p class="settings-opportunities-heading">УЧЕТНЫЕ ДАННЫЕ</p>
				<form>
					<div class="settings-opportunities-containerlabel">
						<p class="settings-opportunities-label">Фамилия</p>
						<p class="settings-opportunities-label">Имя</p>
						<p class="settings-opportunities-label">Телефон мобильный</p>
						<p class="settings-opportunities-label">Домашний телефон</p>
						<p class="settings-opportunities-label">E-mail</p>
						<p class="settings-opportunities-label">Пароль</p>
						<p class="settings-opportunities-label">Еще раз</p>
					</div>
					<div class="settings-opportunities-containerinput">
						<input type="text" class="settings-opportunities-input" name="surname" id="surname" ><br>
						<input type="text" class="settings-opportunities-input" name="name" id="name" ><br>
						<input type="number" class="settings-opportunities-input" name="telnumber" id="telnumber" maxlength="11"><br>
						<input type="number" class="settings-opportunities-input" name="domnumber" id="domnumber" maxlength="11"><br>						
						<input type="email" class="settings-opportunities-input" name="email" id="email" ><br>
						<input type="password" class="settings-opportunities-input" name="password" id="password" ><br>
						<input type="password" class="settings-opportunities-input" name="password" id="password" ><br>
					</div>
				</form>
			</div>
			<div id="tab2" class="horizontal-tabs__content settings-opportunities-grad settings-opportunities-style settings-opportunities-style-height">
				<p class="settings-opportunities-heading">РЕКВИЗИТЫ</p>
				<form>
					<div class="settings-opportunities-containerlabel">
						<p class="settings-opportunities-label">Наименование клиента</p>
						<p class="settings-opportunities-label">ИИН/БИН клиента</p>
						<p class="settings-opportunities-label">КБЕ</p>
						<p class="settings-opportunities-label">№ счета</p>
						<p class="settings-opportunities-label">Код клиента</p>
						<p class="settings-opportunities-label">Контактные телефоны</p>
					</div>
					<div class="settings-opportunities-containerinput">
						<input type="text" class="settings-opportunities-input" name="surname" id="surname" ><br>
						<input  type="number" class="settings-opportunities-input" name="inn" id="iin" maxlength="12"><br>
						<input  type="number" class="settings-opportunities-input" name="kbe" id="kbe"><br>
						<input  type="number" class="settings-opportunities-input" name="account" id="account" ><br>						
						<input  type="number" class="settings-opportunities-input" name="code" id="code" ><br>
						<input  type="number" class="settings-opportunities-input" name="numberы" id="numberы" maxlength="11"><br>
					</div>
				</form>
			</div>
			<div id="tab3" class="horizontal-tabs__content settings-opportunities-grad settings-opportunities-style settings-opportunities-style-height">
				<p class="settings-opportunities-heading settings-opportunities-heading-user">Пользователи</p>
				<div class="warehouse-window-content-dropdown">
					<div class="warehouse-window-content-dropdown-plus plus">
						<p class="warehouse-window-content-dropdown-plus-add">+</p>
					</div>
					<div id="drop-add-userInTable" class="warehouse-window-content-dropdown-main warehouse-window-content-dropdown-main-user">
						<form>
							<div class="warehouse-window-content-dropdown-main-block warehouse-window-content-dropdown-main-block-user">
								<div style="width: 100%; position: relative;">
									<div class="warehouse-window-content-dropdown-main-block-left warehouse-window-content-dropdown-main-block-left-user">
										<p class="warehouse-window-content-dropdown-main-block-label warehouse-window-content-dropdown-main-block-label-user">ФИО:</p>
										<p class="warehouse-window-content-dropdown-main-block-label warehouse-window-content-dropdown-main-block-label-user">E-mail:</p>
										<p class="warehouse-window-content-dropdown-main-block-label warehouse-window-content-dropdown-main-block-label-user">Права:</p>

									</div>
									<div class="warehouse-window-content-dropdown-main-block-right">
										<input type="text"  class="warehouse-window-content-dropdown-main-block-input"><br>
									   	<input type="text"  class="warehouse-window-content-dropdown-main-block-input"><br>	
									   	<div class="warehouse-window-content-dropdown-main-block-input warehouse-window-content-dropdown-main-block-input-law">
									   		<div style="float: left; width: 70%; margin-left:10%">
												<p>администратор</p>
												<p>заказы</p>
												<p>сообщения</p>
												<p>уведомления</p>
											</div>
											<div style="float: left; width: 10%;  margin-left: 10px;">
												<label>
													<input class="checkbox-one" type="checkbox" style="margin-top:15px;" name="check1" >
													<span class="checkbox-custom1" style="margin-top:15px;"></span>
												</label>
												<label>
													<input class="checkbox-one" type="checkbox" style="margin-top:10px;" name="check1" >
													<span class="checkbox-custom1" style="margin-top:10px;"></span>
												</label>
												<label>
													<input class="checkbox-one" type="checkbox" style="margin-top:10px;" name="check1" >
													<span class="checkbox-custom1" style="margin-top:10px;"></span>
												</label>
												<label>
													<input class="checkbox-one" type="checkbox" style="margin-top:10px;" name="check1" >
													<span class="checkbox-custom1" style="margin-top:10px;"></span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<input type="button" value="СОХРАНИТЬ"  class="warehouse-window-content-dropdown-main-input" onclick="createrow()">
						</form>
					</div>
					<div class="">
						<table id="table-user" class="table-manufacture table-manufacture-user" >
							<tr class="table-manufacture-th-tr">
								<th class="table-manufacture-th table-manufacture-th-ee">Ф.И.О</th>
								<th class="table-manufacture-th table-manufacture-th-ee">E-mail</th>
								<th class="table-manufacture-th table-manufacture-th-ee">Право</th>
								<th class="table-manufacture-th table-manufacture-th-ee">Выслать пароль</th>
								<th class="table-manufacture-th table-manufacture-th-ee"></th>
							</tr>
							<tr class="table-manufacture-tr">
								<td class="table-manufacture-td">Конвеер</td>
								<td class="table-manufacture-td">Алматы</td>
								<td class="table-manufacture-td">Сэндвич панели</td>
								<td class="table-manufacture-td">Алматы</td>
								<td class="table-manufacture-td"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div id="tab4" class="horizontal-tabs__content settings-opportunities-grad settings-opportunities-style settings-opportunities-style-height">
				<p class="settings-opportunities-heading">ПОДПИСКИ</p>
				<p class="settings-opportunities-pheading">Категории товара</p>
				<div class="settings-opportunities-follow-conteiner">
					<form>
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="text" class="settings-opportunities-input settings-opportunities-input-follow" name="text">
						<input type="button" class="settings-opportunities-follow-conteiner-input" name="save" value="Сохранить">
					</form>
				</div>
			</div>
			<div id="tab5" class="horizontal-tabs__content settings-opportunities-grad settings-opportunities-style settings-opportunities-style-height">
				<p class="settings-opportunities-heading">Уведомления</p>
				<form>
					<div class="settings-opportunities-containerlabel">
						<p class="settings-opportunities-label">Фамилия</p>
						<p class="settings-opportunities-label">Имя</p>
						<p class="settings-opportunities-label">Телефон мобильный</p>
						<p class="settings-opportunities-label">Домашний телефон</p>
						<p class="settings-opportunities-label">E-mail</p>
						<p class="settings-opportunities-label">Пароль</p>
						<p class="settings-opportunities-label">Еще раз</p>
					</div>
					<div class="settings-opportunities-containerinput">
						<input type="text" class="settings-opportunities-input" name="surname" id="surname" ><br>
						<input type="text" class="settings-opportunities-input" name="name" id="name" ><br>
						<input type="number" class="settings-opportunities-input" name="telnumber" id="telnumber" maxlength="11"><br>
						<input type="number" class="settings-opportunities-input" name="domnumber" id="domnumber" maxlength="11"><br>						
						<input type="email" class="settings-opportunities-input" name="email" id="email" ><br>
						<input type="password" class="settings-opportunities-input" name="password" id="password" ><br>
						<input type="password" class="settings-opportunities-input" name="password" id="password" ><br>
					</div>
				</form>
			</div>
		</div>

	<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/main.js"></script>
	</body>
</html>
