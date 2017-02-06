<?php 
/*
Template name: Страница спасибо
*/
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<?php wp_head(); ?>
</head>
<body>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>



	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>


<div class="n-wrapper">
	<div class="n-header">
	
		<section class="section section_padding section_padding_db">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="db-container-div">
							<ul class="db-container__menu db-container__menu_li-view">
								<li><a href="/#models">Модели диванов</a></li>
								<li><a href="/#advantages">Приемущества</a></li>
								<li><a href="/#conditions">Условия доставки</a></li>
							</ul>
							<div class="db-container__tel db-container__tel_view">
								<span>8 (495) 357-13-00</span> 
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="dd-content-spasibo">
				<span>Спасибо за заявку!</span><br>
				<span>Наш менеджер свяжется с вами в ближайшее время</span>
			</div>
		</div>
	</div>

	<div class="n-footer">
		
		<section class="section section_padding section_db-footer-view">
	<div class="container">
		<div class="row">
			<div class="db-footer-icon-container">
				<div class="db-footer-icon-one"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/db-footer-1.png" alt="img"></a></div>
				<div class="db-footer-icon-two"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/db-footer-2.png" alt="img"></a></div>
				<div class="db-footer-icon-three"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/db-footer-3.png" alt="img"></a></div>
			</div>
			<div class="col-md-12">
				<span class="db-footer-tel">8 (495) 357-13-00</span>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<p class="db-footer-text">ИП Казанцева Елена Анатольевна<br>
					город Москва, Юго-Запада 38-й квартал, ИНН 212902370284</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>	
</body>
</html>


<div id="mask"></div>
<div id="log-in" class="window">
	<div class="dd-form-wrap">
		<form class="form1" action="#" method="post">
			<div class="form-wrap-main">
				<div class="dd-close">Х</div>
				<div class="dd-input-wrap dd-padding-bottom">
					<input type="text" name="uname" placeholder="Ваше имя">
					<input class="my-input phone" type="text" placeholder="Введите телефон" name="phone">
				</div>
				<input type="submit" class="form-button" name="submit" value="Заказать звонок">
			</div>
		</form>
	</div>
</div>
<div id="thanks" class="window">
	<div class="form-wrap-main">
		<div class="dd-close"></div>
		<div class="form-title">
			Спасибо за заявку!
		</div>
		<div class="dd-form-txt">
			Наш менеджер свяжется с вами в ближайшее время!
		</div>
	</div>
</div>
<a href="#thanks" name="modal"></a>
	</div>

</div>