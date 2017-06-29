

<div class="modal-window" id="order">
	<span class="modal-close"></span>
	<h3>Заказать ремонт</h3>
	<form name='popup_form'>
	<input type="text" placeholder="Ваше имя *" name="uname" required>
	<input type="text" placeholder="Телефон *" name="phone" required>
	<input type="text" placeholder="Адрес" name='address'>
	<textarea placeholder="Сообщение" name='text'></textarea>
	<input type="submit" value='Заказать ремонт'></input>
	</form>

</div>

<div class="modal-window" id="compl">
	<span class="modal-close"></span>
	<h3>Жалобы клиентов</h3>
	<form name='popup_form'>
	<input type="text" placeholder="Ваше имя *" name="uname" required>
	<input type="text" placeholder="Телефон *" name="phone" required>
	<input type="text" placeholder="Ваш Email" name='email'>
	<textarea placeholder="Текст жалобы" name='text'></textarea>
	<input type="submit" value='Отправить жалобу'></input>
	</form>

</div>

<div class="modal-window" id="ask-question">
	<span class="modal-close"></span>
	<h3>Задать вопрос</h3>
	<form name='popup_form'>
	<input type="text" placeholder="Ваше имя *" name="uname" required>
	<input type="text" placeholder="Телефон " name="phone">
	<input type="text" placeholder="Ваш Email *" name='email' required>
	<textarea placeholder="Вопрос" name='text'></textarea>
	<input type="submit" value='Задать вопрос'></input>
	</form>

</div>

<div class="modal-window" id="description">
	<span class="modal-close"></span>
	<h3>Неточность описания</h3>
	<form name='popup_form'>
	<input type="text" placeholder="Ваше имя" name="uname">
	<input type="text" placeholder="Ваш Email" name='email'>
	<textarea placeholder="Сообщение *" name='text' required></textarea>
	<input type="submit" value='Отправить на проверку' ></input>
	</form>

</div>

<div class="modal-window" id="bucket_popup">
	<h3>Вы добавили в корзину</h3>
	<div>
		<div>
		<p>Артикул 24687965</p>
		<a href='#'>Водогазовый блок Mertic для колонки Mora</a>
	</div>
		<img src='img/product1.jpg' />
	</div>
	<input type="submit" value='Оформить заказ' ></input>
	<a class="modal-close">Продолжить покупки</a>

</div>

<div class="modal-window" id="thanks">
	<span class="modal-close"></span>
	<br>
	<span class="popup-title">Спасибо за вашу заявку!</span>
	<p>
		В ближайшее время наш менеджер <br> свяжется с Вами.
	</p>	
</div>

<div class="mobile-window" id="mobile">
	<span class="modal-close"></span>
	<div class="mobile-line"></div>
		<div class="mobile-logo">
			<a href="/">
				<img src="../img/header.png" alt="CityGaz">	
			</a>		
		</div>
	<ul class="mobile-main-menu">
		<li><a href="#">О компании</a></li>
		<li><a href="#">Монтаж</a></li>
		<li><a href="#">Ремонт и обслуживаение</a></li>
		<li><a href="#">Как заказать</a></li>
		<li class="active">
			<a href="#" class="active-bg">Доставка и оплата</a>
			<ul class="main-manu2">
				<li><a href="#">Доставка курьером</a></li>
				<li><a href="#">Доставка почтой</a></li>
				<li><a href="#">Самовывоз</a></li>
			</ul>
		</li>
		<li><a href="#">Документы</a></li>
		<li><a href="#">Контакты</a></li>
	</ul>
	<div class="col-md-3 col-sm-12 col-lg-4">
				<div class="contact-box">
					<div class="contact-address">
						<strong>г. Нижний Новгород,</strong> <br>
						
						ул. Коммунистическая д. 77
					</div>
					<div class="contact-phones">
						диспетчер: <span>(831) <strong>4 - 139 - 169</strong></span><br>
						тел/факс &nbsp;&nbsp;&nbsp;<span>(831) <strong>202 - 90 - 33</strong></span>
					</div>
				</div>
			</div>

</div>

<script src="libs/jquery/dist/jquery.js"></script>
<script src="js/popup.js"></script>
<script>
	$(document).ready(function() {
		$("form[name='popup_form']").submit(function() {
			$data = $(this).serialize();
			 $.ajax({
			    type: "POST", 
			    url: "sendmessage.php", 
			    data: $data,
			    success: function() {
			     cleanTnanks(this);
			    }
			   });
			 return false;
		});
		 function cleanTnanks(form){
		  $('form').parent().hide();
		  $("input[type=text]").val("");
		  $("input[type=tel]").val("");
		  $("textarea").val("");
		  $('a[href="#thanks"]').trigger('click');
		    // location = "thanks.php";
		   };

	});
</script>