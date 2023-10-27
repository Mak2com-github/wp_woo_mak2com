<?php
/*
 * Menu part for WooCommerce things
 */
?>
<div>
    <a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Voir votre panier' ); ?>">
		<?php echo sprintf ( _n( '%d article', '%d articles', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?>
    </a>
</div>