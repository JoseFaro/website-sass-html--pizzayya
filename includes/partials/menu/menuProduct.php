<div class="col-lg-4 col-sm-6 col-12 mb-0 mb-sm-3">
  <div class="portfolio-item">
    <div href="#" class="portfolio-image mb-2">
      <img src="<?=$pizza['image']?>" alt="<?=$pizza['name']?>" class="rounded menu-img">
    </div>

    <div class="portfolio-desc pt-2">
      <h4 class="mb-3">
        <div class>
          <div class="text-uppercase menu-title"><?=$pizza['name']?></div>
        </div>
      </h4>

      <p class="menu-description mb-4">
        <?=$pizza['description']?>
      </p>

      <?php include dirname(__FILE__) . '/menuProductBottomBlock.php'; ?>      
    </div>
  </div>
</div>