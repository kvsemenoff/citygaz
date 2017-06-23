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
					<div class="col-md-3 paddingnone">
						<?php require_once('includes/sidebar-main.php'); ?>
					</div>
					<div class="col-md-9 paddingnone">
						<?php require_once('includes/slider-main.php'); ?>
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

