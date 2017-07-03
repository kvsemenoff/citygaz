<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>
	<?php require_once('includes/header.php'); ?>
	<div class="wrapper">
		<div class="content">
			<?php require_once('includes/header_top.php'); ?>
			<div class="clearfix"></div>
			<div class="container-main">
				<div class="left-side-main">
					<?php require_once('includes/sidebar-main.php'); ?>
				</div>
				<div class="right-side-main">
					<div class="search-box">		
						<select>
							<option value="1">поиск по названию</option>
							<option value="2">поиск по бренду</option>
							<option value="3">поиск по цене</option>
						</select>			
						<input type="text" placeholder="Что будем искать?" name="uname">
						<button>Найти</button>
						<div class="clearfix"></div>
					</div>
					
					<div class="clearfix"></div>

					<ul class="brearcrumbs info_pg">
						<li><a href="#">Главная</a></li>
						<li><span>Запчасти к водонагревателям</span></li>
					</ul>
					
					<!-- catalog for mobile -->

					<div class="catalog__onmobile">
						<div class="burg-title">Каталог товаров</div>	
						<div class="clearfix"></div>
						<ul class="sidebar-catalog">
							<li><span>Запчасти к плитам</span>
								<div class="sidebar-catalog__showmenu">
									<div class="padding">
										<ul class="catalog-list catalog-list__big">
											<li><a href="#">Программаторы</a></li>
											<li><a href="#">Расширительные баки</a></li>
											<li><a href="#">Реле протока, группы ГВС</a></li>
											<li><a href="#">Теплообменники</a></li>
											<li><a href="#">Термостаты безопасности</a></li>
										</ul> 
										<ul class="catalog-list catalog-list__big">
											<li><a href="#">Циркуляционные насосы</a></li>
											<li><a href="#">Электроды розжига </a></li>
											<li><a href="#">3-х ходовые клапана</a></li>
											<li><a href="#">Аксессуары</a></li>				
										</ul>
										<div class="clearfix"></div>
									</div>

								</div> 
							</li>
							<li><span>Запчасти к котлам</span>
								<div class="sidebar-catalog__showmenu">
									<div class="padding">
										<ul class="catalog-list catalog-list__big">
											<li><a href="#">Программаторы2</a></li>
											<li><a href="#">Расширительные баки</a></li>
											<li><a href="#">Реле протока, группы ГВС</a></li>
											<li><a href="#">Теплообменники</a></li>
											<li><a href="#">Термостаты безопасности</a></li>
										</ul> 
										<ul class="catalog-list catalog-list__big">
											<li><a href="#">Циркуляционные насосы</a></li>
											<li><a href="#">Электроды розжига </a></li>
											<li><a href="#">3-х ходовые клапана</a></li>
											<li><a href="#">Аксессуары</a></li>				
										</ul>
										<div class="clearfix"></div>
									</div>

								</div> 
							</li>
							<li><span>Запчасти к водонагревателям</span>
								<div class="sidebar-catalog__showmenu">
									<div class="padding">
										<ul class="catalog-list catalog-list__big">
											<li><a href="#">Программаторы3</a></li>
											<li><a href="#">Расширительные баки</a></li>
											<li><a href="#">Реле протока, группы ГВС</a></li>
											<li><a href="#">Теплообменники</a></li>
											<li><a href="#">Термостаты безопасности</a></li>
										</ul> 
										<ul class="catalog-list catalog-list__big">
											<li><a href="#">Циркуляционные насосы</a></li>
											<li><a href="#">Электроды розжига </a></li>
											<li><a href="#">3-х ходовые клапана</a></li>
											<li><a href="#">Аксессуары</a></li>				
										</ul>
										<div class="clearfix"></div>
									</div>

								</div> 
							</li>
							<li><span>Запчасти к электрооборудованию.</span>
								<div class="sidebar-catalog__showmenu">
									<div class="padding">
										<ul class="catalog-list catalog-list__big">
											<li><a href="#">Программаторы4</a></li>
											<li><a href="#">Расширительные баки</a></li>
											<li><a href="#">Реле протока, группы ГВС</a></li>
											<li><a href="#">Теплообменники</a></li>
											<li><a href="#">Термостаты безопасности</a></li>
										</ul> 
										<ul class="catalog-list catalog-list__big">
											<li><a href="#">Циркуляционные насосы</a></li>
											<li><a href="#">Электроды розжига </a></li>
											<li><a href="#">3-х ходовые клапана</a></li>
											<li><a href="#">Аксессуары</a></li>				
										</ul>
										<div class="clearfix"></div>
									</div>

								</div> 
							</li>
						</ul>

						<a href="#" class="product__catalog brand_button_xs_sm">Бренды</a>
						<div class="clearfix"></div>
						<div class="brand brand_hidden_xs_sm">
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend1.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Ariston</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend2.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Baxi</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend3.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Bosch-Junkers</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend4.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Buderus</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend5.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Attack</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend6.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Electrolux</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend7.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Elsotherm</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend8.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Ferroli</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend9.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Fondital</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend10.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Gazlux</a>
									</div>		
								</div>
							</div>
							<div class="brand__box">
								<div class="brand__row">
									<div class="brand__img">
										<img src="img/brend11.png" alt="">
									</div>	
									<div class="brand__link">
										<a href="#">Immergas</a>
									</div>		
								</div>
							</div>
							<div class="brand__allbrends">			
								<a href="#">Все бренды</a>
							</div>
							<div class="brand__hiddenbox">
								<div class="brand__box">
									<div class="brand__row">
										<div class="brand__img">
											<img src="img/brend9.png" alt="">
										</div>	
										<div class="brand__link">
											<a href="#">Fondital</a>
										</div>		
									</div>
								</div>
								<div class="brand__box">
									<div class="brand__row">
										<div class="brand__img">
											<img src="img/brend10.png" alt="">
										</div>	
										<div class="brand__link">
											<a href="#">Gazlux</a>
										</div>		
									</div>
								</div>
								<div class="brand__box">
									<div class="brand__row">
										<div class="brand__img">
											<img src="img/brend11.png" alt="">
										</div>	
										<div class="brand__link">
											<a href="#">Immergas</a>
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--end mobile catalog  -->
					<div class="clear"></div>
					
					<!-- buttons on mobile -->

					<div class="catalog__buttons_mobilepage">
						<div class="sidebar-buttons">
							<a href="#">Продажа газового оборудования </a>
							<a href="#compl" data-modal="modal" >Жалобы и предложения клиентов</a>
						</div>

						<div class="sidebar-ourjob">
							<div class="sidebar-ourjob__box">
								<span class="sidebar-ourjob__absolute">1</span>
								<h4>Полный комплекс <br> работ</h4>
								<p>Компания CityGaz является членом саморегулируемой организации (СРО), имеет допуск к выполнению полного комплекса работ с газовым оборудованием и газовыми сетями.</p>
							</div>
							<div class="sidebar-ourjob__box">
								<span class="sidebar-ourjob__absolute">2</span>
								<h4>Работа с любой <br> газовой техникой</h4>
								<p>CityGaz авторизован ведущими европейскими производителями оборудования и работает практически с любой газовой техникой иностранного и отечественного производства.</p>
							</div>
							<div class="sidebar-ourjob__box">
								<span class="sidebar-ourjob__absolute">3</span>
								<h4>Наша миссия </h4>
								<p>Миссия CityGaz service – давать людям спокойствие и уверенность в повседневной жизни. Сотрудники компании в любой момент готовы прийти на помощь и наполнить дом теплом и спокойствием.</p>
							</div>
							<div class="sidebar-ourjob__box">
								<span class="sidebar-ourjob__absolute">4</span>
								<h4>Широкий выбор газового <br> оборудования</h4>
								<p>Ресурсы компании не ограничиваются квалифицированным персоналом. CityGaz - это широкий выбор газового оборудования и запчастей, это собственный парк автомобилей, оперативность.</p>
							</div>
						</div>

					</div>		
					
					<!-- end buttons mobile -->

					<div class="content-part">
						<h1>Добро пожаловать на сайт компании CityGaz Service </h1>
						<p>CityGaz Service – организация созданная в 2004 году при участии зарубежных производителей газового оборудования и их генеральных дистрибьюторов в России. Компании-производители обеспокоены невысоким ростом темпа продаж своего оборудования на нашем рынке.</p>

						<h2>В компании поэтапно внедряются ресурсосберегающие и природоохранные технологии.</h2>

						<p>В результате специального изучения ситуации было выяснено, что российский покупатель, не смотря на высокое качество импортной техники, не торопиться отдавать ей предпочтение, беспокоясь о правильной ее установке и грамотном сервисном обслуживании. Люди попросту бояться остаться с техникой один на один, не надеясь на специалистов городских газовых служб и фирменные сервисы, которые грамотно работают только в столице.</p>

						<h3>Усилия «Группы ГАЗ» также направлены на оказание поддерж­ки партнерам</h3>

						<p>В результате было принято решение на базе одной из крупнейших негосударственных компаний, работающих с газовой техникой создать сервисный центр нового уровня.</p>

						<p><a href='#'>Ссылка</a> не является структурным подразделением ни одного из производителей, но имеет всю необходимую техническую базу и мастеров, пошедших обучение за границей. Все ведущие производители выдали новой службе авторизацию на работу с их оборудованием. Свое доверие компании выказали магазины и торговые сети, специализирующиеся на газовом оборудовании. Одним из наших партнеров является компания «ИЗОТ».</p>

						<h4>Требования к поставщикам комплектующих изделий </h4>
						<ul>
							<li>перечень и контакты руководящих лиц фирмы;</li>
							<li>копии лицензий на все объявленные виды деятельности, соответствующие предмету закупки;</li>
							<li>копии документов, подтвердающие качество предлашаемой продукции (сертификаты качества и т.д.)</li>
							<li>документы, подтверждающие полномочия поставщика как дилера (трейдера), либо готовность поставщика к отгрузке указанных в заявке объемов.</li>
						</ul>

						<h5>Теплообменник  биометрический</h5>
						<ul>
							<li>Общая длина - 390мм.</li>
							<li>Длинна рабочей части - 270мм.</li>
							<li>Ширина рабочей части - 180мм.</li>
							<li>Страна производитель: Италия.</li>
						</ul>

						<h2>В компании поэтапно внедряются ресурсосберегающие и природоохранные технологии.</h2>
						<p>
							<img src='img/info-img.jpg' />
								В результате специального изучения ситуации было выяснено, что российский покупатель, не смотря на высокое качество импортной техники, не торопиться отдавать ей предпочтение, беспокоясь о правильной ее установке и грамотном сервисном обслуживании. Люди попросту бояться остаться с техникой один на один, не надеясь на специалистов городских <a href='#'>после нажатия и при наведении</a> и фирменные сервисы, которые грамотно работают только в столице.
								CityGaz Service не является структурным подразделением ни одного из производителей, но имеет всю необходимую техническую базу и мастеров, пошедших обучение за границей. Все ведущие производители выдали новой службе авторизацию на работу с их оборудованием. Свое доверие компании выказали магазины и торговые сети, специализирующиеся на газовом оборудовании. Одним из наших партнеров является компания «ИЗОТ».
						</p>
						<p>Люди попросту бояться остаться с техникой один на один, не надеясь на специалистов городских газовых служб и фирменные сервисы, которые грамотно работают только в столице.<br />
						<a href='#'>CityGaz Service</a> не является структурным подразделением ни одного из производителей, но имеет всю необходимую техническую базу и мастеров, пошедших обучение за границей. Все ведущие производители выдали новой службе авторизацию на работу с их оборудованием. Свое доверие компании выказали магазины и торговые сети, специализирующиеся на газовом оборудовании. Одним из наших партнеров является компания «ИЗОТ».</p>
						<div class="clearfix"></div>

						<h3>Таблица комплектующих изделий  </h3>
						<table>
							<thead>
								<tr>
									<th>Описание</th>
									<th>Цена</th>
									<th>Скидка</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Дизельный двигатель</td>
									<td>15700.-</td>
									<td>30%</td>
								</tr>
								<tr>
									<td>Бензиновый двигатель, непосредственный впрыск</td>
									<td>20800 .-</td>
									<td>45%</td>
								</tr>
								<tr>
									<td>Бензиновые двигатели, прямой впрыск</td>
									<td>15700.-</td>
									<td>15%</td>
								</tr>
							</tbody>
						</table>

						<h2>Технические документы</h2>
						<ul class="tech-doc">
							<li><span>Технические паспорта для чайников</span>
								<ul class="tech-doc__inside">
								<li> <span>Тех. Паспорта для котлов фирмы Liberty</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
									<li> <span>Тех. Паспорта для котлов фирмы Bax</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
								</ul>
							</li>	
							<li><span>Технические паспорта для бойлеров</span>
								<ul class="tech-doc__inside">
								<li> <span>Тех. Паспорта для котлов фирмы Liberty</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
									<li> <span>Тех. Паспорта для котлов фирмы Bax</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
								</ul>
							</li>	
							<li><span>Технические паспорта для котлов</span>
								<ul class="tech-doc__inside">
								<li> <span>Тех. Паспорта для котлов фирмы Liberty</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
									<li> <span>Тех. Паспорта для котлов фирмы Bax</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
								</ul>
							</li>	
							<li> <span>Технические паспорта для бойлеров</span>
								<ul class="tech-doc__inside">
								<li> <span>Тех. Паспорта для котлов фирмы Liberty</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
									<li> <span>Тех. Паспорта для котлов фирмы Bax</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li> <span>Технические паспорта для бойлеров</span>
								<ul class="tech-doc__inside">
								<li> <span>Тех. Паспорта для котлов фирмы Liberty</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
									<li> <span>Тех. Паспорта для котлов фирмы Bax</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
								</ul>
							</li>		
							<li> <span>Технические паспорта для чайников</span>
								<ul class="tech-doc__inside">
								<li> <span>Тех. Паспорта для котлов фирмы Liberty</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
									<li> <span>Тех. Паспорта для котлов фирмы Bax</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li> <span>Технические паспорта для бойлеров</span>
								<ul class="tech-doc__inside">
								<li> <span>Тех. Паспорта для котлов фирмы Liberty</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
									<li> <span>Тех. Паспорта для котлов фирмы Bax</span>
										<ul class="tech-doc__inside-links">
											<li><a href="#">Паспорт для котла Baxi модель 45235345</a></li>
											<li><a href="#">Паспорт для котла Baxi модель 87854658</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div> 
			<div class="clear"></div>
		</div>
		<div class="footer">
			<?php require_once('includes/footer_top.php'); ?>
			<?php require_once('includes/footer.php'); ?> 
		</div>
	</div>
</body>
</html>

