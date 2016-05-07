<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26/12/2015
 * Time: 14:40
 */
?>
<footer>
  <div class="container">
    <div class="col-md-12 footer-wrap">
      <div class="row">
        <div class="col-md-4">
          <h3>Contact information</h3>

          <p>Pannensman 23A<br>B-3530 Helchteren<br>Limburg Belgium<br> +32(0)476346326<br>Or<br>+32(0)11526034</p>
        </div>

        <div class="col-md-4">
          <h3>Customer Service</h3>

          <ul>
            <li><a href="<?php print base_path() ?>cookies">
                <?php print t("Cookies"); ?>
              </a>
            </li>

            <li><a href="<?php print base_path() ?>contact">
                <?php print t("Contact Us"); ?>
              </a>
            </li>

            <li><a href="<?php print base_path() ?>shipping-rates">
                <?php print t("Shipping rates"); ?>
              </a>
            </li>

          </ul>
        </div>

        <div class="col-md-4">
          <div class="logo">
            <h2 class="site_name">Tubes Electro</h2>
          </div>
          <?php print render($page['footer_third']); ?>
        </div>
      </div>

      <p>&copy; 2015 - <?php echo date("Y"); ?> Alcon NV. All rights reserved</p>
    </div>
  </div>
</footer>