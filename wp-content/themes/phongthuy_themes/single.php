<?php get_header(); ?>
<div class="heading-bg overflow-hidden">
    <img src="<?php echo get_field('service-heading-bg', 'option');?>" alt="" />
    <div class="contact_title">
        <!-- <?php the_title()?> -->
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




<!-- nội dung -->

<div class="container bg-single">
    <div class="row">




        <h3 class="title-single"><?php the_title(); ?></h3>

        <div class="content-single"><?php the_content(); ?></div>




    </div>
    <div class="share-btn">
        <div class="group-btn position-relative">
            <div class="share">
                <i class="fas fa-share-alt"></i>
                <span>CHIA SẺ</span>
                <div class="icons">
                    <a class="social-btn" id="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-btn" id="linkedIn" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-btn" id="print" target="_blank"><i class="fas fa-print"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container related-posts">
    <div class="rel-posts">liên quan</div>
    <div class="row">
        <?php
                    $categories = get_the_category($post->ID);
                    if ($categories) 
                    {
                        $category_ids = array();
                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                    
                        $args=array(
                        'category__in' => $category_ids,
                        'post__not_in' => array($post->ID),
                        'showposts'=>3, // Số bài viết bạn muốn hiển thị.
                        'caller_get_posts'=>1
                        );
                        $my_query = new wp_query($args);
                        if( $my_query->have_posts() ) 
                        {
                        while ($my_query->have_posts())
                        {
                            $my_query->the_post();
                ?>

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
        <?php
                        }
                        }
                    }
                ?>
    </div>

</div>


<?php get_footer(); ?>