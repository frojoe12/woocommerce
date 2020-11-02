<?php
/*
    Description: alter the thumbnail image displayed on the product archive page
    -- woocommerce default is set to square shape, so handy if you need to maintain the original's aspect ratio
    
    Add below to functions.php file in your custom plugin/theme/child theme directory
    NB: CUSTOMPLUGINNAME should be changed to your own unique plugin/theme template name to prevent conflicts with other plugins or themes
*/    

function CUSTOMPLUGINNAME_customise_product_thumbnail_for_product_list() {
    the_post_thumbnail();
} 
 
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
add_action('woocommerce_before_shop_loop_item_title',CUSTOMPLUGINNAME_customise_product_thumbnail_for_product_list',10);
