<?php
	$isHomePage = true;


	$meta = [
		'title' => 
			$page['locale'] == 'es' 
				? 'Pizza y ya! | Venta de pizzas tradicionales con un toque casero'
				: 'Pizza y ya! | Sale of traditional pizzas with a homemade touch',
		'description' => 
			$page['locale'] == 'es' 
				? 'Disfruta de nuestras deliciosas pizzas tradicionales con un toque casero. Ingredientes frescos, recetas auténticas y sabores irresistibles. ¡Haz tu pedido ahora!'
				: 'Enjoy our delicious traditional pizzas with a homemade touch. Fresh ingredients, authentic recipes, and irresistible flavors. Order now!',
		'ogUrl' => 'https://pizzayya.com',
		'ogImage' => 'https://pizzayya.com/images/pizzas/pizza-de-peperoni.jpg',
	];

	include dirname(__FILE__) . '/includes/partials/header.php';
	

	// $locale = 'en';
	// $data = strapiGet($locale);

	// echo '<pre>', print_r($data), '</pre>';

	/////////////////////////////
	/////////////////////////////
?>

<!-- Slider
============================================= -->
<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-effect="fade" data-loop="true" data-autoplay="6000" data-speed="1400">
	<div class="slider-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<?php foreach($page['Slides'] as $slide): ?>
					<div class="swiper-slide">
						<div class="container dark slider-container">
							<div class="slider-caption slider-caption-center">
								<div>
									<h2 class="font-secondary ls-0 fw-normal text-transform-none" data-animate="fadeIn"><?=$slide['Title']?></h2>
									<p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="400"><?=$slide['Subtitle']?></p>
									<div class="static-content position-relative d-flex justify-content-center mt-5" data-animate="fadeIn" data-delay="800">
										<img src="<?=DOMAIN?>/demos/restaurant/images/icons/bowl-white.svg" width="42" height="42" alt="Image">
										<img class="ms-4" src="<?=DOMAIN?>/demos/restaurant/images/icons/spoon-white.svg" width="42" height="42" alt="Image">
										<img class="ms-4" src="<?=DOMAIN?>/demos/restaurant/images/icons/glass-white.svg" width="42" height="42" alt="Image">
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" style="background-image: url('https://cms.polariswebsites.com<?=$slide['Photo']['data']['attributes']['url']?>');"></div>
					</div>
				<?php endforeach;?>
			</div>

			<div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
			<div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
		</div>
	</div>
</section>

<!-- Content
============================================= -->
<div id="<?=$page['Menus'][1]['Slug']?>"></div>
<section id="content">
	<div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('<?=DOMAIN?>/demos/restaurant/images/sketch.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>
	<div class="content-wrap" style="overflow: visible;">
		<div class="section m-0 pt-4" style="background: #fff;">
			<div class="container">
				<div class="heading-block border-bottom-0 mb-4">
					<h2 class="font-secondary color text-transform-none" style="font-size: 52px;"><?=$page['Title']?></h2>
				</div>

				<p class='col-6 mb-5 pb-5'>
					<?=$page['MainDescription']?>
					
					<br><br>
					<a href="/<?=$page['Menus'][5]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][5]['Slug'], 180);?>>
						<?=$page['ViewZonesLabel']?>
					</a>
				</p>

				<div class="row col-mb-50">
					<?php foreach($page['Presentations'] as $presentation): ?>
						<div class="col-lg-4">
							<div class="feature-box media-box" style="max-width: 400px;">
								<div class="fbox-media" style="width: 70px; height: auto;">
									<img src="<?=DOMAIN?>/demos/restaurant/images/icons/spoon.svg" alt="Image">
								</div>
								<div class="fbox-content px-0">
									<h3>
										<?=$presentation['Title']?>
									</h3>
									<p>
										<?=$presentation['Subtitle']?>
									</p>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>

		<!-- menu -->
		<?php include dirname(__FILE__) . '/includes/partials/menu/menu.php'; ?>
	</div>
</div>

<?php $pizza = $pizzas[0]; ?>
<?php include dirname(__FILE__) . '/includes/partials/menu/menuProductMakeYourPizza.php'; ?>

<section>
	<div>
		<?php if($page['IsRappiEnabled']): ?>
			<!-- how to order: basic -->
			<?php include dirname(__FILE__) . '/includes/partials/howToOrder.php'; ?>		
		<?php endif;?>

		<div class="container mt-5" id="<?=$page['Menus'][5]['Slug']?>">
			<div class="container mb-5">
				<div class="heading-block text-center mb-0 border-bottom-0">
					<h3 class="text-transform-none font-secondary ls-0" style="font-size: 60px;">
						<?=$page['LocationTitle']?>	
					</h3>
				</div>
			</div>

			<div class="container mb-5 pb-4">
				<div class="row">
					<div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">

						<?php foreach($page['ShipmentAreas'] as $shipmentArea): ?>
							<?php if(!$page['IsRappiEnabled'] && $shipmentArea['Color'] == 'gray') continue; ?>

							<div class="d-flex mb-4">
								<div class="me-3">
									<div class="delivery-color delivery-color-<?=$shipmentArea['Color']?>"></div>
								</div>
								
								<?php if($shipmentArea['Color'] == 'gray'): ?>
										<div>
											<div class="delivery-title"><?=$shipmentArea['Subtitle']?></div>
										</div>
								<?php else: ?>
									<div>
										<div class="delivery-title">
											<?=$shipmentArea['Title']?>
										</div>
										<div class="delivery-description">
											<p><?=$shipmentArea['Subtitle']?></p>
										</div>
									</div>
								<?php endif;?>
							</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>

			<div class='col-12 iframe-block-wrapper'>
				<!-- <div class="iframe-block">
					<img class='circle-pizzayya-overlay' />
					<div class='name-pizzayya-overlay'>Pizza y ya</div>
				</div> -->
				<iframe src="https://www.google.com/maps/d/u/3/embed?mid=1V8agGtuHhfNlMl423mi5GAvezNisNjw&ehbc=2E312F" width="640" height="480"></iframe>			</div>
		</div>		

		<?php include dirname(__FILE__) . '/includes/partials/footer.php'; ?>