<?php
/**
 * Title: Product Hero
 * Slug: woocommerce-blocks/product-hero
 * Categories: WooCommerce
 */

$query = new \WC_Product_Query(
	array(
		'limit'  => 1,
		'return' => 'ids',
		'status' => array( 'publish' ),
	)
);

$products   = $query->get_products();
$product_id = $products ? $products[0] : null;
?>

<!-- wp:woocommerce/single-product {"productId":<?php echo esc_attr( $product_id ); ?>,"align":"wide"} -->
<div class="wp-block-woocommerce-single-product alignwide">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%">
			<!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfSingleProductBlock":true,"height":"300px"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:post-title {"textAlign":"","isLink":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

			<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductBlock":true} /-->

			<!-- wp:woocommerce/product-button -->
			<div class="wp-block-woocommerce-product-button is-loading"></div>
			<!-- /wp:woocommerce/product-button -->

			<!-- wp:post-excerpt {"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:woocommerce/single-product -->
