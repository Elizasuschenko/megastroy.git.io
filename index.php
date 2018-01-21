<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Мегастрой строительно отделочная бригада</title>
	<link rel="stylesheet" href="slick/slick-theme.css">
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<nav>
			<div class="menu container">
				<ul class="menu-adaptiv menu" >
					<li><a href="#big">О нас </a></li>
					<li><a href="#big-block">Наши услуги</a></li>
					<li><a href="#proects">Выполненные обьекты</a></li>
					<li><a href="#otzivi">Отзывы клиентов</a></li>
					<li><a href="#plus">Наши преимущества</a></li>
					<li><a href="#team">Наша команда</a></li>
					<li><a href="#price-list">Прайс лист</a></li>
				</ul>
			</div>
		</nav>
		<div class="header">
			<div class="container-fluide">
				<div class="logo">
					<a href="#main"><img src="img/header/logo.png" alt="">
						<div class="logo-text">
							<span>Мегастрой</span> <br>
							<span>строительно отделочная бригада</span>
						</div></a>
				</div>
				<div class="number">
					<img src="img/header/phone.png" alt="">
					<div class="number-text">
					<span>Есть вопросы? Звоните прямо сейчас!</span>
					<span><a href="tel:+380964657859">+38 (096) 465-78-59 </a></span><span class="header-name">(Сергей)</span>
					</div>
					<div class="phone">
					</div>
					<div class="price-list">
						<img src="img/header/price=list.png" alt=""><span class="price-header">Прайст лист</span>
					</div>
				</div>
		<div class="humburger">
			<a id="touch-menu" class="mobile-menu" href="#"><span></span></a>
		</div>
			</div>
		</div>
	</header>
	<section id="main" class="main">
		<a href="#big"><img src="img/main/mouse.png" alt=""></a>		
		<div class="container-fluide">
			<img src="img/main/bg-text.png" alt="">
			<div class="container">
				<div class="main-text">
					<h1>Ремонт вашей квартиры «под ключ» в Днепре!</h1>
					
					<span class="flat">За 2016 год отремонторовано более 300 квартир</span>
					<div class="number">
					<span><a href="tel:+380964657859">+38 (096) 465-78-59 </a></span>
					</div>
					<div class="phone">
					<a href="tel:+380964657859"></a>
					</div>
					<ul>
						<li>Гарантия 12 месяцев</li>
						<li>Лучшие мастера</li>
						<li>Европейские материалы</li>
					</ul>
				</div>
				<form action="main.php" method="POST">
					<span>Заполните заявку сейчас и получите бесплатную консультацию специалистов</span>
					<input type="text" name="name" placeholder="Введите имя">
					<input type="text" name="tel"placeholder="Введите номер телефона" >
					<input type="submit" value="Отправиnь заявку">
				</form>
			</div>
		</div>
	</section>
	<section id="big" class="big">
		<div class="container-fluide">
			<h2>Познакомтесь с нашей бригадой:</h2>
			<hr>
			<h3>Посмотрите ознакомительное видео</h3>
			 <div id="sales1">
			 	<div class="main-video" onclick="buy2()">
			 		<img src="img/big/button.png" alt="">
			 		<span>смотреть видео</span>
			 	</div>
			 </div>
			  		<h2 id="big-block">Здесь все самое важное, <br>что вы хотите узнать о нашей бригаде:</h2>
			  		<hr>
			  		<h3>На нашем сайте Вы найдете фото и <br>видео материалы более чем с 40 выполненных объектов!</h3>
			<div class="container">
				<div class="big-block">
					<h4>ЗАМЕР + СМЕТА <br><span></span></h4>
					<ul>
						<li>Замер бесплатно</li>
						<li>Смета при заказе бесплатно</li>
						<li>Неизменность стоимости <br> во время ремонта</li>
					</ul>
				</div>
				<div class="big-block">
					<h4>РЕМОНТ<span></span></h4>
					<ul>
						<li>Ремонт без отселения</li>
						<li>Вывозим мусор</li>
						<li>Используем качественные материалы и профессиональные инструменты</li>
					</ul>
				</div>
				<div class="big-block">
					<h4>ОПЛАТА<span></span></h4>
					<ul>
						<li>Оплата по факту и поэтапно</li>
						<li>Наличная и безналичная оплата</li>
					</ul>
				</div>
				<div class="big-block">
					<h4>СЕРВИС И ГАРАНТИИ<span></span></h4>
					<ul>
						<li>Гарантия до 12 месяцев</li>
						<li>Опыт рабочих от 5 лет</li>
						<li>Контроль качества: прораб, начальник участка, внутренняя служба контроля и независимая экспертиза</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="repairs-type" class="repairs-type">
		<div class="container">
			<div class="text-border">
				<span>Мы предлагаем <br>несколько типов ремонта:</span>
			</div>
			<div class="tabs">
				<ul>
					<li class=" cosmetic"><span>Косметический</span> <span>от 1200грн/м2</span></li>
					<li class="overhaul"><span>Капитальный </span><span>от 2000грн/м2</span></li>
					<li class="euro"><span>Евро-ремонт </span><span>от 2500грн/м2</span></li>
					<li class="kitchen"><span>Ремонт кухни </span><span>от 15 000грн</span></li>
					<li class="bathroom"><span>Ремонт ванной </span><span>от 20 000грн</span></li>
				</ul>
			    <div class="tabs__content active" id="cosmetic">
					<div class=" block-slaider">
					<h2>Фото наших работ</h2>
			    		<div class="slaider">
			    			<div class="slaid"><img src="img/akkordion/проект5.jpg" alt=""><span>1 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4.jpg" alt=""><span>2 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(9).jpg" alt=""><span>3 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(8).JPG" alt=""><span>4 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(6).JPG" alt=""><span>5 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(5).JPG" alt=""><span>6 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(4).JPG" alt=""><span>7 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(3).jpg" alt=""><span>8 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(2).jpg" alt=""><span>9 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(17).JPG" alt=""><span>10 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(16).JPG" alt=""><span>11 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(15).jpg" alt=""><span>12 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(14).JPG" alt=""><span>13 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(13).JPG" alt=""><span>14 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(12).JPG" alt=""><span>15 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(11).JPG" alt=""><span>16 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(10).JPG" alt=""><span>17 из 18</span></div>
			    			<div class="slaid"><img src="img/akkordion/проект4(1).JPG" alt=""><span>18 из 18</span></div>
			    		</div>
			    	</div>
			    	<div class="akkordion-text">
			    		<ul>
			    			<li>Демонтажные работы</li>
			    			<li>Электромонтажные работы</li>
			    			<li>Покраска стен и пола</li>
			    			<li>Выравнивание стен</li>
			    			<li>Плиточные работы</li>
			    			<li>Натяжные потолки</li>
			    			<li>Настил полов</li>
			    			<li>Поклейка обоев</li>
							<li>Укладка кафеля</li>
							<li>Сантехнические работы</li> 

			    		</ul>
			    	</div>
			    </div>
			</div>

		</div>
	</section>
	<section id="company">
		<h2>Не доверяете онлайн калькуляторам? <br>Получите полное представление о ремонте в день обращения в нашу бригаду!</h2>
		<hr>
		<h3>Мы вышлем специалиста замерщика в удобное для вас время <br>Замеры займут всего 1 час, но вы в этот же день получите</h3>
		<div class="container">
			<div class="items">
				<div class="item">
					<div class="number">1</div>
					<div class="item-text">Несколько вариантов выполнения ремонтных работ различными материалами</div>
					<div class="item-block"><img src="img/company/1.png" alt=""></div>
				</div>
				<div class="item">
					<div class="number">2</div>
					<div class="item-text">Предварительный вариант сметы и консультацию по снижению стоимости ремонта за счет применения альтернативных материалов</div>
					<div class="item-block"><img src="img/company/2.jpg" alt=""></div>
				</div>
				<div class="item">
					<div class="number">3</div>
					<div class="item-text">Анализ проблемных зон и возможных решений по каждой из них</div>
					<div class="item-block"><img src="img/company/3.jpg" alt=""></div>
				</div>
				<div class="item">
					<div class="number">4</div>
					<div class="item-text">Рекомендации по зонированию пространства и подходящим для этого материалам</div>
					<div class="item-block"><img src="img/company/4.jpg" alt=""></div>
				</div>
				<div class="item">
					<div class="number">5</div>
					<div class="item-text">Заключение по техническим возможностям и мощностям инженерных систем</div>
					<div class="item-block"><img src="img/company/5.jpg" alt=""></div>
				</div>
				<div class="item">
					<div class="number">6</div>
					<div class="item-text">Расчетное время выполнения ремонтных работ на каждый из 3х вариантов проекта</div>
					<div class="item-block"><img src="img/company/6.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</section>
	<section id="otzivi">
		<h2>Посмотрите видео отзывы</h2>
		<hr>
		<div class="container-fluide">
			<div class="commit">
				<div class="slaider-commit">
					<div id="otziv1" class="slaid" onclick="buy3()">
						<div class="video-block">
							<img class="" src="img/otzivi/1.png" alt="">
						</div>
					<div class="commit-text"><h4>РЕМОНТ КВАРТИРЫ</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Вложились в бюджет</li><li>Вложились в сроки</li><li>Закупка материалов</li><li>Поклейка обоев, выравнивание и покраска потолка.</li></ul></div>
					</div>
					<div id="otziv2" class="slaid" onclick="buy4()">
						<div class="video-block">
							<img class="" src="img/otzivi/2.png" alt="">
						</div>
						<div class="commit-text"><h4>РЕМОНТ КУХНИ</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Вложились в бюджет</li><li>Сделаны откосы</li><li>Поклейка обоев</li><li>Шпаклевка и покраска потолка.</li></ul></div>
					</div>
					<div id="otziv3" class="slaid" onclick="buy5()">
						<div class="video-block">
							<img class="" src="img/otzivi/3.png" alt="">
						</div>
						<div class="commit-text"><h4>РЕМОНТ КОРИДОРА</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Аккуратно сделано</li><li>Сделано быстро и в срок</li><li>Выравнивание стен гипсокартоном</li><li>Поклейка обоев</li><li>Шпаклевка и покраска потолка.</li></ul></div>
					</div>
					<div id="otziv4" class="slaid" onclick="buy6()">
						<div class="video-block">
							<img class="" src="img/otzivi/4.png" alt="">
						</div>
						<div class="commit-text"><h4>РЕМОНТ ДОМА</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Закупка материалов</li><li>Установлена смета</li><li>Недорого и качественно</li></ul></div>
					</div>
					<div id="otziv5" class="slaid" onclick="buy7()">
						<div class="video-block">
							<img class="" src="img/otzivi/5.png" alt="">
						</div>
						<div class="commit-text"><h4>РЕМОНТ КОМНАТЫ</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Откосы</li><li>Доставка материалов</li><li>Стяжка полов</li><li>Поклейка обоев</li><li>Натяжной потолок</li></ul></div>
					</div>
													<div id="otziv6" class="slaid" onclick="buy8()">
														<div class="video-block">
															<img class="" src="img/otzivi/6.png" alt="">
														</div>
														<div class="commit-text"><h4>РЕМОНТ КОМНАТЫ</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>В срок</li><li>Доставка материалов</li><li>Стяжка полов</li><li>Поклейка обоев</li><li>Натяжной потолок</li></ul></div>
													</div>
				</div>
			</div>
		</div>
	</section>
	<section id="proects">
		<h2>Больше проектов бригады "МЕгастрой"</h2>
		<hr>
		<div class="container">
			<div class="video-proects">
				<div class="proect proect1"><img class="fon" src="img/proects/player.png" alt=""><img src="img/proects/1.png" alt=""><span>Смотреть  проект</span></div>
				<div class="proect proect2"><img class="fon" src="img/proects/player.png" alt=""><img src="img/proects/2.png" alt=""><span>Смотреть  проект</span></div>
				<div class="proect proect3"><img class="fon" src="img/proects/player.png" alt=""><img src="img/proects/3.png" alt=""><span>Смотреть  проект</span></div>
				
			</div>
		</div>
		<div class="container-fluide">
			<div class="triangle-bottomleft"></div>
			<div class="triangle-bottomright"></div>
			<form action="main.php" method="POST">
				<span>Получить больше проеков и <br>бесплтаную консультацию просто:</span>
				<input type="text" name="tel" placeholder="Введите номер телефона">
				<input type="submit" value="Получить консультацию">
			</form>
		</div>
	</section>
	<section id="present">
		<div class="container-fluide">
			<div class="present-text">
				<h4>МЫ ПОДГОТОВИЛИ ПОДАРОК ДЛЯ ВАС!</h4>
				<span>Привоз материалов бесплатно <br>от суммы заказа в 50,000грн</span>
			</div>
			<img src="img/present/bg.png" alt="">
		</div>
	</section>
	<section id="plus">
		<h2>6 причин делать ремонт  с мастерами из "Мегастрой"</h2>
		<hr>
		<div class="container">
			<div class="plus">
				<div class="plus-item">
					<h4>Цена с учетом рисков  </h4>
					<hr>
					<span>Предлагаем цену от самой низкой до высокой, всегда учитывая качество, скорость и гарантии. Мы не демпингуем, а минимизируем затраты.</span>
				</div>
				<div class="plus-item">
					<h4>Сроки и договор</h4>
					<hr>
					<span>Сроки гарантируем</span>
				</div>
				<div class="plus-item">
					<h4>Мастера и контроль качества</h4>
					<hr>
					<span>Только мастера проверены годами. Узкопрофильные  специалисты со стажем более 15 лет работы в нашем коллективе. Мастера не пьют</span>
				</div>
				<div class="plus-item">
					<h4>Материалы и инструменты</h4>
					<hr>
					<span>Мы знаем весь ассортимент строительных материалов и пользуемся только качествен- ной и проверенной техникой лучших.</span>
				</div>
				<div class="plus-item">
					<h4>Гарантия до 10 лет</h4>
					<hr>
					<span>Мы профессионально подходим к делу и готовы давать гарантию на некоторые виды ремонта сроком до 10 лет</span>
				</div>
				<div class="plus-item">
					<h4>Спокойствие во время ремонта</h4>
					<hr>
					<span>Мы присылаем фотоотчет каждые два дня, чтобы Вы не беспокоились о сроках сдачи проекта и состоянии квартиры</span>
				</div>
				<img src="img/plus/men.png" alt="">
			</div>
		</div>
			<img src="img/plus/1_1.png" alt="">
	</section>
	<section id="team" class="team">
		<h2>Наши мастера с опытом в ремонте и <br>
			строительстве от 10 лет!</h2>
			<hr>
		<div class="container">
			<div class="tabs">
				<ul class="tabs__caption">
					<li role="presentation" class=" one active"><img src="img/team/1.png" alt=""></li>
					<li class="two"><img src="img/team/2.png" alt=""></li>
					<li class="three"><img src="img/team/3.png" alt=""></li>
					<li class="four"><img src="img/team/4.png" alt=""></li>
					<li class="five"><img src="img/team/5.png" alt=""></li>
				</ul>
			    <div class="tabs__content active" id="one">
					<div class="team-block">
						<img src="img/team/sergey.png" alt="">
						<h4>Сергей александрович</h4>
						<span>Прораб</span>
						<p>Меня зовут Сергей, у меня 12 лет опыта в ремонте, я прораб</p>
					</div>
			    </div>
			    <div id="two" class="tabs__content">
			    	<div class="team-block">
						<img src="img/team/sergey.png" alt="">
						<h4>Сергей александрович</h4>
						<span>Прораб</span>
						<p>Меня зовут Сергей, у меня 12 лет опыта в ремонте, я прораб</p>
					</div>
			    </div>
			    <div id="three" class="tabs__content">
					<div class="team-block">
						<img src="img/team/sergey.png" alt="">
						<h4>Сергей александрович</h4>
						<span>Прораб</span>
						<p>Меня зовут Сергей, у меня 12 лет опыта в ремонте, я прораб</p>
					</div>
			    </div>
			    <div id="four" class="tabs__content">
			    	<div class="team-block">
						<img src="img/team/sergey.png" alt="">
						<h4>Сергей александрович</h4>
						<span>Прораб</span>
						<p>Меня зовут Сергей, у меня 12 лет опыта в ремонте, я прораб</p>
					</div>
			    </div>
			    <div id="five" class="tabs__content">
			    	<div class="team-block">
						<img src="img/team/sergey.png" alt="">
						<h4>Сергей александрович</h4>
						<span>Прораб</span>
						<p>Меня зовут Сергей, у меня 12 лет опыта в ремонте, я прораб</p>
					</div>
			    </div>
			</div>

		</div>
	</section>
	<section id="price-list">
		<h2>Посмотрите наш прайс лист</h2>
		<hr>
		<div class="container-fluide">
			<div class="prise">
				<div class="price-block demontag-work" style="background-image: url(img/price/1.jpg)">
					<a><h4>Демонтажные работы</h4>
						<hr></a>
				</div>
				<div class="price-block proem-work" style="background-image: url(img/price/2.jpg)">
					<a><h4>Электрика</h4>
						<hr></a>
				</div>
				<div class="price-block pol-work" style="background-image: url(img/price/3.jpg)">
					<a><h4>Полы</h4>
						<hr></a>
				</div>
				<div class="price-block sten-work" style="background-image: url(img/price/4.jpg)">
					<a><h4>Стены</h4>
						<hr></a>
				</div>
				<div class="price-block potolok-work" style="background-image: url(img/price/5.jpg)">
					<a><h4>Потолки</h4>
						<hr></a>
				</div>
				<div class="price-block santechnika-work" style="background-image: url(img/price/6.jpg)">
					<a><h4>Сантехника</h4>
						<hr></a>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container-fluide">
			<img src="img/footer/devushka.png" alt="">
			<div class="footer-text">
				<h3>Остались вопросы?</h3>
				<p>Получите бесплатную консультацию прораба Сергея! <br> Для этого просто позвоните по номеру: </p>
				<span><a href="tel:+380964657859">+38 (096) 465-78-59 </a></span>
			</div>
		</div>
	</footer>
	<div class="video-proect1 video-proect">
	<div class="video-slid">
		<div class="video">
		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/6YvX_D_8lVU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
		</div>
		<div class="video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/Mcm9HbRhT5A" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/jrzjsv3UZdQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
	</div>
	</div>
	<div class="video-proect2 video-proect">
		<div class="video-slid">
			<div class="video">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/eGCH0tLtA4I" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/c438F5reFRQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
			<div class="video"><img src="img/проект2_3.jpeg" alt=""></div>
		</div>
	</div>
	<div class="video-proect3 video-proect">
		<div class="video-slid">
			<div class="video">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/o9aweVJIWY8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="video">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HQO0FDthOrA" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="video">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/sRNhUwBU-_0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="price proem">
		<div class="table">
			<table>
				<tr>
					<td>Демонтаж эл. точки (розетка, выключатель, эл.звонок …)</td>
					<td>шт</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Демонтаж светильников</td>
					<td>шт</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Демонтаж скрытой проводки</td>
					<td>м.п</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Демонтаж эл. щитка</td>
					<td>шт</td>
					<td>25</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="price demontag">
		<div class="table">
			<table>
				<tr>
					<td>Демонтаж плинтуса</td>
					<td>м.п.</td>
					<td>4</td>
				</tr>
				<tr>
					<td>Демонтаж линолеума, ковролина</td>
					<td>м<sup>2</sup></td>
					<td>15</td>
				</tr>
				<tr>
					<td>Демонтаж паркета</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Демонтаж подложки (оргалит, фанера)</td>
					<td>м<sup>2</sup></td>
					<td>15</td>
				</tr>
				<tr>
					<td>Демонтаж плитки ПВХ</td>
					<td>м<sup>2</sup></td>
					<td>18</td>
				</tr>
				<tr>
					<td>Демонтаж керамической плитки</td>
					<td>м<sup>2</sup></td>
					<td>65</td>
				</tr>
				<tr>
					<td>Демонтаж цементно-песчаной стяжки</td>
					<td>м<sup>2</sup></td>
					<td>50</td>
				</tr>
				<tr>
					<td>Демонтаж деревянного пола на лагах</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Демонтаж бетонного порога (балкон)</td>
					<td>шт</td>
					<td>60</td>
				</tr>
				<tr>
					<td>Демонтаж ж/б пола под сантех. кабиной</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Демонтаж оконных конструкций</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Снятие штукатурки с откосов</td>
					<td>м.п</td>
					<td>18</td>
				</tr>
				<tr>
					<td>Демонтаж подоконников</td>
					<td>шт</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Демонтаж дверей межкомнатных</td>
					<td>шт</td>
					<td>30</td>
				</tr>
				<tr>
					<td>Расширение проёмов (бетон)</td>
					<td>м.п</td>
					<td>70</td>
				</tr>
				<tr>
					<th>Потолки</th>
				</tr>
				<tr>
					<td>Демонтаж карнизов для штор</td>
					<td>шт.</td>
					<td>15</td>
				</tr>
				<tr>
					<td>Снятие обоев</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Размывка извести, мела</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Демонтаж цементно-песчаных галтелей</td>
					<td>м.п</td>
					<td>15</td>
				</tr>
				<tr>
					<td>Демонтаж ГК потолка</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Демонтаж потолков типа «Armstrong»</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Зачистка старой краски</td>
					<td>м<sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Разбивка штукатурки</td>
					<td>м<sup>2</sup></td>
					<td>20</td>
				</tr>
				<tr>
					<td>Демонтаж потолков гипсолитовых армированных</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<th>Стены</th>
				</tr>
				<tr>
					<td>Разборка стенок, шкафов из ДСП/фанеры</td>
					<td>м<sup>2</sup></td>
					<td>14</td>
				</tr>
				<tr>
					<td>Демонтаж обоев</td>
					<td>м<sup>2</sup></td>
					<td>8</td>
				</tr>
				<tr>
					<td>Снятие керамической плитки</td>
					<td>м<sup>2</sup></td>
					<td>18</td>
				</tr>
				<tr>
					<td>Зачистка старой краски стен</td>
					<td>м<sup>2</sup></td>
					<td>20</td>
				</tr>
				<tr>
					<td>Демонтаж штукатурки</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Разборка обшивки из гипсокартона</td>
					<td>м<sup>2</sup></td>
					<td>12</td>
				</tr>
				<tr>
					<td>Вырубание ниш в кирпичных стенах</td>
					<td>м<sup>2</sup></td>
					<td>250</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок каркасно-обшивных</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок кирпичных – полкирпича</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок кирпичных – кирпич</td>
					<td>м<sup>2</sup></td>
					<td>45</td>
				</tr>
				<tr>
					<td>Разборка кирпичных стен и конструкций</td>
					<td>м<sup>2</sup></td>
					<td>250</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок гипсолитовых армированных</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок бетонных (до 8см)</td>
					<td>м<sup>2</sup></td>
					<td>110</td>
				</tr>
				<tr>
					<td>Демонтаж ж/б стен (до 14см)</td>
					<td>м<sup>2</sup></td>
					<td>250</td>
				</tr>
				<tr>
					<td>Демонтаж ж/б стен (до 19см)</td>
					<td>м<sup>2</sup></td>
					<td>280</td>
				</tr>
				<tr>
					<td>Вырубка ж/б стен (до 30см)</td>
					<td>м<sup>2</sup></td>
					<td>600</td>
				</tr>
				<tr>
					<th>Проёмы</th>
				</tr>
				<tr>
					<td>Установка оконных блоков</td>
					<td>м <sup>2</sup></td>
					<td>80</td>
				</tr>
				<tr>
					<td>Установка подоконников</td>
					<td>м.п</td>
					<td>45</td>
				</tr>
				<tr>
					<td>Установка отливов</td>
					<td>м.п</td>
					<td>45</td>
				</tr>
				<tr>
					<td>Штукатурка откосов</td>
					<td>м.п</td>
					<td>90</td>
				</tr>
				<tr>
					<td>Шпаклёвка наружных откосов окон</td>
					<td>м.п</td>
					<td>110</td>
				</tr>
				<tr>
					<td>Устройство оконных откосов из гипсокартона</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Устройство откосов окон из пластиковых панелей</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Шпаклёвка откосов</td>
					<td>м.п</td>
					<td>65</td>
				</tr>
				<tr>
					<td>Покраска откосов</td>
					<td>м.п</td>
					<td>35</td>
				</tr>
				<tr>
					<td>Покраска дверных блоков</td>
					<td>шт</td>
					<td>260</td>
				</tr>
				<tr>
					<td>Врезка замков, ручек, петель</td>
					<td>компл.</td>
					<td>180</td>
				</tr>
				<tr>
					<td>Установка межкомнатных дверей</td>
					<td>шт.</td>
					<td>450</td>
				</tr>
				<tr>
					<td>Установка входных металлических дверей</td>
					<td>шт.</td>
					<td>1300</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="price pol">
		<div class="table">
			<table>
				<tr>
					<td>Подсыпка под стяжку</td>
					<td>м <sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Укладка плит тепло-/шумо- изоляции</td>
					<td>м<sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Устройство цементно-песчаной стяжки (до 50мм)</td>
					<td>м<sup>2</sup></td>
					<td>100</td>
				</tr>
				<tr>
					<td>Грунтовка пола (1 слой)</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Устройство деревянного пола на лагах</td>
					<td>м<sup>2</sup></td>
					<td>110</td>
				</tr>
				<tr>
					<td>Устройство обмазочной гидроизоляции (2 слоя)</td>
					<td>м<sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Выравнивание пола нивелир-массой</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Облицовка пола плиткой (с подрезкой и затиркой)</td>
					<td>м<sup>2</sup></td>
					<td>165</td>
				</tr>
				<tr>
					<td>Облицовка пола плиткой усложнённой формы, от</td>
					<td>м<sup>2</sup></td>
					<td>от 180</td>
				</tr>
				<tr>
					<td>Настилка линолеума, ковролина</td>
					<td>м<sup>2</sup></td>
					<td>45</td>
				</tr>
				<tr>
					<td>Настилка линолеума на клею</td>
					<td>м<sub>2</sub></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Укладка ламината</td>
					<td>м<sup>2</sup></td>
					<td>65</td>
				</tr>
				<tr>
					<td>Облицовка пола кварц-виниловыми плитками на клей</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Установка плинтусов пластиковых (с фурнитурой)</td>
					<td>м.п</td>
					<td>30</td>
				</tr>
				<tr>
					<td>Установка плинтусов с подрезкой углов (дерево, МДФ и т.д.)</td>
					<td>м.п</td>
					<td>35</td>
				</tr>
				<tr>
					<td>Установка порожков декоративных</td>
					<td>м.п</td>
					<td>55</td>
				</tr>
				<tr>
					<td>Установка упоров дверных</td>
					<td>шт</td>
					<td>35</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="price sten">
		<div class="table">
			<table>
				
				<tr>
					<td>Кладка кирпичная рядовая</td>
					<td>шт</td>
					<td>2,5</td>
				</tr>
				<tr>
					<td>– кладка в 1/2 кирпича</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>– кладка в 1 кирпич</td>
					<td>м<sup>2</sup></td>
					<td>150</td>
				</tr>
				<tr>
					<td>– кладка облицовочная в 1/2 кирпича</td>
					<td>м<sup>2</sup></td>
					<td>180</td>
				</tr>
				<tr>
					<td>Кладка шлакоблока (поштучно)</td>
					<td>шт</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Кладка шлакоблока</td>
					<td>м<sup>3</sup></td>
					<td>370</td>
				</tr>
				<tr>
					<td>Кладка газобетонных блоков</td>
					<td>м<sup>3</sup></td>
					<td>420</td>
				</tr>
				<tr>
					<td>Монтаж перегородок из гипсоблоков</td>
					<td>м<sup>2</sup></td>
					<td>110</td>
				</tr>
				<tr>
					<td>Грунтовка стен Бетоконтактом</td>
					<td>м<sup>2</sup></td>
					<td>20</td>
				</tr>
				<tr>
					<td>Грунтовка поверхностей стен (1 слой)</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Набивка штукатурной сетки</td>
					<td>м<sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Штукатурка стен по маякам (до 25мм, с установкой маяков)</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Утепление стен плитами ППС на клей (с армировкой)</td>
					<td>м<sup>2</sup></td>
					<td>85</td>
				</tr>
				<tr>
					<td>Утепление стен плитами ППС на клей (без армировки)</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Шумоизоляция стен — монтаж панельной системы ЗИПС</td>
					<td>м<sup>2</sup></td>
					<td>85</td>
				</tr>
				<tr>
					<td>Выравнивание стен ГКЛ на клей</td>
					<td>м<sup>2</sup></td>
					<td>60</td>
				</tr>
				<tr>
					<td>Выравнивание стен ГКЛ с установкой металлокаркаса</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Обшивка радиусных стен ГКЛ с установкой металлокаркаса</td>
					<td>м<sup>2</sup></td>
					<td>150</td>
				</tr>
				<tr>
					<td>Перегородки из ГКЛ на металлическом каркасе</td>
					<td>м<sup>2</sup></td>
					<td>120</td>
				</tr>
				<tr>
					<td>– каждый последующий слой обшивки ГКЛ</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Перегородки из ГКЛ радиусные на металлическом каркасе</td>
					<td>м<sup>2</sup></td>
					<td>150</td>
				</tr>
				<tr>
					<td>Тепло-/шумо- изоляция простенков (мин. вата)</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Устройство коробов из ГКЛ одноугловых (две грани)</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Устройство коробов из ГКЛ двухугловых (три грани)</td>
					<td>м.п</td>
					<td>120</td>
				</tr>
				<tr>
					<td>Устройство ниш, выступов из гипсокартона</td>
					<td>м<sup>2</sup></td>
					<td>220</td>
				</tr>
				<tr>
					<td>Армирование поверхности стен стекловолокном</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Шпаклёвка стен под поклейку обоев</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Шпаклёвка стен под покраску</td>
					<td>м<sup>2</sup></td>
					<td>65</td>
				</tr>
				<tr>
					<td>Шлифовка стен</td>
					<td>м<sup>2</sup></td>
					<td>15</td>
				</tr>
				<tr>
					<td>Облицовка стен керамической плиткой (с подрезкой и затиркой)</td>
					<td>м<sup>2</sup></td>
					<td>165</td>
				</tr>
				<tr>
					<td>Облицовка откосов керамической плиткой</td>
					<td>м.п</td>
					<td>165</td>
				</tr>
				<tr>
					<td>Обтачивание торцов плитки при наружном соединении 90º</td>
					<td>м.п</td>
					<td>130</td>
				</tr>
				<tr>
					<td>Вырезание технологических отверстий в плитке</td>
					<td>шт</td>
					<td>50</td>
				</tr>
				<tr>
					<td>Поклейка керамического фриза рельефного</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Облицовка стен керамической плиткой 10х10см</td>
					<td>м<sup>2</sup></td>
					<td>280</td>
				</tr>
				<tr>
					<td>Облицовка стен мозаикой</td>
					<td>м<sup>2</sup></td>
					<td>420</td>
				</tr>
				<tr>
					<td>Затирка швов плитки эпоксидной затиркой (опционально)</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Внутренняя обшивка стен вагонкой, пластиковыми панелями</td>
					<td>м<sup>2</sup></td>
					<td>85</td>
				</tr>
				<tr>
					<td>Облицовка стен 3D-панелями</td>
					<td>м<sup>2</sup></td>
					<td>160</td>
				</tr>
				<tr>
					<td>Оклейка стен обоями, от</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Покраска стен вододисперсионной краской</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Нанесение жидких обоев</td>
					<td>м<sup>2</sup></td>
					<td>65</td>
				</tr>
				<tr>
					<td>Облицовка пробковым/бамбуковым покрытием</td>
					<td>м<sup>2</sup></td>
					<td>75</td>
				</tr>
				<tr>
					<td>Нанесение декоративной минеральной штукатурки, от</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Наклейка декоративно-защитных уголков</td>
					<td>м.п</td>
					<td>25</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="price santechnika">
		<div class="table">
			<table>
				<tr>
					<td>Снятие смесителей</td>
					<td>шт</td>
					<td>15</td>
				</tr>
				<tr>
					<td>Демонтаж полотенцесушителя</td>
					<td>шт</td>
					<td>25</td>
				</tr>
				<tr>
					<td>Демонтаж сантехоборудования (раковины, унитазы)</td>
					<td>шт</td>
					<td>60</td>
				</tr>
				<tr>
					<td>Замена ванны</td>
					<td>шт</td>
					<td>80</td>
				</tr>
				<tr>
					<td>Демонтаж радиаторов</td>
					<td>шт</td>
					<td>50</td>
				</tr>
				<tr>
					<td>Замена труб отопления, водоснабжения, пласт. канализации</td>
					<td>м.п</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Демонтаж чугунных труб канализации</td>
					<td>м.п</td>
					<td>20</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="price potolok">
		<div class="table">
			<table>
				<tr>
					<td>Штукатурка потолков высококачественная</td>
					<td>м<sup>2</sup></td>
					<td>140</td>
				</tr>
				<tr>
					<td>Теплоизоляция потолков плитами ЭППС на клей</td>
					<td>м<sup>2</sup></td>
					<td>75</td>
				</tr>
				<tr>
					<td>Тепло-/шумо- изоляция потолков (мин. вата)</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Шумоизоляция потолков — монтаж панельной системы ЗИПС</td>
					<td>м<sup>2</sup></td>
					<td>95</td>
				</tr>
				<tr>
					<td>Устройство подвесных потолков из пластиковых панелей</td>
					<td>м<sup>2</sup></td>
					<td>85</td>
				</tr>
				<tr>
					<td>Устройство подвесных потолков типа «Armstrong»</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Устройство подвесных потолков из ГКЛ (с заделкой швов)</td>
					<td>м<sup>2</sup></td>
					<td>95</td>
				</tr>
				<tr>
					<td>Устройство ступеней потолков из ГКЛ прямых</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Устройство ступеней потолков из ГКЛ криволинейных</td>
					<td>м.п</td>
					<td>130</td>
				</tr>
				<tr>
					<td>Устройство световых коробов из ГКЛ прямолинейных</td>
					<td>м.п</td>
					<td>120</td>
				</tr>
				<tr>
					<td>Устройство световых коробов из ГКЛ криволинейных</td>
					<td>м.п</td>
					<td>200</td>
				</tr>
				<tr>
					<td>Армирование потолка стеклохолстом</td>
					<td>м<sup>2</sup></td>
					<td>30</td>
				</tr>
				<tr>
					<td>Армирование стеклохолстом потолочных конструкций</td>
					<td>м.п</td>
					<td>30</td>
				</tr>
				<tr>
					<td>Армирование стеклохолстом потолочных конструкций</td>
					<td>м.п</td>
					<td>30</td>
				</tr>
				<tr>
					<td>Шпаклёвка потолков под поклейку обоев</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Шпаклёвка потолков под покраску</td>
					<td>м<sup>2</sup></td>
					<td>75</td>
				</tr>
				<tr>
					<td>Шлифовка потолка</td>
					<td>м<sup>2</sup></td>
					<td>20</td>
				</tr>
				<tr>
					<td>Шпаклёвка потолочной ступени</td>
					<td>м.п</td>
					<td>20</td>
				</tr>
				<tr>
					<td>Шпаклёвка потолочной ступени криволинейной</td>
					<td>м.п</td>
					<td>65</td>
				</tr>
				<tr>
					<td>Шпаклёвка светового короба</td>
					<td>м.п</td>
					<td>65</td>
				</tr>
				<tr>
					<td>Грунтовка поверхности потолка (1 слой)</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Наклейка + шпаклёвка + покраска галтелей (до 100мм)</td>
					<td>м.п</td>
					<td>45</td>
				</tr>
				<tr>
					<td>Оклейка потолков обоями, от</td>
					<td>м<sup>2</sup></td>
					<td>50</td>
				</tr>
				<tr>
					<td>Покраска потолков вододисперсионной краской</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Покраска потолочных ступеней вододисперсионной краской</td>
					<td>м.п</td>
					<td>35</td>
				</tr>
				<tr>
					<td>Покраска потолочных ступеней вододисперсионной краской</td>
					<td>м.п</td>
					<td>35</td>
				</tr>
				<tr>
					<td>Наклейка декоративной обойной ленты</td>
					<td>м.п</td>
					<td>20</td>
				</tr>
				<tr>
					<td>Крепление карнизов для штор</td>
					<td>м.п</td>
					<td>30</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="price all-price">
		<div class="table">
			<table>
				<tr>
					<th>Демонтажные работы</th>
				</tr>
				<tr>
					<td>Демонтаж плинтуса</td>
					<td>м.п.</td>
					<td>4</td>
				</tr>
				<tr>
					<td>Демонтаж линолеума, ковролина</td>
					<td>м<sup>2</sup></td>
					<td>15</td>
				</tr>
				<tr>
					<td>Демонтаж паркета</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Демонтаж подложки (оргалит, фанера)</td>
					<td>м<sup>2</sup></td>
					<td>15</td>
				</tr>
				<tr>
					<td>Демонтаж плитки ПВХ</td>
					<td>м<sup>2</sup></td>
					<td>18</td>
				</tr>
				<tr>
					<td>Демонтаж керамической плитки</td>
					<td>м<sup>2</sup></td>
					<td>65</td>
				</tr>
				<tr>
					<td>Демонтаж цементно-песчаной стяжки</td>
					<td>м<sup>2</sup></td>
					<td>50</td>
				</tr>
				<tr>
					<td>Демонтаж деревянного пола на лагах</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Демонтаж бетонного порога (балкон)</td>
					<td>шт</td>
					<td>60</td>
				</tr>
				<tr>
					<td>Демонтаж ж/б пола под сантех. кабиной</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Демонтаж оконных конструкций</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Снятие штукатурки с откосов</td>
					<td>м.п</td>
					<td>18</td>
				</tr>
				<tr>
					<td>Демонтаж подоконников</td>
					<td>шт</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Демонтаж дверей межкомнатных</td>
					<td>шт</td>
					<td>30</td>
				</tr>
				<tr>
					<td>Расширение проёмов (бетон)</td>
					<td>м.п</td>
					<td>70</td>
				</tr>
				<tr>
					<th>Пол</th>
				</tr>
				<tr>
					<td>Подсыпка под стяжку</td>
					<td>м <sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Укладка плит тепло-/шумо- изоляции</td>
					<td>м<sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Устройство цементно-песчаной стяжки (до 50мм)</td>
					<td>м<sup>2</sup></td>
					<td>100</td>
				</tr>
				<tr>
					<td>Грунтовка пола (1 слой)</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Устройство деревянного пола на лагах</td>
					<td>м<sup>2</sup></td>
					<td>110</td>
				</tr>
				<tr>
					<td>Устройство обмазочной гидроизоляции (2 слоя)</td>
					<td>м<sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Выравнивание пола нивелир-массой</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Облицовка пола плиткой (с подрезкой и затиркой)</td>
					<td>м<sup>2</sup></td>
					<td>165</td>
				</tr>
				<tr>
					<td>Облицовка пола плиткой усложнённой формы, от</td>
					<td>м<sup>2</sup></td>
					<td>от 180</td>
				</tr>
				<tr>
					<td>Настилка линолеума, ковролина</td>
					<td>м<sup>2</sup></td>
					<td>45</td>
				</tr>
				<tr>
					<td>Настилка линолеума на клею</td>
					<td>м<sub>2</sub></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Укладка ламината</td>
					<td>м<sup>2</sup></td>
					<td>65</td>
				</tr>
				<tr>
					<td>Облицовка пола кварц-виниловыми плитками на клей</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Установка плинтусов пластиковых (с фурнитурой)</td>
					<td>м.п</td>
					<td>30</td>
				</tr>
				<tr>
					<td>Установка плинтусов с подрезкой углов (дерево, МДФ и т.д.)</td>
					<td>м.п</td>
					<td>35</td>
				</tr>
				<tr>
					<td>УУстановка порожков декоративных)</td>
					<td>м.п</td>
					<td>55</td>
				</tr>
				<tr>
					<td>Установка упоров дверных</td>
					<td>шт</td>
					<td>35</td>
				</tr>
				<tr>
					<th>Проём</th>
				</tr>
				<tr>
					<td>Установка оконных блоков</td>
					<td>м <sup>2</sup></td>
					<td>80</td>
				</tr>
				<tr>
					<td>Установка подоконников</td>
					<td>м.п</td>
					<td>45</td>
				</tr>
				<tr>
					<td>Установка отливов</td>
					<td>м.п</td>
					<td>45</td>
				</tr>
				<tr>
					<td>Штукатурка откосов</td>
					<td>м.п</td>
					<td>90</td>
				</tr>
				<tr>
					<td>Шпаклёвка наружных откосов окон</td>
					<td>м.п</td>
					<td>110</td>
				</tr>
				<tr>
					<td>Устройство оконных откосов из гипсокартона</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Устройство откосов окон из пластиковых панелей</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Шпаклёвка откосов</td>
					<td>м.п</td>
					<td>65</td>
				</tr>
				<tr>
					<td>Покраска откосов</td>
					<td>м.п</td>
					<td>35</td>
				</tr>
				<tr>
					<td>Покраска дверных блоков</td>
					<td>шт</td>
					<td>260</td>
				</tr>
				<tr>
					<td>Врезка замков, ручек, петель</td>
					<td>компл.</td>
					<td>180</td>
				</tr>
				<tr>
					<td>Установка межкомнатных дверей</td>
					<td>шт.</td>
					<td>450</td>
				</tr>
				<tr>
					<td>Установка входных металлических дверей</td>
					<td>шт.</td>
					<td>1300</td>
				</tr>
				<tr>
					<th>Потолок</th>
				</tr>
				<tr>
					<td>Демонтаж карнизов для штор</td>
					<td>шт.</td>
					<td>15</td>
				</tr>
				<tr>
					<td>Снятие обоев</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Размывка извести, мела</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Демонтаж цементно-песчаных галтелей</td>
					<td>м.п</td>
					<td>15</td>
				</tr>
				<tr>
					<td>Демонтаж ГК потолка</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Демонтаж потолков типа «Armstrong»</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Зачистка старой краски</td>
					<td>м<sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Разбивка штукатурки</td>
					<td>м<sup>2</sup></td>
					<td>20</td>
				</tr>
				<tr>
					<td>Демонтаж потолков гипсолитовых армированных</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Штукатурка потолков высококачественная</td>
					<td>м<sup>2</sup></td>
					<td>140</td>
				</tr>
				<tr>
					<td>Теплоизоляция потолков плитами ЭППС на клей</td>
					<td>м<sup>2</sup></td>
					<td>75</td>
				</tr>
				<tr>
					<td>Тепло-/шумо- изоляция потолков (мин. вата)</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Шумоизоляция потолков — монтаж панельной системы ЗИПС</td>
					<td>м<sup>2</sup></td>
					<td>95</td>
				</tr>
				<tr>
					<td>Устройство подвесных потолков из пластиковых панелей</td>
					<td>м<sup>2</sup></td>
					<td>85</td>
				</tr>
				<tr>
					<td>Устройство подвесных потолков типа «Armstrong»</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Устройство подвесных потолков из ГКЛ (с заделкой швов)</td>
					<td>м<sup>2</sup></td>
					<td>95</td>
				</tr>
				<tr>
					<td>Устройство ступеней потолков из ГКЛ прямых</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Устройство ступеней потолков из ГКЛ криволинейных</td>
					<td>м.п</td>
					<td>130</td>
				</tr>
				<tr>
					<td>Устройство световых коробов из ГКЛ прямолинейных</td>
					<td>м.п</td>
					<td>120</td>
				</tr>
				<tr>
					<td>Устройство световых коробов из ГКЛ криволинейных</td>
					<td>м.п</td>
					<td>200</td>
				</tr>
				<tr>
					<td>Армирование потолка стеклохолстом</td>
					<td>м<sub>2</sub></td>
					<td>30</td>
				</tr>
				<tr>
					<td>Армирование стеклохолстом потолочных конструкций</td>
					<td>м.п</td>
					<td>30</td>
				</tr>
				<tr>
					<td>Шпаклёвка потолков под поклейку обоев</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Шпаклёвка потолков под покраску</td>
					<td>м<sup>2</sup></td>
					<td>75</td>
				</tr>
				<tr>
					<td>Шлифовка потолка</td>
					<td>м<sup>2</sup></td>
					<td>20</td>
				</tr>
				<tr>
					<td>Шпаклёвка потолочной ступени</td>
					<td>м.п</td>
					<td>55</td>
				</tr>
				<tr>
					<td>Шпаклёвка потолочной ступени криволинейной</td>
					<td>м.п</td>
					<td>65</td>
				</tr>
				<tr>
					<td>Шпаклёвка светового короба</td>
					<td>м.п</td>
					<td>65</td>
				</tr>
				<tr>
					<td>Грунтовка поверхности потолка (1 слой)</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Наклейка + шпаклёвка + покраска галтелей (до 100мм)</td>
					<td>м.п</td>
					<td>45</td>
				</tr>
				<tr>
					<td>Оклейка потолков обоями, от</td>
					<td>м<sup>2</sup></td>
					<td>50</td>
				</tr>
				<tr>
					<td>Покраска потолков вододисперсионной краской</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Покраска потолочных ступеней вододисперсионной краской</td>
					<td>м.п</td>
					<td>35</td>
				</tr>
				<tr>
					<td>Наклейка декоративной обойной ленты</td>
					<td>м.п</td>
					<td>20</td>
				</tr>
				<tr>
					<td>Крепление карнизов для штор</td>
					<td>м.п</td>
					<td>30</td>
				</tr>
				<tr>
					<th>Стены</th>
				</tr>
				<tr>
					<td>Разборка стенок, шкафов из ДСП/фанеры</td>
					<td>м<sup>2</sup></td>
					<td>14</td>
				</tr>
				<tr>
					<td>Демонтаж обоев</td>
					<td>м<sup>2</sup></td>
					<td>8</td>
				</tr>
				<tr>
					<td>Снятие керамической плитки</td>
					<td>м<sup>2</sup></td>
					<td>18</td>
				</tr>
				<tr>
					<td>Зачистка старой краски стен</td>
					<td>м<sup>2</sup></td>
					<td>20</td>
				</tr>
				<tr>
					<td>Демонтаж штукатурки</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Разборка обшивки из гипсокартона</td>
					<td>м<sup>2</sup></td>
					<td>12</td>
				</tr>
				<tr>
					<td>Вырубание ниш в кирпичных стенах</td>
					<td>м<sup>2</sup></td>
					<td>250</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок каркасно-обшивных</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок кирпичных – полкирпича</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок кирпичных – кирпич</td>
					<td>м<sup>2</sup></td>
					<td>45</td>
				</tr>
				<tr>
					<td>Разборка кирпичных стен и конструкций</td>
					<td>м<sup>2</sup></td>
					<td>250</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок гипсолитовых армированных</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Демонтаж перегородок бетонных (до 8см)</td>
					<td>м<sup>2</sup></td>
					<td>110</td>
				</tr>
				<tr>
					<td>Демонтаж ж/б стен (до 14см)</td>
					<td>м<sup>2</sup></td>
					<td>250</td>
				</tr>
				<tr>
					<td>Демонтаж ж/б стен (до 19см)</td>
					<td>м<sup>2</sup></td>
					<td>280</td>
				</tr>
				<tr>
					<td>Вырубка ж/б стен (до 30см)</td>
					<td>м<sup>2</sup></td>
					<td>600</td>
				</tr>
				<tr>
					<td>Кладка кирпичная рядовая</td>
					<td>шт</td>
					<td>2,5</td>
				</tr>
				<tr>
					<td>– кладка в 1/2 кирпича</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>– кладка в 1 кирпич</td>
					<td>м<sup>2</sup></td>
					<td>150</td>
				</tr>
				<tr>
					<td>– кладка облицовочная в 1/2 кирпича</td>
					<td>м<sup>2</sup></td>
					<td>180</td>
				</tr>
				<tr>
					<td>Кладка шлакоблока (поштучно)</td>
					<td>шт</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Кладка шлакоблока</td>
					<td>м<sup>3</sup></td>
					<td>370</td>
				</tr>
				<tr>
					<td>Кладка газобетонных блоков</td>
					<td>м<sup>3</sup></td>
					<td>420</td>
				</tr>
				<tr>
					<td>Монтаж перегородок из гипсоблоков</td>
					<td>м<sup>2</sup></td>
					<td>110</td>
				</tr>
				<tr>
					<td>Грунтовка стен Бетоконтактом</td>
					<td>м<sup>2</sup></td>
					<td>20</td>
				</tr>
				<tr>
					<td>Грунтовка поверхностей стен (1 слой)</td>
					<td>м<sup>2</sup></td>
					<td>10</td>
				</tr>
				<tr>
					<td>Набивка штукатурной сетки</td>
					<td>м<sup>2</sup></td>
					<td>25</td>
				</tr>
				<tr>
					<td>Штукатурка стен по маякам (до 25мм, с установкой маяков)</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Утепление стен плитами ППС на клей (с армировкой)</td>
					<td>м<sup>2</sup></td>
					<td>85</td>
				</tr>
				<tr>
					<td>Утепление стен плитами ППС на клей (без армировки)</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Шумоизоляция стен — монтаж панельной системы ЗИПС</td>
					<td>м<sup>2</sup></td>
					<td>85</td>
				</tr>
				<tr>
					<td>Выравнивание стен ГКЛ на клей</td>
					<td>м<sup>2</sup></td>
					<td>60</td>
				</tr>
				<tr>
					<td>Выравнивание стен ГКЛ с установкой металлокаркаса</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Обшивка радиусных стен ГКЛ с установкой металлокаркаса</td>
					<td>м<sup>2</sup></td>
					<td>150</td>
				</tr>
				<tr>
					<td>Перегородки из ГКЛ на металлическом каркасе</td>
					<td>м<sup>2</sup></td>
					<td>120</td>
				</tr>
				<tr>
					<td>– каждый последующий слой обшивки ГКЛ</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Перегородки из ГКЛ радиусные на металлическом каркасе</td>
					<td>м<sup>2</sup></td>
					<td>150</td>
				</tr>
				<tr>
					<td>Тепло-/шумо- изоляция простенков (мин. вата)</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Устройство коробов из ГКЛ одноугловых (две грани)</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Устройство коробов из ГКЛ двухугловых (три грани)</td>
					<td>м.п</td>
					<td>120</td>
				</tr>
				<tr>
					<td>Устройство ниш, выступов из гипсокартона</td>
					<td>м<sup>2</sup></td>
					<td>220</td>
				</tr>
				<tr>
					<td>Армирование поверхности стен стекловолокном</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Шпаклёвка стен под поклейку обоев</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Шпаклёвка стен под покраску</td>
					<td>м<sup>2</sup></td>
					<td>65</td>
				</tr>
				<tr>
					<td>Шлифовка стен</td>
					<td>м<sup>2</sup></td>
					<td>15</td>
				</tr>
				<tr>
					<td>Облицовка стен керамической плиткой (с подрезкой и затиркой)</td>
					<td>м<sup>2</sup></td>
					<td>165</td>
				</tr>
				<tr>
					<td>Облицовка откосов керамической плиткой</td>
					<td>м.п</td>
					<td>165</td>
				</tr>
				<tr>
					<td>Обтачивание торцов плитки при наружном соединении 90º</td>
					<td>м.п</td>
					<td>130</td>
				</tr>
				<tr>
					<td>Вырезание технологических отверстий в плитке</td>
					<td>шт</td>
					<td>50</td>
				</tr>
				<tr>
					<td>Поклейка керамического фриза рельефного</td>
					<td>м.п</td>
					<td>85</td>
				</tr>
				<tr>
					<td>Облицовка стен керамической плиткой 10х10см</td>
					<td>м<sup>2</sup></td>
					<td>280</td>
				</tr>
				<tr>
					<td>Облицовка стен мозаикой</td>
					<td>м<sup>2</sup></td>
					<td>420</td>
				</tr>
				<tr>
					<td>Затирка швов плитки эпоксидной затиркой (опционально)</td>
					<td>м<sup>2</sup></td>
					<td>55</td>
				</tr>
				<tr>
					<td>Внутренняя обшивка стен вагонкой, пластиковыми панелями</td>
					<td>м<sup>2</sup></td>
					<td>85</td>
				</tr>
				<tr>
					<td>Облицовка стен 3D-панелями</td>
					<td>м<sup>2</sup></td>
					<td>160</td>
				</tr>
				<tr>
					<td>Оклейка стен обоями, от</td>
					<td>м<sup>2</sup></td>
					<td>40</td>
				</tr>
				<tr>
					<td>Покраска стен вододисперсионной краской</td>
					<td>м<sup>2</sup></td>
					<td>35</td>
				</tr>
				<tr>
					<td>Нанесение жидких обоев</td>
					<td>м<sup>2</sup></td>
					<td>65</td>
				</tr>
				<tr>
					<td>Облицовка пробковым/бамбуковым покрытием</td>
					<td>м<sup>2</sup></td>
					<td>75</td>
				</tr>
				<tr>
					<td>Нанесение декоративной минеральной штукатурки, от</td>
					<td>м<sup>2</sup></td>
					<td>90</td>
				</tr>
				<tr>
					<td>Наклейка декоративно-защитных уголков</td>
					<td>м.п</td>
					<td>25</td>
				</tr>
				<tr>
					<th>Сантехника и электрика</th>
				</tr>
				<tr>
					<td>Снятие смесителей</td>
					<td>шт</td>
					<td>15</td>
				</tr>
				<tr>
					<td>Демонтаж полотенцесушителя</td>
					<td>шт</td>
					<td>25</td>
				</tr>
				<tr>
					<td>Демонтаж сантехоборудования (раковины, унитазы)</td>
					<td>шт</td>
					<td>60</td>
				</tr>
				<tr>
					<td>Замена ванны</td>
					<td>шт</td>
					<td>80</td>
				</tr>
				<tr>
					<td>Демонтаж радиаторов</td>
					<td>шт</td>
					<td>50</td>
				</tr>
				<tr>
					<td>Замена труб отопления, водоснабжения, пласт. канализации</td>
					<td>м.п</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Демонтаж чугунных труб канализации</td>
					<td>м.п</td>
					<td>20</td>
				</tr>
				<tr>
					<td>Демонтаж эл. точки (розетка, выключатель, эл.звонок …)</td>
					<td>шт</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Демонтаж светильников</td>
					<td>шт</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Демонтаж скрытой проводки</td>
					<td>м.п</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Демонтаж эл. щитка</td>
					<td>шт</td>
					<td>25</td>
				</tr>
			</table>
		</div>
	</div>




	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="slick/slick.min.js"></script>
	 <script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=39768b575fe2ec740103902128674ac3" charset="UTF-8"></script>
	 <script>
