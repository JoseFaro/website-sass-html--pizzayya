<?php
	require_once dirname(__FILE__) . '/../../../shared/helpers.php';
	require_once dirname(__FILE__) . '/../constants.php';

	$gitVersion = getGitVersion();
	$meta = isset($meta) ? $meta : getMetaDefaults();

	// $locale = 'es';
	// $page = strapiGet($locale);

	/////////////////////////////
	/////////////////////////////
?><!DOCTYPE html>
<html dir="ltr" lang="<?=$page['locale']?>">
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-B1GQVJ1CDP"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-B1GQVJ1CDP');
	</script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P7GLGWBL');</script>
	<!-- End Google Tag Manager -->

	<title><?=$meta['title']?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="Polaris Websites">
	<meta name="description" content="<?=$meta['description']?>">

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=DOMAIN?>/images/favicon/apple-touch-icon-57x57.png?v=<?=$gitVersion?>" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=DOMAIN?>/images/favicon/apple-touch-icon-114x114.png?v=<?=$gitVersion?>" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=DOMAIN?>/images/favicon/apple-touch-icon-72x72.png?v=<?=$gitVersion?>" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=DOMAIN?>/images/favicon/apple-touch-icon-144x144.png?v=<?=$gitVersion?>" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=DOMAIN?>/images/favicon/apple-touch-icon-60x60.png?v=<?=$gitVersion?>" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=DOMAIN?>/images/favicon/apple-touch-icon-120x120.png?v=<?=$gitVersion?>" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=DOMAIN?>/images/favicon/apple-touch-icon-76x76.png?v=<?=$gitVersion?>" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=DOMAIN?>/images/favicon/apple-touch-icon-152x152.png?v=<?=$gitVersion?>" />
	<link rel="icon" type="image/png" href="<?=DOMAIN?>/images/favicon/favicon-196x196.png?v=<?=$gitVersion?>" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?=DOMAIN?>/images/favicon/favicon-96x96.png?v=<?=$gitVersion?>" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?=DOMAIN?>/images/favicon/favicon-32x32.png?v=<?=$gitVersion?>" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?=DOMAIN?>/images/favicon/favicon-16x16.png?v=<?=$gitVersion?>" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?=DOMAIN?>/images/favicon/favicon-128.png?v=<?=$gitVersion?>" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?=DOMAIN?>/images/favicon/mstile-144x144.png?v=<?=$gitVersion?>" />
	<meta name="msapplication-square70x70logo" content="<?=DOMAIN?>/images/favicon/mstile-70x70.png?v=<?=$gitVersion?>" />
	<meta name="msapplication-square150x150logo" content="<?=DOMAIN?>/images/favicon/mstile-150x150.png?v=<?=$gitVersion?>" />
	<meta name="msapplication-wide310x150logo" content="<?=DOMAIN?>/images/favicon/mstile-310x150.png?v=<?=$gitVersion?>" />
	<meta name="msapplication-square310x310logo" content="<?=DOMAIN?>/images/favicon/mstile-310x310.png?v=<?=$gitVersion?>" />

	<meta property="fb:app_id" content="2067119303658003">
	<meta property="og:title" content="<?=$meta['title']?>">
	<meta property="og:description" content="<?=$meta['description']?>">
	<meta property="og:image" content="<?=$meta['ogImage']?>">
	<meta property="og:url" content="<?=$meta['ogUrl']?>">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="<?=$page['locale'] == 'es' ? 'es_LA' : 'en_US'?>">
	<meta property="og:site_name" content="Pizzayya">
	
	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Open+Sans:wght@400;600;700;800;900&family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,900;1,400;1,700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link media="all" rel="stylesheet" href="<?=DOMAIN?>/css/style.<?=IS_PRODUCTION ? 'min.' : ''?>css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="<?=DOMAIN?>/css/font-icons.css">
	<link rel="stylesheet" href="<?=DOMAIN?>/one-page/css/et-line.css">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="<?=DOMAIN?>/css/swiper.css">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="<?=DOMAIN?>/demos/restaurant/restaurant.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?=DOMAIN?>/css/custom.css?v=<?=$gitVersion?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="stretched page-transition" data-loader-html="<span class='pizza'> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> </span>">


	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7GLGWBL"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
 
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">
		<div id="<?=$page['Menus'][0]['Slug']?>"></div>
		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">
						<!-- Logo
						============================================= -->
						<div id="logo" class="col-auto me-lg-0 order-lg-2">
							<a href="/<?=$page['Menus'][0]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][0]['Slug'], 0);?> >
								<img class="logo-default" src="<?=DOMAIN?>/images/pizzayya-logo.svg" alt="Pizzayya Logo">
							</a>
						</div><!-- #logo end -->

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<!-- <nav class="primary-menu col-lg-4 order-lg-1">
							<ul class="menu-container">
							</ul>
						</nav> -->
							
						<nav class="primary-menu col-lg-10 order-lg-3">
								<ul class="menu-container justify-content-lg-end">
								<li class="menu-item"><a class="menu-link" href="/<?=$page['Menus'][0]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][0]['Slug']);?> ><div><?=$page['Menus'][0]['Title']?></div></a></li>
								<li class="menu-item"><a class="menu-link" href="/<?=$page['Menus'][1]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][1]['Slug'], 70);?> ><div><?=$page['Menus'][1]['Title']?></div></a></li>
								<li class="menu-item"><a class="menu-link" href="/<?=$page['Menus'][2]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][2]['Slug'], 160);?> ><div><?=$page['Menus'][2]['Title']?></div></a></li>
								<li class="menu-item"><a class="menu-link" href="/<?=$page['Menus'][3]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][3]['Slug'], 20);?> ><div><?=$page['Menus'][3]['Title']?></div></a></li>
								<li class="menu-item"><a class="menu-link" href="<?=DOMAIN . $page['Menus'][4]['Url']?>"><div><?=$page['Menus'][4]['Title']?></div></a></li>
								<li class="menu-item"><a class="menu-link" href="/<?=$page['Menus'][5]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][5]['Slug'], 250);?> ><div><?=$page['Menus'][5]['Title']?></div></a></li>
								
								<?php if($page['IsRappiEnabled']): ?>
									<li class="menu-item"><a class="menu-link color" href="<?=$page['Menus'][7]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][7]['Slug'], 140);?> ><div><?=$page['Menus'][7]['Title']?></div></a></li>
								<?php endif;?>

								<li class="menu-item"><a class="menu-link <?=(!$page['IsRappiEnabled']) ? 'color': ''?>" href="<?=DOMAIN . $page['Menus'][6]['Url']?>" ><div><?=$page['Menus'][6]['Title']?></div></a></li>

								<!-- <li class="menu-item"><a class="menu-link" href="/#como-ordenar" data-scrollto="#como-ordenar" data-easing="easeInOutExpo" data-speed="750" data-offset="160"><div>Como ordenar</div></a></li>
								<li class="menu-item"><a class="menu-link" href="/app#/mi-cuenta"><div>Mi cuenta</div></a></li>
								<li class="menu-item"><a class="menu-link color" href="/app#/mi-orden"><div>Mi orden (3)</div></a></li> -->
								<!-- <li class="menu-item"><a class="menu-link color" href="demo-restaurant-reservation.html"><div>Mi orden (3) <i class="i-plain i-small mx-auto mb-0 uil-shopping-cart menu-icon-cart"></i></div></a></li> -->
							</ul>
						</nav><!-- #primary-menu end -->
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->