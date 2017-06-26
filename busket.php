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

				<div class="busketpage">

					<ul class="brearcrumbs">
						<li><a href="#">Главная</a></li>
						<li><span>Запчасти к водонагревателям</span></li>
					</ul>
					<div class="burg-title">Ваша корзина</div>

					<div class="busketblock">
						<div class="busket__topbox">
							<span class="busket__prod">Товар</span>
							<span class="busket__price">Цена</span>
							<span class="busket__kol">Количество</span>
							<span class="busket__summ">Сумма</span>
							<span class="busket__del">Удалить</span>
							<div class="clear"></div>
						</div>
						
						<div class="busket__listbox">
							<div class="catalogpage__tovarlistimg">
								<a href="img/tovaritem3.jpg" data-fancybox-group="group">
									<img src="img/tovaritem3.jpg" alt="">
								</a>
							</div>
							<div class="catalogpage__tovarlisttxtbox">
								<span class="tovaritem__art">Артикул: 5478845</span>	
								<div class="clear"></div>
								<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
								</a>
							</div>
							<div class="busket__listboxprice">
								<span class="busket__listboxoldpr"></span>
								<span class="busket__listboxnewpr">5 200 .-</span>
							</div>
							<div class="busket__listbox-kolvo">
								<span class="busket__button">-</span>
								<input type="text" value="1" disabled="disabled">  
								<span class="busket__button">+</span>
							</div>
							<div class="busket__listbox-summ">
								<span>5 200 .-</span>
							</div>
							<div class="busket__listbox-del">
								<a href="#"></a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="busket__listbox">
							<div class="catalogpage__tovarlistimg">
								<a href="img/tovaritem1.jpg" data-fancybox-group="group">
									<img src="img/tovaritem1.jpg" alt="">
								</a>
							</div>
							<div class="catalogpage__tovarlisttxtbox">
								<span class="tovaritem__art">Артикул: 5478845</span>	
								<div class="clear"></div>
								<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
								</a>
							</div>
							<div class="busket__listboxprice">
								<span class="busket__listboxoldpr">58 600 .-</span>
								<span class="busket__listboxnewpr">5 200 .-</span>
							</div>
							<div class="busket__listbox-kolvo">
								<span class="busket__button">-</span>
								<input type="text" value="1" disabled="disabled">  
								<span class="busket__button">+</span>
							</div>
							<div class="busket__listbox-summ">
								<span>5 200 .-</span>
							</div>
							<div class="busket__listbox-del">
								<a href="#"></a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="busket__listbox">
							<div class="catalogpage__tovarlistimg">
								<a href="img/tovaritem2.jpg" data-fancybox-group="group">
									<img src="img/tovaritem2.jpg" alt="">
								</a>
							</div>
							<div class="catalogpage__tovarlisttxtbox">
								<span class="tovaritem__art">Артикул: 5478845</span>	
								<div class="clear"></div>
								<a href="#" class="tovaritem__nameproduct">Газовый клапан 820 NOVA mv. 0.820.303 цена, купить Днепр 
								</a>
							</div>
							<div class="busket__listboxprice">
								<span class="busket__listboxoldpr"></span>
								<span class="busket__listboxnewpr">5 200 .-</span>
							</div>
							<div class="busket__listbox-kolvo">
								<span class="busket__button">-</span>
								<input type="text" value="1" disabled="disabled">  
								<span class="busket__button">+</span>
							</div>
							<div class="busket__listbox-summ">
								<span>5 200 .-</span>
							</div>
							<div class="busket__listbox-del">
								<a href="#"></a>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="busket__bootombox">
							<span class="busket__itogo">ИТОГО:</span>
							<span class="busket__allprice">5 200 .-</span>
							<div class="clear"></div>
						</div>	
					</div>
					
					<div class="busket__formbox">
						<div class="burg-title">Доставка</div>
						<div class="busket__leftbox">
							<label class="checkbox">
								<input class="checkbox__hidden" type="radio" name="checkbox-test" checked="checked">
								<span class="checkbox__custom"></span>
								<span class="checkbox__label">Доставка с установкой  (рекомендуем)</span>
							</label>
							<p>Вы можете забрать самостоятельно товар по этому адресу:
								г. Нижний Новгород, <span>ул. Коммунистическая д. 77</span>
							</p>
						</div>
						<div class="busket__rightbox">
							<label class="checkbox">
								<input class="checkbox__hidden" type="radio" name="checkbox-test" >
								<span class="checkbox__custom"></span>
								<span class="checkbox__label">Самовывоз по адресу</span>
							</label>
							<p>Вы можете забрать самостоятельно товар по этому адресу:
								г. Нижний Новгород, <span>ул. Коммунистическая д. 77</span>
							</p>
						</div>	
						<div class="clear"></div>	
					</div>
					
					<div class="busket__messagebox">
						<div class="burg-title">Оформление заказа</div>
						<form action="#" method="post">
							<div class="busket__messageleft">
								<input type="text" placeholder="Ваше имя *">
								<input type="text" placeholder="E-mail">
								<input type="text" class="js-phone" placeholder="Телефон *">
							</div>
							<div class="busket__messageright">
								<input type="text" placeholder="Адрес">
								<textarea placeholder="Коментарий"></textarea>
							</div>
							<div class="clear"></div>
							<div class="busket__messagesubmit">
								<input type="submit" value="Оформить заказ">
							</div>
						</form>
					</div>
					
					<div class="busket__txtbottom">
						<h4>Дополнительный текст по поводу получения товара</h4>
						<p>CityGaz Service – организация созданная в 2004 году при участии зарубежных производителей газового оборудования и их генеральных дистрибьюторов в России. Компании-производители обеспокоены невысоким ростом темпа продаж своего оборудования на нашем рынке. В результате специального изучения ситуации было выяснено, что российский покупатель, не смотря на высокое качество импортной техники, не торопиться отдавать ей предпочтение, беспокоясь о правильной ее установке и грамотном сервисном обслуживании
						</p>
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
