<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 1/05/2016
 * Time: 20:11
 * Om het totaal aantal tubes te tonen haal dit getal bij de local versie
 * op het dashboard
 */
?>
<div class="block_btn_all_products">
  <a href="all-products">
    <div class="btn btn-cart">
      <div class="overview-title">
        <?php print t('An overview of all tubes'); ?>
      </div>
      <?php
      print render($content['field_total_tubes']);
      print t(' tubes in stock');
      ?>
    </div>
  </a>
</div>
