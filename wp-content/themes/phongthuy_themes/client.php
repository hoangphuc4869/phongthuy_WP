<?php
/**
 * template name: client
 */
get_header();
 ?>
<div class="intro-wrap">
    <!-- <p><?php echo get_field('video-heading')['url'];?></p> -->
    <div class="video_heading">
        <video class="vid" width="100%" height="auto" autoplay loop muted>
            <source src="<?php echo get_field('video_heading')['url']; ?>" type="video/mp4">
        </video>
        <img src="<?php echo get_field('video_bg')?>" alt="" />
        <div class="video-heading-content container">
            <div class="video-heading-title"><?php echo get_field('video_heading_title'); ?></div>
            <div class="video-heading-text">
                <?php echo get_field('video_heading_text'); ?>
            </div>
        </div>
    </div>
    <div class="client">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <?php if(have_rows('client_says')): ?>
                <?php while(have_rows('client_says')): the_row(); ?>
                <div class="col-lg-6">
                    <div class="tes-img">
                        <img src="<?php echo get_sub_field('client-img')?>" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <i class="fas fa-quote-left quote-bf-name quote-client-cus"></i>
                    <div class="tes-name"><?php echo get_sub_field('client-name')?></div>
                    <div class="tes-review cli">
                        <?php echo get_sub_field('client-review')?>
                    </div>
                    <div class="read-more-btn">
                        <a href="#"><?php echo get_sub_field('read-more-text')?></a>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>