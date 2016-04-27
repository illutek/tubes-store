<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 2/02/2016
 * Time: 10:49
 * Ubercart
 * Op het bootstrap menu navbar rechts wordt enkel voor een ingelogde user het cart (font-awesome) icon
 * met aantal items getoond
 */
?>
<ul class="nav navbar-nav navbar-right">
    <?php
    /**
     * controle user ingelogd
     */
    if ($user->uid != 0) {
        $items = uc_cart_get_contents();
        $total_qty = 0;

        foreach($items as $item){
            while(list($key,$value) = each($item)){
                if($key == 'qty')$qty = $value;
            }
            $total_qty += $qty;
        }
        /**
         * $total_qty = aantal items in cart
         */

        print '<li>' . '<a href=' . base_path() . 'cart>' . '<i class="fa fa-shopping-cart fa-lg"></i>' . $total_qty .'</a></li>';
    } else {
        /**
         * niet ingelogd print lege string
         */
        print '';
    } ?>
</ul>
