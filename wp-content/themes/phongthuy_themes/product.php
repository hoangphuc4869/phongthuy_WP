<?php 
/**
 * template name: products
 */
get_header();
?>
<div class="content">
    <div class="heading-bg overflow-hidden">
        <img src="<?php echo get_field('product-heading-img');?>" alt="" />
        <div class="contact_title"><?php the_title();?></div>
    </div>

    <div class="container products-section">
        <div class="product-des">
            <?php echo get_field('product-des')?>
        </div>

        <?php 
        if(have_rows('product-category')): 
        while(have_rows('product-category')): the_row(); ?>

        <div class="row">
            <?php 
             $listProduct = get_sub_field('category-name');        
            $args = array(	
                'post_status' => 'publish',
                'post_type' => 'product',
                'posts_per_page' => 4,
                'product_cat' => $listProduct[0]->slug,
                'orderby' => 'post_date',
                'order' => 'date',
            );?>
            <div class="col-12 news_title all-pro">
                <p><?php echo $listProduct[0]->name?></p>
                <span class="more-news">
                    <a href="<?php echo get_sub_field('link')?>">xem tất cả sản phẩm</a>
                </span>
            </div>
            <?php
            $getposts = new WP_Query($args);
            if ($getposts->have_posts()) {
            while ($getposts->have_posts()) : $getposts->the_post();
                global $product;
                $product = wc_get_product(get_the_ID()); 

                $price = $product->get_regular_price(); 
                $price_sale = $product->get_sale_price(); 
                ?>
            <div class="col-lg-3">
                <div class="productt d-flex flex-column justify-content-center align-items-center">
                    <div class="prod-img">
                        <a href="<?php the_permalink()?>"><?php echo $product->get_image(); ?></a>
                    </div>
                    <div class=" prod-name">
                        <a href="<?php the_permalink()?>"><?php echo get_the_title(); ?></a>
                    </div>

                    <div class="prod-price">
                        <?php if ($price_sale !== '' && $price_sale !== false) { ?>
                        <del><?php echo wc_price($price); ?></del> <br>
                        <div class="sale-price"><?php echo wc_price($price_sale); ?></div>
                        <?php } else {
                                echo wc_price($price);
                            } ?>
                    </div>
                    <?php
                            if ($product->is_purchasable()) {
                                $add_to_cart_url = esc_url($product->add_to_cart_url());                            
                                $add_to_cart_text = esc_html($product->add_to_cart_text());
                                echo '<a href="' . $add_to_cart_url . '" class="button add-to-cart-button">' . $add_to_cart_text . '</a>';
                                echo '<a href="' . esc_url(wc_get_cart_url()) . '" class="view-cart-btn">Xem giỏ hàng</a>';
                            } else {                     
                                echo 'Sản phẩm đã hết hàng';
                            }
                            ?>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php } ?>
        </div>
        <?php endwhile; endif;?>
    </div>
</div>
<?php get_footer()?>