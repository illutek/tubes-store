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
                        <?php print (isset($uc_image_teaser) ? $uc_image_teaser : ''); ?>
                        <?php // print render($content['uc_product_image'][0]); ?>
                    </div>
                    <div class="body_teaser"><?php print $title; ?></div>
                    <?php
                    /**
                     *
                     */
                    // print (isset($uc_sellPrice) ? $uc_sellPrice : '');
                    $fieldUsedPrice = field_get_items('node', $node, 'field_secondhand_price');
                    if ($fieldUsedPrice) {
                        print render($content['field_secondhand_price']);
                    } else {
                        print t("Price on request");
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
                        <?php
                        print (isset($uc_image_teaser) ? $uc_image_teaser : '');
                        print (isset($uc_image) ? $uc_image : '');
                        ?>
                    </div>
                    <div class="col-md-8 product_info">
                        <div class="sku">
                            <?php print t("Tube: "); ?><?php print_r($model) ?>
                        </div>


                        <div class="sell-price">
                            <?php // print (isset($uc_sellPrice) ? $uc_sellPrice : ''); ?>
                            <div class="sell-price__price">
                                <?php
                                $fieldNewPrice = field_get_items('node', $node, 'field_new_price');
                                if ($fieldNewPrice) {
                                    print render($content['field_new_price']);
                                } else {
                                    print t("Price on request");
                                }
                                ?>
                            </div>
                            <?php
                            if ($fieldNewPrice) { ?>
                                <div class="sell-price__price">
                                    <?php print render($content['field_secondhand_price']); ?>
                                </div>
                            <?php } else {
                                print '';
                            } ?>


                        </div>

                        <?php print (isset($uc_body) ? $uc_body : ''); ?>
                        <div class="row">
                            <?php
                            include 'partials/more-info-btn.inc.php';
                            ?>
                        </div>
                        <?php
                        print
                            '<div class=\'stock\'>' .
                            render($content['field_custom_stock']) .
                            '</div>';
                        /**
                         * uc_addCart komt van template.php add_to_cart = quantity + btn to Cart
                         */
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