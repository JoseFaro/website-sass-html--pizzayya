<div id="<?=$page['Menus'][7]['Slug']?>" class="section mb-0 mt-0" style="padding: 80px 0 110px 0; background: #F5F5F5 url('<?=DOMAIN?>/demos/restaurant/images/food-pattern.png') repeat center center;">
	<div class="container">
		<div class="heading-block border-bottom-0 text-center mb-4">
			<!-- <span class="font-primary ls-1 color">Realiza tu pedido de una manera simple y segura</span> -->
			<h3 class="text-transform-none font-secondary ls-0" style="font-size: 52px; line-height: 1.3;"><?=$page['OrderByRappiTitle']?></h3>
		</div>

		<div class="clear"></div>

		<div class="row mt-5 g-5">
			<?php $orderGuideIcons = ['pizza', 'basket', 'delivery-bg'];?>
			<?php foreach($page['OrderGuide'] as $index => $OrderGuide): ?>
				
				<div class="col-lg-4 col-sm-6">
					<div class="feature-box media-box">
						<div class="fbox-media" style="width: 60px; height: 60px">
							<img src="<?=DOMAIN?>/demos/restaurant/images/icons/<?=$orderGuideIcons[$index]?>.svg" alt="Image">
						</div>
						<div class="fbox-content px-0">
							<h3><?=$OrderGuide['Title']?></h3>
							<p><?=$OrderGuide['Description']?></p>
						</div>
					</div>
				</div>
			<?php endforeach;?>
		</div>

		<div class="pt-5"></div>
		<div class="pt-5"></div>
		<div class="pt-5"></div>

		<?php /*
		<div class="heading-block border-bottom-0 text-center mb-4">
			<h3 class="text-transform-none font-secondary ls-0" style="font-size: 52px; line-height: 1.3;">Ordena por WhatsApp</h3>
		</div>

		<div class="row mt-5 g-5">
			<div class="col-lg-4 col-sm-6">
				<div class="feature-box media-box">
					<div class="fbox-media" style="width: 60px; height: 60px">
						<img src="demos/restaurant/images/icons/pizza.svg" alt="Image">
					</div>
					<div class="fbox-content px-0">
						<h3>1. Selección de tu pizza</h3>
						<p>Explora nuestras variedad de pizzas y encuentra la opción ideal para tu orden.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="feature-box media-box">
					<div class="fbox-media" style="width: 60px; height: 60px">
						<img src="demos/restaurant/images/icons/basket.svg" alt="Image">
					</div>
					<div class="fbox-content px-0">
						<h3>2. Ordena tu pizza a través WhatsApp</h3>
						<p>
							Solicita la pizza que elegiste por medio de <a href="https://api.whatsapp.com/send?phone=523222411279&text=Hola, me gustaría realizar un pedido" target="_blank">WhatsApp</a>.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="feature-box media-box">
					<div class="fbox-media" style="width: 60px; height: 60px">
						<img src="demos/restaurant/images/icons/route.svg" alt="Image">
					</div>
					<div class="fbox-content px-0">
						<h3>3. Solicitamos tu dirección de entrega y datos de tu orden</h3>
						<p>
							Solicitarémos tu nombre, teléfono y dirección de entrega para verificar el área de entrega (tenemos envíos gratis en zonas cercanas de acuerdo a disponibilidad de nuestros vehículos).
							<div class="mt-2">
								<a href="/#zonas-de-entrega" data-scrollto="#zonas-de-entrega" data-easing="easeInOutExpo" data-speed="750" data-offset="200">Ver zonas de entrega</a>
							</div>
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="feature-box media-box">
					<div class="fbox-media" style="width: 60px; height: 60px">
					<img src="demos/restaurant/images/icons/card.svg" alt="Image">
					</div>
					<div class="fbox-content px-0">
						<h3>4. Información de pago</h3>
						<p>
							Para el pago de tu orden lo podrás realizar en <b>efectivo</b> o con <b>tarjeta</b> a través del servicio externo de <a href="https://www.clip.mx/" target="_blank">Clip</a>.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="feature-box media-box">
					<div class="fbox-media" style="width: 60px; height: 60px">
						<img src="demos/restaurant/images/icons/shop.svg" alt="Image">
					</div>
					<div class="fbox-content px-0">
						<h3>5. Preparación de tus productos</h3>
						<p>Tu orden pasa a la fase de preparación y horneado, el tiempo apróximado para hornear tu pizza es de <b>20 a 30 minutos</b> de acuerdo a la cantidad de productos.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="feature-box media-box">
					<div class="fbox-media" style="width: 60px; height: 60px">
					<img src="demos/restaurant/images/icons/delivery-bg.svg" alt="Image">
					</div>
					<div class="fbox-content px-0">
						<h3>6. Se completa la orden y se envía a domicilio</h3>
						<p>Te notificamos de la orden completada y mandamos tus pizzas a tu domicilio con una duración de entrega de apróximadamente <b>5 minutos</b>. 
					</p>
					</div>
				</div>
			</div>
		</div>
		*/ ?>
	</div>
</div>