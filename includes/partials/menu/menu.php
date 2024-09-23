<?php
	$pizzas = [];

	foreach($page['PizzaMenu'] as $pizzaMenu) {
		$pizzas[] = [
			'id' => $pizzaMenu['IDD'] + 0,
			'name' => $pizzaMenu['Name'],
			'description' => $pizzaMenu['Description'],
			'price' => $pizzaMenu['Price'],
			'whatsappMessage' => $pizzaMenu['WhatsappMessage'],
			'image' => 'https://cms.polariswebsites.com' . $pizzaMenu['Image']['data']['attributes']['url'],
		];
	}
?>

<div class="section mb-0" id="menu">
	<div class="container">
		<div class="heading-block text-center mb-0 border-bottom-0">
			<span class="font-primary" style="font-size: 16px; color: #888"><?=$page['OurMenuSubtitle']?></span>
			<h3 class="text-transform-none font-secondary ls-0" style="font-size: 60px;"><?=$page['OurMenuTitle']?></h3>
		</div>
	</div>
</div>

<div class="container">	
	<div class="pt-5"></div>
	<div class="pt-5"></div>
	<div class="pt-5"></div>
	<div id="tab-restuarant">
		<!-- <ul class="nav canvas-alt-tabs2 tabs nav-pills nav-fill mb-5" id="canvas-tab-nav2" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="canvas-tabs-pizza-tab" data-bs-toggle="pill" data-bs-target="#tabs-pizza"
					type="button" role="tab" aria-controls="canvas-tabs-pizza" aria-selected="false"><img src="demos/restaurant/images/icons/pizza.svg" alt="Image"> Pizza</button>
			</li>
		</ul> -->

		<div id="canvas-tab-alt-content" class="tab-content mt-3">
			<div class="tab-pane fade show active" id="tabs-pizza" role="tabpanel" aria-labelledby="canvas-tabs-pizza-tab" tabindex="0">
				<div class="row gutter-40">
					<?php foreach($pizzas as $pizza): ?>
						<?php if($pizza['id'] === 1) continue; ?>
						<?php include dirname(__FILE__) . '/menuProduct.php'; ?>
					<?php endforeach;?>
			</div>
		</div>
	</div>
</div>