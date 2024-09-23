<?php

	$isHomePage = true;
	$meta = [
		'title' => 'Pizzayya | Sistema de ordenes',
		'description' => 'Lorem ipsum',
		'ogUrl' => 'https://pizzayya.com',
		'ogImage' => '',
	];

	include dirname(__FILE__) . '/includes/partials/header.php';

	/////////////////////////////
	/////////////////////////////
?>

<!-- Content
============================================= -->
<section id="content">
	<div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('<?=DOMAIN?>/demos/restaurant/images/sketch.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>

	<div class="content-wrap pt-0 pt-lg-5" style="overflow: visible;">
		<div class="section m-0 pt-5" style="background: #fff;">
			<div class="container">
				<div id="app"></div>
			</div>
		</div>		

<?php
	include dirname(__FILE__) . '/includes/partials/footer.php';
?>