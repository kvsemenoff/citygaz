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
			
			<div class="container">
				<div class="row">
					<div class="left-side">
						<?php require_once('includes/sidebar-catalog.php'); ?>
					</div>
					<div class="right-side">

						<div class="catalogpage">
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
							<ul class="brearcrumbs">
								<li><a href="#">Главная</a></li>
								<li><span>Запчасти к водонагревателям</span></li>
							</ul>

							<div class="catalogpage__parts">
								<h2 class="catalogpage__parts-cap">Запчасти к водонагревателям</h2>
								<ul class="catalog-list">
									<li><a href="#">Программаторы</a></li>
									<li><a href="#">Расширительные баки</a></li>
									<li><a href="#">Реле протока, группы ГВС</a></li>	
								</ul>
								<ul class="catalog-list">
									<li><a href="#">Циркуляционные насосы</a></li>
									<li><a href="#">Электроды розжига </a></li>
									<li><a href="#">3-х ходовые клапана, Аксессуары</a></li>	
								</ul>
								<ul class="catalog-list">
									<li><a href="#">Реле протока, группы ГВС</a></li>
									<li><a href="#">Теплообменники</a></li>
									<li><a href="#">Термостаты безопасности</a></li>	
								</ul>
								<ul class="catalog-list">
									<li><a href="#">Расширительные баки</a></li>
									<li><a href="#">Реле протока, группы ГВС</a></li>
									<li><a href="#">Термостаты безопасности</a></li>	
								</ul>
							</div>

							
							<div class="catalogpage__filter">
								<div class="catalogpage__filter-box catalogpage__filtersort">
									<span>Сортировать по:</span>
									<select>
										<option value="1">артикулу</option>
										<option value="2">бренду</option>
										<option value="3">цене</option>
									</select>
								</div>
								<div class="catalogpage__filter-box catalogpage__filtervivod">
									<span>Выводить по:</span>
									<select>
										<option value="1">20</option>
										<option value="2">40</option>
										<option value="3">50</option>
									</select>
								</div>
								<div class="catalogpage__filter-links">
									<a href="#">Список</a>
									<a href="#" class="catalogpage__filter-linkactive">Плитка</a>
								</div>
								<div class="clear"></div>
							</div>



							<div class="catalogpage__tovarlist">
								<div class="catalogpage__tovarlistbox">
									<div class="catalogpage__tovarlistimg">
										<a href="img/tovaritem3.jpg" data-fancybox-group="group">
											<img src="img/tovaritem3.jpg" alt="">
										</a>
									</div>
									<div class="catalogpage__tovarlisttxtbox">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__art">Производитель:  Ariston</span>
										<span class="tovaritem__gotcha">В наличии</span>
										<div class="clear"></div>
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
										</a>
									</div>									
									<div class="catalogpage__tovarlistpricebox catalogpage__new">
										<div class="clear"></div>
										<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
										<a href="#" class="tovaritem__more">Подробнее</a>
									</div>
									<div class="clear"></div>
								</div>
								<div class="catalogpage__tovarlistbox">
									<div class="catalogpage__tovarlistimg">
										<span class="tovaritem__reklama1">Акция</span>
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/tovaritem1.jpg" alt="">
										</a>
									</div>
									<div class="catalogpage__tovarlisttxtbox">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__art">Производитель:  Ariston</span>
										<span class="tovaritem__gotcha">В наличии</span>
										<div class="clear"></div>
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
										</a>
									</div>									
									<div class="catalogpage__tovarlistpricebox catalogpage__old">
										<span class="tovaritem__oldprice">58 600 .-</span>
										<div class="clear"></div>
										<span class="tovaritem__newprice tovaritem__border2">15 900 .-</span>
										<a href="#" class="tovaritem__more">Подробнее</a>
									</div>
									<div class="clear"></div>
								</div>
								<div class="catalogpage__tovarlistbox">
									<div class="catalogpage__tovarlistimg">
										<a href="img/tovaritem2.jpg" data-fancybox-group="group">
											<img src="img/tovaritem2.jpg" alt="">
										</a>
									</div>
									<div class="catalogpage__tovarlisttxtbox">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__art">Производитель:  Ariston</span>
										<span class="tovaritem__gotcha">В наличии</span>
										<div class="clear"></div>
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
										</a>
									</div>									
									<div class="catalogpage__tovarlistpricebox catalogpage__new">
										<div class="clear"></div>
										<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
										<a href="#" class="tovaritem__more">Подробнее</a>
									</div>
									<div class="clear"></div>
								</div>
								<div class="catalogpage__tovarlistbox">
									<div class="catalogpage__tovarlistimg">
										<span class="tovaritem__reklama2">Хит</span>
										<a href="img/tovaritem3.jpg" data-fancybox-group="group">
											<img src="img/tovaritem3.jpg" alt="">
										</a>
									</div>
									<div class="catalogpage__tovarlisttxtbox">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__art">Производитель:  Ariston</span>
										<span class="tovaritem__gotcha">В наличии</span>
										<div class="clear"></div>
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
										</a>
									</div>									
									<div class="catalogpage__tovarlistpricebox catalogpage__new">
										<div class="clear"></div>
										<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
										<a href="#" class="tovaritem__more">Подробнее</a>
									</div>
									<div class="clear"></div>
								</div>
								<div class="catalogpage__tovarlistbox">
									<div class="catalogpage__tovarlistimg">
										<span class="tovaritem__reklama1">Акция</span>
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/tovaritem1.jpg" alt="">
										</a>
									</div>
									<div class="catalogpage__tovarlisttxtbox">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__art">Производитель:  Ariston</span>
										<span class="tovaritem__gotcha">В наличии</span>
										<div class="clear"></div>
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
										</a>
									</div>									
									<div class="catalogpage__tovarlistpricebox catalogpage__old">
										<span class="tovaritem__oldprice">58 600 .-</span>
										<div class="clear"></div>
										<span class="tovaritem__newprice tovaritem__border2">15 900 .-</span>
										<a href="#" class="tovaritem__more">Подробнее</a>
									</div>
									<div class="clear"></div>
								</div>
								<div class="catalogpage__tovarlistbox">
									<div class="catalogpage__tovarlistimg">
										<a href="img/tovaritem2.jpg" data-fancybox-group="group">
											<img src="img/tovaritem2.jpg" alt="">
										</a>
									</div>
									<div class="catalogpage__tovarlisttxtbox">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__art">Производитель:  Ariston</span>
										<span class="tovaritem__gotcha">В наличии</span>
										<div class="clear"></div>
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
										</a>
									</div>									
									<div class="catalogpage__tovarlistpricebox catalogpage__new">
										<div class="clear"></div>
										<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
										<a href="#" class="tovaritem__more">Подробнее</a>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							
							<div class="catalogpage__tovartablet">
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">					
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/tovaritem1.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">
											<span class="tovaritem__oldprice"></span>			
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">
										<span class="tovaritem__reklama2">Хит</span>
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/tovaritem2.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">	
											<span class="tovaritem__oldprice"></span>		
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">
										<span class="tovaritem__reklama1">Акция</span>
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/cooler.png" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">
											<span class="tovaritem__oldprice">58 600 .-</span>
											<span class="tovaritem__newprice tovaritem__border2">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">					
										<a href="img/tovaritem3.jpg" data-fancybox-group="group">
											<img src="img/tovaritem3.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">	
											<span class="tovaritem__oldprice"></span>	
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">					
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/tovaritem1.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">
											<span class="tovaritem__oldprice"></span>				
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">
										<span class="tovaritem__reklama1">Акция</span>
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/cooler.png" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">
											<span class="tovaritem__oldprice">58 600 .-</span>
											<span class="tovaritem__newprice tovaritem__border2">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">					
										<a href="img/tovaritem3.jpg" data-fancybox-group="group">
											<img src="img/tovaritem3.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">	
											<span class="tovaritem__oldprice"></span>	
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">					
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/tovaritem1.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">
											<span class="tovaritem__oldprice"></span>				
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
							</div>

							<ul class="catalogpage__pagination">
								<li><a href="#" class="catalogpage__paginationleft"></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#" class="catalogpage__paginationactive">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#" class="catalogpage__allpages">...</a></li>
								<li><a href="#">10</a></li>
								<li><a href="#" class="catalogpage__paginationright"></a></li>
							</ul>



							<div class="catalogpage__tovartablet">
								<div class="burg-title">Вы смотрели</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">					
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/tovaritem1.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">
											<span class="tovaritem__oldprice"></span>			
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">
										<span class="tovaritem__reklama2">Хит</span>
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/tovaritem2.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">	
											<span class="tovaritem__oldprice"></span>		
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">
										<span class="tovaritem__reklama1">Акция</span>
										<a href="img/tovaritem1.jpg" data-fancybox-group="group">
											<img src="img/cooler.png" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">
											<span class="tovaritem__oldprice">58 600 .-</span>
											<span class="tovaritem__newprice tovaritem__border2">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
								<div class="tovaritem">
									<div class="tovaritem__toptxt">
										<span class="tovaritem__art">Артикул: 5478845</span>
										<span class="tovaritem__gotcha">В наличии</span>
									</div>
									<div class="tovaritem__img">					
										<a href="img/tovaritem3.jpg" data-fancybox-group="group">
											<img src="img/tovaritem3.jpg" alt="">
										</a>
									</div>
									<div class="tovaritem__txtbottom">
										<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр
										</a>
										<div class="tovaritem__pricebox">	
											<span class="tovaritem__oldprice"></span>	
											<span class="tovaritem__newprice tovaritem__border1">15 900 .-</span>
											<a href="#" class="tovaritem__more">Подробнее</a>
										</div>
									</div>
								</div>
							</div>
							

							<div class="sidebar-buttons catalog_buttons-hidden-on-md">
								<a href="#">Продажа газового оборудования </a>
								<a href="#compl" data-modal="modal" >Жалобы и предложения клиентов</a>
							</div>

							<div class="catalogpage__txtbottom">
								<h4>Добро пожаловать на сайт компании CityGaz Service </h4>
								<p>CityGaz Service – организация созданная в 2004 году при участии зарубежных производителей газового оборудования и их генеральных дистрибьюторов в России. Компании-производители обеспокоены невысоким ростом темпа продаж своего оборудования на нашем рынке.
								</p>
								<p>В результате специального изучения ситуации было выяснено, что российский покупатель, не смотря на высокое качество импортной техники, не торопиться отдавать ей предпочтение, беспокоясь о правильной ее установке и грамотном сервисном обслуживании
								</p>
							</div>







						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<?php require_once('includes/footer_top.php'); ?>
			<?php require_once('includes/footer.php'); ?>
		</div>
	</div>
</body>
</html>

