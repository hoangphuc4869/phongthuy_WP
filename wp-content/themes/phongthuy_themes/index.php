<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<div class="container mr-top">
		<div class="row">
			<div class="col-lg-5 col-12">
				<?php echo do_shortcode( '[my_calendar]' ); ?>
			</div>

			<div class="col-lg-7 col-12">
				<div class="bg-clear">
					<div class="owl-carousel owl-theme carousel_1">
						<?php if( have_rows('slide-banner') ): ?>
				            <?php while( have_rows('slide-banner') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>

				                <div class="item">
				                	<a href="<?php echo get_sub_field('link'); ?>">
				                		<img class="item-banner" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
				                	</a>
				                </div>

				            <?php endwhile; ?>
				    	<?php endif; ?>
				    </div>

				    <div class="row">

			    		<?php if( have_rows('list-banner') ): ?>
				            <?php while( have_rows('list-banner') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; 
				                ?>

				                <div class="col-lg-4 col-md-6 col-6">
				                	<a class="list-banner" href="<?php echo get_sub_field('link'); ?>">
				                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
				                	</a>
				                </div>

				            <?php endwhile; ?>
				    	<?php endif; ?>

				    </div>
				</div>
			</div>
		</div>
	</div>

	<!-- Prospering Every Generation -->

	<div class="container mr-top">
		<div class="prospering">
			<div class="prospering-title">
				<p><?php echo get_field('title-intro'); ?></p>

				<p><?php echo get_field('text-intro'); ?></p>
			</div>

			<div class="prospering-text"><?php the_field('content-intro'); ?></div>

			<div class="prospering-btns d-flex flex-wrap gap-3">
				<?php if( have_rows('button-intro') ): ?>
		            <?php while( have_rows('button-intro') ): the_row(); ?>

	                	<a href="<?php echo get_sub_field('link'); ?>">
	                		<?php echo get_sub_field('text'); ?>
	                	</a>

		            <?php endwhile; ?>
		    	<?php endif; ?>
			</div>
		</div>
	</div>


	<!-- Master David Goh -->

	<div class="block1 block1-home">
		<?php $image = get_field('img-home');

        if( !empty( $image ) ): ?>

            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <!-- ------------------ -->

        <div class="container daivd-goh">
         	<div class="row">
         		<div class="col-lg-6 block1-info david-home">
         			<div class="david-group">
         				<p><?php echo get_field('text-home'); ?></p>

                		<h1 class="name"><?php echo get_field('title-home'); ?></h1>
         			</div>

         			<div class="block-des"><?php the_field('content-home'); ?></div>

         			<div class="read-master-david">
						<a href="<?php echo get_field('link-content-home'); ?>">
							<?php echo get_field('text-link-home'); ?>
						</a>
         			</div>
         		</div>

         		<div class="col-lg-6">
         			<div class="mobile-bg">
						<?php $image = get_field('img-home-2');

				        if( !empty( $image ) ): ?>

				            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				        <?php endif; ?>
		            </div>
         		</div>
         	</div>
        </div>
	</div>


	<!-- Understanding Imperial Feng Shui -->

	<div class="understanding container">
        <div class="row justify-content-center align-items-center">
          	<div class="col-lg-6 left-understanding">
          		<h2 class="understanding-title"><?php echo get_field('title-home-2'); ?></h2>

          		<div class="understanding-text"><?php the_field('content-home-2'); ?></div>

          		<div class="prospering-btns justify-content-start flex-wrap gap-3">
					<?php if( have_rows('button-intro-2') ): ?>
			            <?php while( have_rows('button-intro-2') ): the_row(); ?>

		                	<a href="<?php echo get_sub_field('link'); ?>">
		                		<?php echo get_sub_field('text'); ?>
		                	</a>

			            <?php endwhile; ?>
			    	<?php endif; ?>
				</div>
          	</div>


          	<div class="col-lg-6 right-understanding">
				<?php $image = get_field('img-home-3');

		        if( !empty( $image ) ): ?>

		            <img class="img-fluid w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

		        <?php endif; ?>
          	</div>
        </div>
    </div>


    <!-- Thrive with Imperial Feng Shui in Singapore. -->

    <div class="collection container">
    	<p><?php echo get_field('title-home-3'); ?></p>

    	<p><?php echo get_field('text-home-2'); ?></p>

    	<div class="row">
			<?php if( have_rows('list-collection') ): ?>
	            <?php while( have_rows('list-collection') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-md-6">

	                	<div class="collection-item text-center">
		                	<a href="<?php echo get_sub_field('link'); ?>">
		                		<img class="img-fluid w-100" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                	</a>

		                	<h3 class="collection-name"><?php echo get_sub_field('title'); ?></h3>

		                	<div class="collection-des"><?php echo get_sub_field('text'); ?></div>

						    <div class="browse-btn">
				                <a href="<?php echo get_sub_field('link'); ?>">
				                	<?php echo get_sub_field('button'); ?>
				                </a>
				            </div>
		                </div>

	                </div>

	            <?php endwhile; ?>
	    	<?php endif; ?>
    	</div>
    </div>


    <!-- list clients -->

   	<div class="container">
        <div class="stories-slider swiper storiesSlider position-relative">

          	<div class="swiper-wrapper">
				<?php if( have_rows('list-clients') ): ?>
		            <?php while( have_rows('list-clients') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="swiper-slide d-flex flex-wrap">
		                	<div class="col-md-6">
                				<div class="tes-img d-flex justify-content-center align-items-center">
                					<img class="img-fluid w-75" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                				</div>
		                	</div>


		                	<div class="col-md-6">
		                		<i class="fas fa-quote-left quote-bf-name quote-client-cus"></i>

		                		<div class="tes-name"><?php echo get_sub_field('title'); ?></div>

		                		<div class="tes-review cli"><?php the_sub_field('content'); ?></div>

		                		<div class="read-more-btn">
				                  	<a href="<?php echo get_sub_field('link'); ?>">
				                  		<?php echo get_sub_field('button'); ?>
				                  	</a>
				                </div>
		                	</div>
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
          	</div>


          	<!-- arrow -->

          	<div class="stories-nav-btn d-flex gap-2">
	            <div class="swiper-button-prev-stories">
	              	<i class="far fa-angle-left"></i>
	            </div>

	            <div class="swiper-button-next-stories">
	              	<i class="far fa-angle-right"></i>
	            </div>
	        </div>
        </div>
    </div>


    <!-- Discover the Bliss of Harvest collection -->

    <div class="discover">
		<?php $image = get_field('img-discover');

        if( !empty( $image ) ): ?>

            <img class="img-fluid w-100 dis-web" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <?php $image = get_field('img-discover-2');

        if( !empty( $image ) ): ?>

            <img class="img-fluid w-100 dis-mobile" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>

        <div class="container">
        	<div class="discover-block">
        		<h2 class="dis-title"><?php echo get_field('title-discover'); ?></h2>

        		<div class="dis-text"><?php the_field('content-discover'); ?></div>

        		<div class="browse-btn">
					<a href="<?php echo get_field('link-discover-collection'); ?>">
						<?php echo get_field('discover-collection'); ?>
					</a>
         		</div>
        	</div>
        </div>
    </div>

    <!-- Latest Articles -->

    <div class="container">
    	<h1 class="article-heading"><?php echo get_field('title-home-4'); ?></h1>

    	<div class="articles swiper artSlider position-relative">
    		<div class="swiper-wrapper">
				<?php if( have_rows('latest-articles') ): ?>
		            <?php while( have_rows('latest-articles') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                ?>

		                <div class="article swiper-slide d-flex align-items-center">
		                	<div class="col-sm-7">
                				<div class="left-art">
                					<a href="<?php echo get_sub_field('link'); ?>">
                						<img class="img-fluid w-100 article-img" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                					</a>
                				</div>
		                	</div>


		                	<div class="col-sm-5">
		                		<div class="right-art">
		                			<h3 class="article-name"><?php echo get_sub_field('title'); ?></h3>

			                		<div class="article-text"><?php the_sub_field('content'); ?></div>

			                		<div class="read-more-btn">
					                  	<a href="<?php echo get_sub_field('link'); ?>">
					                  		<?php echo get_sub_field('button'); ?>
					                  	</a>
					                </div>
					            </div>
		                	</div>
		                </div>

		            <?php endwhile; ?>
		    	<?php endif; ?>
    		</div>

    		<div class="swiper-pagination-art"></div>
    	</div>
    </div>


    <!-- Sign Up -->

    <div class="sign-up container">
    	<h3 class="f-c-title"><?php echo get_field('title-home-5'); ?></h3>

    	<div class="free-consult"><?php the_field('content-home-3'); ?></div>
    </div>


    <!-- Frequently Asked Questions -->

    <div class="FAQs container mr-bottom">
    	<h2 class="FAQ-title"><?php echo get_field('title-home-6'); ?></h2>

		<?php if( have_rows('content-home-4') ): ?>
            <?php while( have_rows('content-home-4') ): the_row(); ?>

            	<div class="FAQ">
            		<div class="free-consult"><?php the_sub_field('content'); ?></div>
            	</div>

            <?php endwhile; ?>
    	<?php endif; ?>
    </div>


<?php get_footer(); ?>