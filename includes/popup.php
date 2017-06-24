<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/reset.css" />
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="../block/inputtext/style.css" />
	<link rel="stylesheet" href="../css/popup.css" />
	<link rel="stylesheet" href="../block/textarea/style.css" />
</head>
<body>
<div class='container'>
<a href="#order" data-modal="modal" >Заказать ремонт   .</a>
<a href="#compl" data-modal="modal" >Пожаловаться   .</a>
<a href="#ask-question" data-modal="modal" >Задать вопрос   .</a>
<a href="#description" data-modal="modal" >Неточность описания  .</a>
<a href='#bucket_popup' data-modal="modal">Корзина   .</a>
<a href='#thanks' data-modal="modal">Спасибо</a>
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
	<input type="submit" value='Отправит на проверку' ></input>
	</form>

</div>

<div class="modal-window" id="bucket_popup">
	<h3>Вы добавили в корзину</h3>
	<div>
		<div>
		<p class='article'>Артикул 1234567</p>
		<a href='#'>Запчасти для газовых колонок:комплектующие</a>
	</div>
		<img src='../img/5665220.png' />
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
	<span class="modal-close"><i class="fa fa-times" aria-hidden="true"></i></span>
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

</div>
</div>
</body>

<script src="../libs/jquery/dist/jquery.js"></script>
<script src="../js/popup.js"></script>
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