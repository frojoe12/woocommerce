<?php

// add to functions.php file in your plugin/theme/child theme

function CUSTOMPLUGINNAME_customise_product_thumbnail_for_product_list() {
    the_post_thumbnail();
} 
 
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
add_action('woocommerce_before_shop_loop_item_title',CUSTOMPLUGINNAME_customise_product_thumbnail_for_product_list',10);
