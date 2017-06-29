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
				<div class="left-side">
					<?php require_once('includes/sidebar-main.php'); ?>
				</div>
				<div class="right-side">
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
					
					<?php require_once('includes/slider-main.php'); ?>
					<div class="clearfix"></div>
					
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

						<a href="#" class="product__catalog">Бренды</a>
						<div class="clearfix"></div>
						<div class="brand">
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend1.png" alt="">
								</div>
								<a href="#">Ariston</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend2.png" alt="">
								</div>
								<a href="#">Baxi</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend3.png" alt="">
								</div>
								<a href="#">Bosch-Junkers</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend4.png" alt="">
								</div>
								<a href="#">Buderus</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend5.png" alt="">
								</div>
								<a href="#">Attack</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend6.png" alt="">
								</div>
								<a href="#">Electrolux</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend7.png" alt="">
								</div>
								<a href="#">Elsotherm</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend8.png" alt="">
								</div>
								<a href="#">Ferroli</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend9.png" alt="">
								</div>
								<a href="#">Fondital</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend10.png" alt="">
								</div>
								<a href="#">Gazlux</a>
							</div>
							<div class="brand__box">
								<div class="brand__img">
									<img src="img/brend11.png" alt="">
								</div>
								<a href="#">Immergas</a>
							</div>
							<div class="brand__allbrends">			
								<a href="#">Все бренды</a>
							</div>
							<div class="brand__hiddenbox">
								<div class="brand__box">
									<div class="brand__img">
										<img src="img/brend9.png" alt="">
									</div>
									<a href="#">Fondital</a>
								</div>
								<div class="brand__box">
									<div class="brand__img">
										<img src="img/brend10.png" alt="">
									</div>
									<a href="#">Gazlux</a>
								</div>
								<div class="brand__box">
									<div class="brand__img">
										<img src="img/brend11.png" alt="">
									</div>
									<a href="#">Immergas</a>
								</div>
							</div>
						</div>
					</div>

					<!--end mobile catalog  -->


					<div class='catalog catalog__ondesktop'>
						<div class="cat-col">

							<div class="cat-item">
								<div class="cat-item_one catid">
									<p class='catalog_title catalog_title_cooker'>Запчасти <br> к плитам</p>

									<ul class="catalog-list">
										<li><a href="#">Программаторы</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Программаторы</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Программаторы</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Программаторы</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
									</ul> 
									<a href='#' class='watch-more watch-more_small'>Смотреть ещё</a>
								</div>
								<div class="cat-item-inner">
									<p class='catalog_title catalog_title_cooker'>Запчасти <br> к плитам</p>
									<ul class="catalog-list"></ul> 
								</div>
							</div>
						</div>
						<div class="cat-col">
							<div class="cat-item">
								<div class="cat-item_one catid">
									<p class='catalog_title catalog_title_htautomation'>Запчасти <br> к котлам</p>
									<ul class="catalog-list">
										<li><a href="#">Программаторы</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
									</ul> 
									<a href='#' class='watch-more watch-more_small'>Смотреть ещё</a>
								</div>
								<div class="cat-item-inner">
									<p class='catalog_title catalog_title_htautomation'>Запчасти <br> к котлам</p>
									<ul class="catalog-list"></ul> 
								</div>
							</div>
						</div>
						<div class="cat-col">
							<div class="cat-item">
								<div class="cat-item_two catid">
									<p class='catalog_title catalog_title_pulse'>Запчасти к <br>электрооборудованию</p>
									<ul class="catalog-list">
										<li><a href="#">Программаторы</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
									</ul> 
								</div>
								<div class="cat-item-inner">
									<p class='catalog_title catalog_title_pulse'>Запчасти к <br>электрооборудованию</p>
									<ul class="catalog-list"></ul> 
								</div>
							</div>
							<div class="cat-item">
								<div class="cat-item_three catid">
									<p class='catalog_title catalog_title_gas-blue'>Запчасти к <br> водонагревателям</p>
									<ul class="catalog-list">
										<li><a href="#">Программаторы</a></li>
										<li><a href="#">Расширительные баки</a></li>
										<li><a href="#">Реле протока, группы ГВС</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
										<li><a href="#">Теплообменники</a></li>
										<li><a href="#">Термостаты безопасности</a></li>
									</ul> 
									<a href='#' class='watch-more watch-more_small'>Смотреть ещё</a>
								</div>
								<div class="cat-item-inner">
									<p class='catalog_title catalog_title_pulse'>Запчасти к <br>электрооборудованию</p>
									<ul class="catalog-list"></ul> 
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>


					<!-- Акция. Начало -->

					<div class="item-row">
						<div class="burg-title">Акция</div>
						<a href="#" class="watch-more">Смотреть ещё</a>
					</div>
					<div class="tovar-row">
						<div class="col">
							<div class="tovar-item">
								<a href='#'>
									<div>
										<img src='img/engine.png'/>
									</div>
								</a>
								<a href='#' class="item-title">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр</a>
								<p class='old-price'><span>8 600</span></p>
								<p class='price orange'><span>5 200</span></p>
							</div>
						</div>
						<div class="col">
							<div class='tovar-item'>
								<a href='#'>
									<div>
										<img src='img/cooler.png'/>
									</div>
								</a>
								<a href='#' class="item-title">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр </a>
								<p class='old-price'><span>8 600</span></p>
								<p class='price orange'><span>5 200</span></p>
							</div>
						</div>
						<div class="col">
							<div class='tovar-item'>
								<a href='#'>
									<div>
										<img src='img/12345.png'/>
									</div>
								</a>
								<a href='#' class="item-title">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр</a>
								<p class='old-price'><span>8 600</span></p>
								<p class='price orange'><span>5 200</span></p>
							</div>
						</div>
						<div class="col">
							<div class='tovar-item'>
								<a href='#'>
									<div>
										<img src='img/5665220.png'/>
									</div>
								</a>
								<a href='#' class="item-title">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр</a>
								<p class='old-price'><span>8 600</span></p>
								<p class='price orange'><span>5 200</span></p>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<!-- Акция. Конец -->

					<!-- Хиты продаж. Начало -->


					<div class="item-row">
						<div class="burg-title">Хит продаж</div>
						<a href="#" class="watch-more">Смотреть ещё</a>
					</div>
					<div class="tovar-row">
						<div class="col">
							<div class="tovar-item">
								<a href='#'>
									<div>
										<img src='img/engine.png'/>
									</div>
								</a>
								<a href='#' class="item-title">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр</a>
								<p class='old-price'><span>8 600</span></p>
								<p class='price orange'><span>5 200</span></p>
							</div>
						</div>
						<div class="col">
							<div class='tovar-item'>
								<a href='#'>
									<div>
										<img src='img/cooler.png'/>
									</div>
								</a>
								<a href='#' class="item-title">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр </a>
								<p class='old-price'><span>8 600</span></p>
								<p class='price orange'><span>5 200</span></p>
							</div>
						</div>
						<div class="col">
							<div class='tovar-item'>
								<a href='#'>
									<div>
										<img src='img/12345.png'/>
									</div>
								</a>
								<a href='#' class="item-title">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр</a>
								<p class='old-price'><span>8 600</span></p>
								<p class='price orange'><span>5 200</span></p>
							</div>
						</div>
						<div class="col">
							<div class='tovar-item'>
								<a href='#'>
									<div>
										<img src='img/5665220.png'/>
									</div>
								</a>
								<a href='#' class="item-title">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр</a>
								<p class='old-price'><span>8 600</span></p>
								<p class='price orange'><span>5 200</span></p>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<!-- Хиты продаж. Конец -->
					
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
						<h3>Добро пожаловать на сайт компании CityGaz Service </h3>
						<p>CityGaz Service – организация созданная в 2004 году при участии зарубежных производителей газового оборудования и их генеральных дистрибьюторов в России. Компании-производители обеспокоены невысоким ростом темпа продаж своего оборудования на нашем рынке.</p>

						<p>В результате специального изучения ситуации было выяснено, что российский покупатель, не смотря на высокое качество импортной техники, не торопиться отдавать ей предпочтение, беспокоясь о правильной ее установке и грамотном сервисном обслуживании. Люди попросту бояться остаться с техникой один на один, не надеясь на специалистов городских газовых служб и фирменные сервисы, которые грамотно работают только в столице.</p>

						<p>В результате было принято решение на базе одной из крупнейших негосударственных компаний, работающих с газовой техникой создать сервисный центр нового уровня.</p>

						<p>CityGaz Service не является структурным подразделением ни одного из производителей, но имеет всю необходимую техническую базу и мастеров, пошедших обучение за границей. Все ведущие производители выдали новой службе авторизацию на работу с их оборудованием. Свое доверие компании выказали магазины и торговые сети, специализирующиеся на газовом оборудовании. Одним из наших партнеров является компания «ИЗОТ».</p>

						<p>Создание CityGaz Service в Нижнем Новгороде – это первый шаг. Выбор города был осуществлен по двум причинам: во-первых Нижегородский регион один из самых крупных потребителей газа в России; во-вторых, здесь имеется команда специалистов, на базе которой было возможно реализовать проект CGS.</p>

						<p>За длительный период нашей деятельности с 2004 по 2012 год количество сотрудников компании выросло примерно в 2 раза. Специалисты CityGaz Service проходят индивидуальное обучение и ежегодную аттестацию, а руководители ежегодно аттестуются по промышленной безопасности.</p>

						<p>Сегодня компания имеет прямой контакт со всеми ведущими производителями газового оборудования. Практически все известные на рынке марки техники прошли через руки наших специалистов, накопивших уникальный опыт.</p>

						<p>Однако, не менее важным для нас является доверие клиентов. Люди и компании, обратившиеся к нам за услугой проведения пусконаладочных работ либо абонентского обслуживания, вправе рассчитывать на нашу поддержку в приоритетном порядке. Многие наши клиенты возвращаются к нам неоднократно, высоко оценивая надежность компании и квалификацию персонала. Для повышение качества обслуживания на нашем сайте действует сервис обратной связи с руководством компании, где каждый может оставить свой отзыв.</p>
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

