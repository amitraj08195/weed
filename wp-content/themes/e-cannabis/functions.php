<?php
/**
 * Created by PhpStorm.
 * User: amit raj
 * Date: 12-Nov-18
 * Time: 11:45 AM
 */

function wpmu_list_sites() {

	$subsites = get_sites();

	if ( ! empty ( $subsites ) ) {

		echo '<ul class="subsites">';

		foreach( $subsites as $subsite ) {

			$subsite_id = get_object_vars( $subsite )["blog_id"];
			$subsite_name = get_blog_details( $subsite_id )->blogname;
			$subsite_link = get_blog_details( $subsite_id )->siteurl;
			echo '<li class="site-' . $subsite_id . '"><a href="' . $subsite_link . '">' . $subsite_name . '</a></li>';

		}

		echo '</ul>';

	}

}
add_action( 'wpmu_before_header', 'wpmu_list_sites' );



add_theme_support( 'woocommerce' );



// removing the price of variable products
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

// Change location of
add_action( 'woocommerce_single_product_summary', 'custom_wc_template_single_price', 10 );
function custom_wc_template_single_price(){
	global $product;

	// Variable product only
	if($product->is_type('variable')):

		// Main Price
		$prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
		$price = $prices[0] !== $prices[1] ? sprintf( __( 'From: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

		// Sale Price
		$prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
		sort( $prices );
		$saleprice = $prices[0] !== $prices[1] ? sprintf( __( 'From: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

		if ( $price !== $saleprice && $product->is_on_sale() ) {
			$price = '<del>' . $saleprice . $product->get_price_suffix() . '</del> <ins>' . $price . $product->get_price_suffix() . '</ins>';
		}

		?>
		<style>
			div.woocommerce-variation-price,
			div.woocommerce-variation-availability,
			div.hidden-variable-price {
				height: 0px !important;
				overflow:hidden;
				position:relative;
				line-height: 0px !important;
				font-size: 0% !important;
				visibility: hidden !important;
			}
		</style>
		<script>
            jQuery(document).ready(function($) {
                // When variable price is selected by default
                setTimeout( function(){
                    if( 0 < $('input.variation_id').val() && null != $('input.variation_id').val() ){
                        if($('p.availability'))
                            $('p.availability').remove();

                        $('p.price').html($('div.woocommerce-variation-price > span.price').html()).append('<p class="availability">'+$('div.woocommerce-variation-availability').html()+'</p>');
                        console.log($('div.woocommerce-variation-availability').html());
                    }
                }, 300 );

                // On live variation selection
                $('select').blur( function(){
                    if( 0 < $('input.variation_id').val() && null != $('input.variation_id').val() ){
                        if($('.price p.availability') || $('.price p.stock') )
                            $('p.price p').each(function() {
                                $(this).remove();
                            });

                        $('p.price').html($('div.woocommerce-variation-price > span.price').html()).append('<p class="availability">'+$('div.woocommerce-variation-availability').html()+'</p>');
                        console.log($('input.variation_id').val());
                    } else {
                        $('p.price').html($('div.hidden-variable-price').html());
                        if($('p.availability'))
                            $('p.availability').remove();
                        console.log('NULL');
                    }
                });
            });
		</script>
		<?php

		echo '<p class="price">'.$price.'</p>
        <div class="hidden-variable-price" >'.$price.'</div>';

	endif;
}

/** to change the position of excerpt **/
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 31 );




/**
 * Change the checkout city field to a dropdown field.
 */
function jeroen_sormani_change_city_to_dropdown( $fields ) {
	$city_args = wp_parse_args( array(
		'type' => 'select',
		'options' => array(
			'lakeport' => 'Lakeport',
			'novato' => 'Novato',
			'walnut-creek'  => 'Walnut Creek',
			'sant-rosa'   => 'Sant Rosa',

		),
	), $fields['shipping']['shipping_city'] );
	$fields['shipping']['shipping_city'] = $city_args;
	$fields['billing']['billing_city'] = $city_args; // Also change for billing field
	return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'jeroen_sormani_change_city_to_dropdown' );


/**
 * Sell only in specific states
 * Remove the states not eligible to purchase
 * Final list is of states that CAN purchase
 */
add_filter( 'woocommerce_states', 'wc_sell_only_states' );
function wc_sell_only_states( $states ) {

	$states['US'] = array('CA' => __( 'California', 'woocommerce' ),);

	return $states;

}


function custom_shop_page_redirect() {
	if( is_shop() ){
		wp_redirect( home_url( '/category1/' ) );
		exit();
	}
}
add_action( 'template_redirect', 'custom_shop_page_redirect' );