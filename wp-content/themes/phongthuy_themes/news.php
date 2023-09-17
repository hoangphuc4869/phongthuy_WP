<?php /**
 * template name: news
 */
get_header();
?>

<div class="news-wrap custom-wrap">
    <!-- <div class="news_heading news-custom">tin tức sự kiện</div> -->
    <div class="heading-bg overflow-hidden">
        <img src="<?php echo get_field('news-heading-img');?>" alt="" />
        <div class="contact_title"><?php echo get_cat_name( $category_id = 2 );?></div>
    </div>
    <div class="container news-con">
        <div class="row">
            <div class="col-12 news_title">
                <p><?php echo get_field('news-txt')?></p>
            </div>
        </div>

        <div class="row news-container">
            <?php
                $listNews = get_field('list-news');
                
                

                $args = array(	
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'cat' => $listNews,
                    'orderby' => 'post_date',
                    'order' => 'date',
                );
			?>
            <?php $getposts = new WP_query($args); ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

            <div class="col-lg-6">
                <div class="left-news">
                    <a href="<?php the_permalink(); ?>" class="news-img">
                        <?php the_post_thumbnail('full',array('class'=>'img-fluid')); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>" class="news-title">
                        <p><?php the_title(); ?></p>
                    </a>
                    <p class="more">
                        <a href="<?php the_permalink(); ?>">xem thêm <span></span> </a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-between flex-column">
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

                <div class="row right-item">
                    <div class="col-4 p-0">
                        <div class="right-item-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full', array('class'=>'img-fluid')); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 h-100">
                        <div class="right-item-content d-flex flex-column justify-content-between">
                            <a href="<?php the_permalink(); ?>">
                                <div class="r-i-title">
                                    <?php the_title(); ?>
                                </div>
                            </a>
                            <p class="more">
                                <a href="<?php the_permalink(); ?>">xem thêm <span></span> </a>
                            </p>
                        </div>
                    </div>
                </div>

                <?php
                        }
                        }
                    }
                ?>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="more-news">
        <a href="<?php echo get_field('news-link')?>">xem thêm tin</a>
    </div>

    <div class="news-wrap-block2">
        <div class="container event">
            <div class="row">
                <div class="col-12 news_title">
                    <p><?php echo get_field('event-txt')?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 eve-wrap">
                    <div class="swiper mySwiper swiper-custom">
                        <div class="swiper-wrapper">
                            <?php
                            $listNews = get_field('list-event');

                            $args = array(	
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'posts_per_page' => '4',
                                'cat' => $listNews,
                                'orderby' => 'post_date',
                                'order' => 'date',
                                
                            );
                        ?>
                            <?php $getposts = new WP_query($args); ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <div class="swiper-slide">
                                <a href="<?php the_permalink()?>">
                                    <div class="event-item">
                                        <div class="event-img">
                                            <?php the_post_thumbnail('full'); ?>

                                        </div>
                                        <div class="event-content">
                                            <div class="event-title">
                                                <p><?php the_title()?></p>
                                            </div>
                                            <p class="more">
                                                <a href="<?php the_permalink()?>">xem thêm <span></span> </a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="fal fa-long-arrow-left"></i></i></div>
                </div>

            </div>
        </div>
    </div>
    <div class="more-news">
        <a href="<?php echo get_field('event-link')?>">xem thêm tin</a>
    </div>

    <div class="news-wrap-block2">
        <div class="container event">
            <div class="row">
                <div class="col-12 news_title">
                    <p><?php echo get_field('service-txt')?></p>
                </div>
            </div>
            <div class="row">

                <?php
                            $listNews = get_field('list-service');

                            $args = array(	
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'posts_per_page' => '2',
                                'cat' => $listNews,
                                'orderby' => 'post_date',
                                'order' => 'date',
                                
                            );
                        ?>
                <?php $getposts = new WP_query($args); ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="col-md-6">
                    <div class="story-item">
                        <div class="story-img">
                            <a
                                href="<?php the_permalink()?>"><?php the_post_thumbnail('full', array('class' => 'img-fluid'))?></a>
                            <div class="story-content">
                                <div class="story-title">
                                    <?php the_title()?>
                                </div>
                                <p class="more">
                                    <a href="#">xem thêm <span></span> </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="more-news">
                <a href="<?php echo get_field('service-link')?>">xem thêm tin</a>
            </div>
        </div>

        <div class="news-wrap-block2 mr-bottom">
            <div class="container event">
                <div class="row">
                    <div class="col-12 news_title">
                        <p><?php echo get_field('project-txt')?></p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 eve-wrap">
                        <div class="swiper mySwiper swiper-custom">
                            <div class="swiper-wrapper">
                                <?php
                            $listNews = get_field('list-project');

                            $args = array(	
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'posts_per_page' => '4',
                                'cat' => $listNews,
                                'orderby' => 'post_date',
                                'order' => 'date',
                                
                            );
                        ?>
                                <?php $getposts = new WP_query($args); ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <a href="<?php the_permalink()?>">
                                    <div class="swiper-slide">
                                        <div class="event-item">
                                            <div class="event-img">
                                                <?php the_post_thumbnail()?>
                                            </div>
                                            <div class="event-content project-custom">
                                                <!-- <div class="project-text">
                                                    <p><?php echo get_field('project-txt')?></p>
                                                </div> -->
                                                <div class="event-title event-title2">

                                                    <p><?php the_title()?></p>
                                                </div>
                                                <p class="more">
                                                    <a href="#">xem thêm <span></span> </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <?php endwhile; wp_reset_postdata(); ?>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                        <div class="swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                        <div class="swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                    </div>
                </div>
                <div class="more-news">
                    <a href="<?php echo get_field('project-link')?>">xem thêm tin</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>