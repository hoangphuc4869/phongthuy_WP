	<div class="bg-footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-3 col-md-6 col-12">
	                <?php $image = get_field('logo', 'option');

			        if( !empty( $image ) ): ?>

	                <a href="<?php echo home_url(); ?>">
	                    <img class="img_logo" src="<?php echo esc_url($image['url']); ?>"
	                        alt="<?php echo esc_attr($image['alt']); ?>" />
	                </a>

	                <?php endif; ?>

	                <div class="text-footer"><?php the_field('intro-company', 'option'); ?></div>
	            </div>

	            <div class="col-lg-3 col-md-6 col-12">
	                <?php wp_nav_menu (
			    	array('theme_location' => 'menu-2', 'menu_class' => 'menu-footer'));?>
	            </div>

	            <div class="col-lg-3 col-md-6 col-12">
	                <?php wp_nav_menu (
			    	array('theme_location' => 'menu-3', 'menu_class' => 'menu-footer'));?>
	            </div>

	            <div class="col-lg-3 col-md-6 col-12">
	                <h3 class="contact-footer"><?php echo get_field('contact-footer', 'option'); ?></h3>

	                <ul class="list-contact-footer">
	                    <?php if( have_rows('list-contact-footer', 'option') ): ?>
	                    <?php while( have_rows('list-contact-footer', 'option') ): the_row(); ?>

	                    <li>
	                        <a href="<?php echo get_sub_field('link'); ?>">
	                            <?php echo get_sub_field('icon'); ?>
	                        </a>
	                    </li>

	                    <?php endwhile; ?>
	                    <?php endif; ?>
	                </ul>
	            </div>
	        </div>
	    </div>
	</div>


	<a class="back-top" href="#"><i class="fal fa-long-arrow-up"></i></a>

	<?php wp_footer() ?>
	<!-- Thư Viện jquery -->
	<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

	<!-- bootstrap -->
	<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

	<!-- Thư Viện carousel js -->
	<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

	<!-- library animation js -->
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


	<!-- My Js -->

	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/app.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


	</body>

	</html>