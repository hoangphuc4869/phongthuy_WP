<?php get_header(); ?>


<div class="heading-bg overflow-hidden">
    <img src="<?php echo get_field('service-heading-bg', 'option');?>" alt="" />
    <div class="contact_title">
        <?php single_cat_title()?>
    </div>
</div>

<div class="container news-menu overflow-hidden">
    <div class="swiper swiper_freemode free-cus">
        <?php wp_nav_menu (
			    array(
                    'theme_location' => 'menu-4', 
                    'menu_class' => 'swiper-wrapper m-slide',
                    'add_li_class' => 'swiper-slide',
                    'container' => ''
        ));?>
    </div>
</div>


<div class="news-wrap ">
    <div class="container services">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>


            <div class="col-lg-4">
                <a href="<?php the_permalink(); ?>">
                    <div class="service-type">
                        <div class="s-t-img overflow-hidden">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100'))?>
                        </div>

                        <div class="s-t-title"><?php the_title(); ?></div>

                        <div class="s-t-des"><?php the_excerpt();?></div>
                    </div>
                </a>
            </div>

            <?php endwhile;?>
            <?php endif; ?>
        </div>
    </div>
</div>


<!-- phân trang -->

<?php if(paginate_links()!='') {?>
<div class="pagination">
    <?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('<i class="far fa-angle-left"></i>'),
							'next_text'    => __('<i class="far fa-angle-right"></i>'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
							) );
					    ?>
</div>
<?php } ?>

<?php get_footer(); ?>