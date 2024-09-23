<?php
	$isHomePage = true;

	$meta = [
		'title' => 
			$page['locale'] == 'es' 
				? 'Pizza y ya! | Blog de pizzas próximamente'
				: 'Pizza y ya! | Pizza blog coming soon',	
		'description' => 
			$page['locale'] == 'es' 
				? 'Blog de pizzas próximamente'
				: 'Pizza blog coming soon',
		'ogUrl' => 'https://pizzayya.com/blog',
		'ogImage' => 'https://pizzayya.com/images/pizzas/pizza-de-peperoni.jpg',
	];

	include dirname(__FILE__) . '/includes/partials/header.php';
	

	// $locale = 'en';
	// $data = strapiGet($locale);

	// echo '<pre>', print_r($data), '</pre>';

	/////////////////////////////
	/////////////////////////////
?>

<section>
	<div>
		<div class="container mt-5">
			<div class="pb-5"></div>
			<div class="pb-5"></div>

			<h1 class="text-center mb-0">
				Blog
			</h1>
			
			<h3 class="text-center">
				<?php echo $locale == 'es' ? 'Proximamente' : 'Coming soon'?>
			</h3>

			<div class="pb-5"></div>
			<div class="pb-5"></div>
			<div class="pb-5"></div>
			<div class="pb-5"></div>
		</div>		

		<?php include dirname(__FILE__) . '/includes/partials/footer.php'; ?>