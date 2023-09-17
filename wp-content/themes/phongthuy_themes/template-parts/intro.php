<?php
/*

Template Name: Intro page

*/

get_header(); ?>

	<div class="block1">
		<?php $image = get_field('img-intro');

        if( !empty( $image ) ): ?>

            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <div class="container daivd-goh">
        	<div class="row">
        		<div class="col-lg-6 block1-info">
        			<h1 class="title-intro"><?php echo get_field('title-intro'); ?></h1>

        			<div class="block-des content-intro"><?php the_field('content-intro'); ?></div>
        		</div>

        		<div class="col-lg-6">
              		<div class="mobile-bg">
						<?php $image = get_field('img-intro-2');

				        if( !empty( $image ) ): ?>

				            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				        <?php endif; ?>
              		</div>
              	</div>
        	</div>
        </div>
	</div>


	<!-- INTRODUCTION -->

	<div class="block2">
		<div class="container block2">
			<div class="row">
				<div class="col-lg-6 block2-img">
					<?php $image = get_field('img-intro-3');

			        if( !empty( $image ) ): ?>

			            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			        <?php endif; ?>
				</div>


				<div class="col-lg-6 block2-content">
					<h2 class="block-title"><?php echo get_field('title-intro-2'); ?></h2>

					<?php the_field('content-intro-2'); ?>
				</div>
			</div>
		</div>
	</div>


	<!-- CREDENTIALS -->

	<div class="block1 b1-cus">
		<?php $image = get_field('img-intro-4');

        if( !empty( $image ) ): ?>

            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <div class="container daivd-goh">
        	<div class="row">
        		<div class="col-lg-6 block1-info">
        			<h2 class="block-title credentials"><?php echo get_field('title-intro-3'); ?></h2>

        			<div class="block-des"><?php the_field('content-intro-3'); ?></div>
        		</div>

        		<div class="col-lg-6">
              		<div class="mobile-bg">
						<?php $image = get_field('img-intro-5');

				        if( !empty( $image ) ): ?>

				            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				        <?php endif; ?>
              		</div>
              	</div>
        	</div>
        </div>
	</div>

	<?php $image = get_field('img-intro-6');

    if( !empty( $image ) ): ?>

        <img class="img-fluid w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

    <div class="container">
		<div class="industry">
			<h2 class="industry-heading"><?php echo get_field('title-intro-4'); ?></h2>

			<?php the_field('content-intro-4'); ?>
		</div>

		<?php $image = get_field('img-intro-7');

	    if( !empty( $image ) ): ?>

	        <img class="brand img-fluid position-relative" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	    <?php endif; ?>
    </div>

    <!-- -------------------------- -->

    <div class="container testimonial">
    	<div class="row justify-content-center align-items-center">
			<?php if( have_rows('list-intro') ): ?>
	            <?php while( have_rows('list-intro') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-6">
	                	<div class="tes-img">
	                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                	</div>
	                </div>

	                <div class="col-lg-6">
	                	<i class="fas fa-quote-left quote-bf-name"></i>

	                	<div class="tes-name"><?php echo get_sub_field('text'); ?></div>

	                	<div class="tes-review"><?php the_sub_field('content'); ?></div>
	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
    	</div>
    </div>


<?php get_footer(); ?>