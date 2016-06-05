<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26/12/2015
 * Time: 14:00
 */

/**
 * variables aangemaakt op template.php newPrice, usedPrice en onRequest
 * Ook onderstaande verplaatst naar template.php
 * $fieldNewPrice = field_get_items('node', $node, 'field_new_price');
 * $fieldUsedPrice = field_get_items('node', $node, 'field_secondhand_price');
 */


if ($teaser): ?>
  <div class="product_wrapper_teaser">
    <div class="product_list">
      <a href="<?php print $node_url; ?>">
        <div class="item">
          <div class="teaser_prod_img">
            <?php print (isset($uc_image_teaser) ? $uc_image_teaser : ''); ?>
            <?php // print render($content['uc_product_image'][0]); ?>
          </div>
          <div class="body_teaser"><?php print $title; ?></div>
          <?php
          /**
           *
           */
          // print (isset($uc_sellPrice) ? $uc_sellPrice : '');


          if ($fieldNewPrice && $fieldUsedPrice) {
            print $newPrice;
            print $usedPrice;
          } elseif ($fieldNewPrice) {
            print $newPrice;
          } elseif ($fieldUsedPrice) {
            print $usedPrice;
          } else {
            print $onRequest;
          }

          /**
           * variables van template.php
           */
          print $details;
          ?>
        </div>
      </a>
      <?php
      /**
       * variables van template.php
       * add to cart buiten de a href anders is deze
       * gewoon een link naar de node van het product
       */
      if ($field_custom_stock[0]["value"] !== "0") {
        print $uc_addCart;
      } else {
        print $outOfStock;
      }
      ?>

    </div>
  </div>

<?php else: ?>
  <div class="product_list">
  <?php print render($title_prefix);
  if (!$page): ?>
    <h2 class="title" <?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif;
  print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <div class="product_wrapper">
      <?php
      /**
       * Als de checkbox Telefunken aangevinkt is dan de brand_message
       * niet tonen
       */
      if (!empty($content['field_telefunken']['#items'][0]['value']) == '1') {
        print ("");
      } else { ?>
        <div class="col-md-12 brand_message orderMessageBlock">
          <?php
          print t("Prices shown are for all models except for the following brands, Telefunken, Amperex,
                    Philips, Mullard, Birmar Tung-Sol and Osram. For these brands is the price on request.");
          ?>
        </div>
      <?php } ?>

      <div class="row">
        <div class="col-md-4 product_img">
          <?php
          print (isset($uc_image_teaser) ? $uc_image_teaser : '');
          print '<div class="img_teaser_wrap">' . (isset($uc_image) ? $uc_image : '') . '</div>';
          ?>
        </div>
        <div class="col-md-8 product_info">
          <div class="product_info__sku">
            <?php
            /**
             * Model van tube en merk (brand)
             */
            print t("Tube: "); ?><?php print_r($model);

            print '<span class="product_info__brand">' . render($content['field_tags']) . '</span>';

            print '</div>';
            ?>

            <div class="sell-price">
              <?php
              if ($fieldNewPrice && $fieldUsedPrice) {
                print $newPrice;
                print $usedPrice;
              } elseif ($fieldNewPrice) {
                print $newPrice;
              } elseif ($fieldUsedPrice) {
                print $usedPrice;
              } else {
                print $onRequest;
              } ?>
            </div>

            <?php print (isset($uc_body) ? $uc_body : ''); ?>
            <div class="row">
              <?php
              include 'partials/more-info-btn.inc.php';
              ?>
            </div>

            <?php

            /**
             * uc_addCart komt van template.php add_to_cart = quantity + btn to Cart
             */
            if ($field_custom_stock[0]["value"] !== "0") {

              print '<div class=\'stock\'>';
              print render($content['field_custom_stock']);

              global $user;
              if (in_array('administrator', array_values($user->roles))) {
                print render($content['field_brands_amount']);
              } else {
                print '';
              }
              print '</div>';

              print $uc_addCart;
            } else {
              print $outOfStock;
            }
            ?>

          </div>
        </div>
      </div>
    </div>
    <!-- end product_wrapper-->
  </div>
<?php endif; ?>