$(document).ready(function(){
   $(".proect1").click(function(){
     $(".video-proect1").css('display','flex');
     $(".video-slid").css('display','block');
     $(".video-slid").slick('setPosition');
});
});
</script>
	 <script>
$(document).ready(function(){
   $(".proect2").click(function(){
     $(".video-proect2").css('display','flex');
     $(".video-slid").css('display','block');
     $(".video-slid").slick('setPosition');
});
});
</script>
<script>
$(document).ready(function(){
   $(".proect3").click(function(){
     $(".video-proect3").css('display','flex');
     $(".video-slid").css('display','block');
     $(".video-slid").slick('setPosition');
});
});
</script>

<script>
	$(document).mouseup(function (e) {
    var container = $(".video-slid");
    if (container.has(e.target).length === 0){
        container.hide();
        $(".video-proect").css('display','none');
    }
});
</script>
	 <script>
		var sales_div = document.getElementById("sales1");
		function buy2(){
		sales1.innerHTML = '<div class="main-video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/73k4mZpDlhg" frameborder="0" allowfullscreen></iframe></div>';
		}
		</script>
		<script>
		var sales_div = document.getElementById("otziv1");
		function buy3(){
		otziv1.innerHTML = '<div class="video-block"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/FZAqn-aqSOM" frameborder="0" allowfullscreen></iframe></div><div class="commit-text"><h4>РЕМОНТ КВАРТИРЫ</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Вложились в бюджет</li><li>Вложились в сроки</li><li>Закупка материалов</li><li>Поклейка обоев, выравнивание и покраска потолка.</li></ul></div>';
		}
		</script>
		<script>
		var sales_div = document.getElementById("otziv2");
		function buy4(){
		otziv2.innerHTML = '<div class="video-block"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/mEswIapBQKA" frameborder="0" allowfullscreen></iframe></div><div class="commit-text"><h4>РЕМОНТ КУХНИ</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Вложились в бюджет</li><li>Сделаны откосы</li><li>Поклейка обоев</li><li>Шпаклевка и покраска потолка.</li></ul></div>';
		}
		</script>
		<script>
		var sales_div = document.getElementById("otziv3");
		function buy5(){
		otziv3.innerHTML = '<div class="video-block"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/oMHR9dopATo" frameborder="0" allowfullscreen></iframe></div><div class="commit-text"><h4>РЕМОНТ КОРИДОРА</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Аккуратно сделано</li><li>Сделано быстро и в срок</li><li>Выравнивание стен гипсокартоном</li><li>Поклейка обоев</li><li>Шпаклевка и покраска потолка.</li></ul></div>';
		}
		</script>
		<script>
		var sales_div = document.getElementById("otziv4");
		function buy6(){
		otziv4.innerHTML = '<div class="video-block"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/h8rgcb05aGA" frameborder="0" allowfullscreen></iframe></div><div class="commit-text"><h4>РЕМОНТ ДОМА</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Закупка материалов</li><li>Установлена смета</li><li>Недорого и качественно</li></ul></div>';
		}
		</script>
		<script>
		var sales_div = document.getElementById("otziv5");
		function buy7(){
		otziv5.innerHTML = '<div class="video-block"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/lSlvtQQa02A" frameborder="0" allowfullscreen></iframe></div><div class="commit-text"><h4>РЕМОНТ КОМНАТЫ</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>Откосы</li><li>Доставка материалов</li><li>Стяжка полов</li><li>Поклейка обоев</li><li>Натяжной потолок</li></ul></div>';
		}
		</script>
		<script>
		var sales_div = document.getElementById("otziv6");
		function buy8(){
		otziv6.innerHTML = '<div class="video-block"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/8ULeaiwZug0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div><div class="commit-text"><h4>РЕМОНТ КОМНАТЫ</h4><span>КАПИТАЛЬНЫЙ РЕМОНТ</span><ul><li>В срок</li><li>Доставка материалов</li><li>Стяжка полов</li><li>Поклейка обоев</li><li>Натяжной потолок</li></ul></div>';
		}
		</script>

	<script type="text/javascript">
		$(document).ready(function(){ 
			var touch 	= $('#touch-menu');
			var menu 	= $('.menu');
		 
			$(touch).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			
			$(window).resize(function(){
				var w = $(window).width();
				if(w > 767 && menu.is(':hidden')) {
					menu.removeAttr('style');
				}
			});
			
		});
	</script>
	 <script>
	 	(function($) {
$(function() {
 
  $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
      .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');$(".slaider").slick('reinit'); 
  });
 
});
})(jQuery);
	 </script>
	 <script>
	 	$(document).ready(function(){
		  $('.slaider').slick({
		  	infinite: true,
		  	arrows: true,
		  	fade: true,
  			cssEase: 'linear',
		  	prevArrow: '<div class="prev"></div>',
		  	nextArrow: '<div class="next"></div>'
		});
		});
	 </script>
	  <script>
	 	$(document).ready(function(){
		  $('.slaider-commit').slick({
		  	infinite: true,
		  	arrows: true,
		  	dots: true,
		  	prevArrow: '<div class="prev"></div>',
		  	nextArrow: '<div class="next"></div>'
		});
		});
	 </script>
	 <script>
	 	$(document).ready(function(){
		  $('.video-slid').slick({
		  	infinite: true,
		  	arrows: true,
		  	prevArrow: '<div class="prev"></div>',
		  	nextArrow: '<div class="next"></div>'
		});
		});
	 </script>
	 	 <script>
