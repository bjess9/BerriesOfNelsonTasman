<?php/** * Auction Payment Button for winner * */// Exit if accessed directlyif ( ! defined( 'ABSPATH' ) ) exit; global $woocommerce, $product, $post;if(!(method_exists( $product, 'get_type') && $product->get_type() == 'auction')){	return;}$user_id = get_current_user_id();$checkout_url = esc_attr(add_query_arg("pay-uwa-auction",$product->get_id(), woo_ua_auction_get_checkout_url()));if ( ($user_id == $product->get_woo_ua_auction_current_bider() && $product->get_woo_ua_auction_closed() == '2' && !$product->get_woo_ua_auction_payed() ) ) :?>    <p><?php _e('Congratulations! you have won this auction.', 'woo_ua') ?></p>        <p><a href="<?php echo $checkout_url; ?>" class="button alt">	<?php echo apply_filters('ultimate_woocommerce_auction_pay_now_button_text', __( 'Pay Now', 'woo_ua' ), $product); ?>	</a></p>   <?php endif; ?>