<?php
	require_once dirname(__FILE__) . '/../../../shared/helpers.php';
	require_once dirname(__FILE__) . '/../constants.php';

	$gitVersion = getGitVersion();

	/////////////////////////////
	/////////////////////////////
?>


				<div class="section mb-0 mt-0 bg-transparent" >
					<div class="container">
						<div class="mx-auto d-flex justify-content-center text-center" style="max-width: 900px;">
							<h3 class="mb-0 ls-0">
								<?=$page['PromotionTitle']?>

								<?php if($page['IsRappiEnabled']): ?>
									<a 
										href="<?=$page['PromotionCTAUrl']?>" target="_blank" 
										class="button button-circle button-xlarge text-white ls-0 text-transform-none mt-0 ms-3 mt-4 mt-lg-0" 
										style="position: relative;"
									>
										<span><?=$page['PromotionCTA']?></span> <i class="bi-arrow-right fw-semibold"></i>
									</a>
								<?php endif;?>
							</h3>
						</div>
					</div>
				</div>

				<div class="line clear mt-0"></div>

				<div class="container section-contact">
					<div class="row g-5 pb-5 mb-3">
						<div class="col-lg-3 col-md-6 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-map"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px"><?=$page['FooterLocationTitle']?></h3>
							<?=$page['FooterLocationContent']?>
						</div>

						<div class="col-lg-3 col-md-6 text-center" id="<?=$page['Menus'][3]['Slug']?>">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clock"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px"><?=$page['FooterHourTitle']?></h3>
							<?=$page['FooterHourContent']?>
						</div>

						<div class="col-lg-3 col-md-6 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clipboard"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px"><?=$page['ContactTitle']?></h3>
							<?=$page['ContactText']?>
						</div>

						<div class="col-lg-3 col-md-6 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-et-heart"></i>
							<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px"><?=$page['SocialNetworkTitle']?></h3>
							<div class="d-flex justify-content-center">
								<a href="https://www.facebook.com/PizzayyaValleDorado" target="_blank" class="social-icon border-transparent h-bg-facebook">
									<i class="fa-brands fa-facebook-f"></i>
									<i class="fa-brands fa-facebook-f"></i>
								</a>
								<a href="https://www.instagram.com/pizzayyavalledorado/" target="_blank" class="social-icon border-transparent h-bg-instagram">
									<i class="fa-brands fa-instagram"></i>
									<i class="fa-brands fa-instagram"></i>
								</a>
								<!-- <a href="#" class="social-icon border-transparent h-bg-youtube">
									<i class="fa-brands fa-youtube"></i>
									<i class="fa-brands fa-youtube"></i>
								</a>
								<a href="#" class="social-icon border-transparent h-bg-email3">
									<i class="bi-envelope"></i>
									<i class="bi-envelope"></i>
								</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background: linear-gradient(90deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('<?=DOMAIN?>/demos/restaurant/images/footer-bg.jpg'); background-size: cover; padding: 20px 0 22px">
			<div id="copyrights" class="bg-transparent mb-0">
				<div class="container">
					<div class="row justify-content-between col-mb-30">
						<div class="col-12 col-md-auto text-center text-md-start">
							<span class="font-primary mt-2 d-block"><?=$page['FooterDisclaimer']?></span>
						</div>

						<div class="col-12 col-md-auto text-center text-md-end">
							<div class="copyrights-menu copyright-links">
								<a href="/<?=$page['Menus'][0]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][0]['Slug']);?> ><?=$page['Menus'][0]['Title']?></a>
								/
								<a href="/<?=$page['Menus'][1]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][1]['Slug'], 70);?> ><?=$page['Menus'][1]['Title']?></a>
								/
								<a href="/<?=$page['Menus'][2]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][2]['Slug'], 60);?> ><?=$page['Menus'][2]['Title']?></a>
								/
								<a href="<?=DOMAIN . $page['Menus'][4]['Url']?>"><?=$page['Menus'][4]['Title']?></a>
								/
								<a href="/<?=$page['Menus'][5]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][5]['Slug'], 180);?> ><?=$page['Menus'][5]['Title']?></a>
								
								<?php if($page['IsRappiEnabled']): ?>
									/
									<a href="/<?=$page['Menus'][7]['Url']?>" <?=getMenuScrollOptions(IS_HOME_PAGE, '#'.$page['Menus'][2]['Slug'], 180);?> ><?=$page['Menus'][7]['Title']?></a>
								<?php endif;?>

								/
								<a href="<?=DOMAIN . $page['Menus'][6]['Url']?>"><?=$page['Menus'][6]['Title']?></a>

							</div>
						</div>
					</div>
				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="bi-arrow-up"></div>

	<script>
		// required by some npm packages
		window.process = { 
			browser: true, 
			env: { 
				ENVIRONMENT: 'BROWSER',
				PUBLIC_URL: 'http://localhost:9639',
			},
		};
	</script>

	<!-- JavaScripts
	============================================= -->
	<script src="<?=DOMAIN?>/js/jquery.js?v=<?=$gitVersion?>"></script>
	<script src="<?=DOMAIN?>/js/functions.js?v=<?=$gitVersion?>"></script>

	<!-- Custom Carousel JS File -->
	<script>
		var carouselRTL = false;

		if( jQuery('body').hasClass('rtl') ) {
			carouselRTL = true;
		}

		jQuery(window).on( 'pluginCarouselReady', function(){
			jQuery('#food-menu-carousel').owlCarousel({
				animateIn: 'fadeIn',
				animateOut: 'fadeOut',
				items: 1,
				mouseDrag: false,
				dotsContainer: '#item-thumb',
				rtl: carouselRTL
			});

			jQuery('#dessert-menu-carousel').owlCarousel({
				animateIn: 'fadeIn',
				animateOut: 'fadeOut',
				items: 1,
				mouseDrag: false,
				dotsContainer: '#item-thumb1',
				rtl: carouselRTL
			});
		});
	</script>

	<script src="<?=DOMAIN?>/js/custom.js?v=<?=$gitVersion?>"></script>

	<!-- app -->
	<script src="<?=DOMAIN?>/dist/main.js?v=<?=$gitVersion?>"></script>
</body>
</html>