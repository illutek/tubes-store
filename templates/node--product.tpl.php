<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26/12/2015
 * Time: 14:00
 */
if ($teaser): ?>

    <div class="product_wrapper_teaser">
        <div class="product_list">
            <a href="<?php print $node_url; ?>">
                <div class="item">
                    <div class="teaser_prod_img">
                        <?php print (isset($uc_image) ? $uc_image : ''); ?>
                    </div>
                    <div class="body_teaser"><?php print $title; ?></div>
                    <?php
                    /**
                     *
                     */
                    print (isset($uc_sellPrice) ? $uc_sellPrice : '');
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
            print $uc_addCart;
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
                <div class="row">
                    <div class="col-md-4 product_img">
                        <?php print (isset($uc_image) ? $uc_image : ''); ?>
                        <div class="logo-product">
                            <img src="<?php print base_path() . path_to_theme(); ?>/images/logo_products-min.png">
                        </div>
                    </div>
                    <div class="col-md-8 product_info">
                        <div class="sku">
                            <?php print t("Item number:"); ?><?php print_r($model) ?>
                        </div>


                        <div class="sell-price">
                            <?php print (isset($uc_sellPrice) ? $uc_sellPrice : ''); ?>
                        </div>

                        <?php print (isset($uc_body) ? $uc_body : ''); ?>
                        <div class="row">
                            <?php
                            /**
                             * Als voorlopige oplossing om de sets te tonen via een button
                             * sets-button.inc.php
                             * Btn link naar more info form in dit geval naar node/6
                             */
                            include 'partials/sets-button.inc.php';
                            include 'partials/more-info-btn.inc.php';
                            ?>
                        </div>
                        <?php
                        print $uc_addCart;
                        ?>
                        <div class="message-registered">
                            <p><i class="fa fa-user"></i>
                                <?php print t("Only a registered user can place an order."); ?>
                            </p>

                            <p><a href="<?php print base_path() ?>/user/register">
                                    <?php print t("Register"); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product_wrapper-->
    </div>
<?php endif; ?>