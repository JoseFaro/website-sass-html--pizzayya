<?php
  date_default_timezone_set('America/Mexico_City');

  $currentHour = date('H');
	$currentMinute = date('i');

	$isOpenHours = $currentHour >= 19 && $currentHour <= 22;
	$isOpenMinutes = $currentHour == 22 && $currentMinute <= 30;

  $isClosedForced = $page['IsClosedOverride'];
	$isOpen = $page['IsOpenOverride'] || ($isOpenHours && $isOpenMinutes);
  $isOpen = $isClosed ? false : $isOpen;

  // classes
  $disabledClass = !$isOpen ? 'disabled' : '';
?>

<?php if($page['IsRappiEnabled']): ?>
  <a 
    href="https://www.rappi.com.mx/restaurantes/1930172350" 
    target="_blank" 
    class="btn btn-primary btn-md btn-app-rappi menu-add-to-order mb-3 <?=$disabledClass?>"
  >
    <?=$page['OrderByRappiLabel']?>
  </a>

  <?php if($isOpen):?>
    <a 
      href="https://api.whatsapp.com/send?phone=52<?=$page['ContactPhone']?>&text=<?=$pizza['whatsappMessage']?>" 
      target="_blank" 
      class="btn-app-whatsapp-light menu-add-to-order"
    >
    <?=$page['OrderByWhatsappLabel']?>
    </a>
  <?php endif;?>
<?php else: ?> <!-- else -->
  <a 
    href="https://api.whatsapp.com/send?phone=52<?=$page['ContactPhone']?>&text=<?=$pizza['whatsappMessage']?>"
    target="_blank" 
    class="btn btn-primary btn-md btn-app-whatsapp menu-add-to-order mb-3 <?=$disabledClass?>"
  >
    <?=$page['OrderByWhatsappLabel']?>
  </a>

  <?php if($isOpen): ?>
    <div style="font-size: 13px; text-align: center;">
      <?=$page['OrCallLabel']?>
      <a href="tel:+52<?=$page['ContactPhone']?>" style="color: inherit; font-weight: 600;"><?=$page['ContactPhone']?></a>
    </div>
  <?php endif; ?>
<?php endif; ?>

<?php if(!$isOpen): ?>
  <div style="font-size: 12px; text-align: center;">
    <?php if($isClosedForced): ?>
      <?=$page['locale'] == 'es' ? 'Cerrado' : 'Closed';?>
    <?php else: ?>
      <?=$page['OpeningHoursLabel']?> 
      <div style="font-weight: 600; display: inline;">
        <?=$page['WorkingHoursStart']?> 
        <?=$page['ToLabel']?> 
        <?=$page['WorkingHoursEnd']?>
      </div>
    <?php endif;?>
  </div>
<?php endif;?>