$(document).ready(function(){
   $(".potolok-work").click(function(){
     $(".potolok").css('display','flex');
     $(".table").css('display','block');
});
});
</script>
	 <script>
$(document).ready(function(){
   $(".demontag-work").click(function(){
     $(".demontag").css('display','flex');
     $(".table").css('display','block');
});
});
</script>
	 <script>
$(document).ready(function(){
   $(".pol-work").click(function(){
     $(".pol").css('display','flex');
     $(".table").css('display','block');
});
});
</script>
	 <script>
$(document).ready(function(){
   $(".sten-work").click(function(){
     $(".sten").css('display','flex');
     $(".table").css('display','block');
});
});
</script>
	 <script>
$(document).ready(function(){
   $(".proem-work").click(function(){
     $(".proem").css('display','flex');
     $(".table").css('display','block');
});
});
</script>
	 <script>
$(document).ready(function(){
   $(".santechnika-work").click(function(){
     $(".santechnika").css('display','flex');
     $(".table").css('display','block');
});
});
</script>
	 <script>
$(document).ready(function(){
   $(".price-header").click(function(){
     $(".all-price").css('display','flex');
     $(".table").css('display','block');
});
});
</script>
<script>
	$(document).mouseup(function (e) {
    var container = $(".table");
    if (container.has(e.target).length === 0){
        container.hide();
        $(".price").css('display','none');
    }
});
</script>
</body>
</html>