<?php
  
?>

<div class="progress mb-3 menu-separator d-none d-sm-block">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="mb-4 separator-order-btn"></div>

<div class="d-flex flex-column align-items-center justify-content-center">
  <div class="menu-item-price mb-3">
    $<?=$pizza['price']?> <span>MXN</span>
  </div>

  <?php include 'menuProductButtons.php'; ?>
</div>

<!-- 
<div class="row form-row menu-form-row">
  <div class="form-group col-md-4 col-12 menu-form-group">
    <label class="menu-option-label">Tamaño</label>
    <select class="form-select form-select-size">
      <option value="Mediana" selected>Mediana</value>
    </select>
  </div>

  <div class="form-group col-md-4 col-12 menu-form-group">
    <label class="menu-option-label" for="inputZip">Masa</label>
    <select class="form-select form-select-mass">
      <option value="Regular" selected>Regular</value>
      <option value="Integral">Integral</value>
    </select>
  </div>

  <div class="form-group col-md-4 menu-form-group">
    <label class="menu-option-label">Cantidad</label>
    <select class="form-select form-select-quantity">
      <option value="1" selected>1</value>
      <option value="2">2</value>
      <option value="3">3</value>
      <option value="4">4</value>
    </select>
  </div>
</div> 
-->