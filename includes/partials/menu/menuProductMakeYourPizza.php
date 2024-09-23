<?php 
  $isBuildYourPizza = $pizza['id'] === 1;
?>

<div class="bg-pizza-image d-flex align-items-center" style="background-image: url('../images/pizzas/hawaiana-mexicana.jpg');">
  <div class="container">
      <div class="col-12">  
        <div class="portfolio-item">
          <div class="d-flex align-items-center" style="height: 100%">
            <div class="col-7 d-none d-md-block"></div>
      
            <div class="col-10 offset-1 offset-sm-0 col-sm-8 col-md-5">
              <div class="portfolio-desc pizza-description-2 rounded p-4 px-4 px-lg-5">
                <h4 class="mb-3">
                  <div class>
                    <div class="text-uppercase menu-title"><?=$pizza['name']?></div>
                  </div>
                </h4>
          
                <p class="menu-description-2 mb-0 pb-4">
                  <?=$pizza['description']?>
                </p>
          
                <?php if($isBuildYourPizza):?>
                  <ul class="app-list">
                    <?php foreach($page['BuildYourPizzaIngredients'] as $ingredient): ?>
                      <li><?=$ingredient['IngredientName']?></li>
                    <?php endforeach;?>
                  </ul>
                <?php endif;?>
                
                <?php include dirname(__FILE__) . '/menuProductBottomBlock.php'; ?>   
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>