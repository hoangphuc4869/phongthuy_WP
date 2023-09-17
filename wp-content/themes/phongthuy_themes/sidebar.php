<div class="bg-sidebar">
	<h3>DANH MỤC SẢN PHẨM</h3>

	<?php wp_nav_menu (
	array('theme_location' => 'menu-3', 'menu_class' => 'menu-sidebar'));?>

	<h3>BÀI VIẾT MỚI</h3>

	<?php
		/*
		 * Code hiển thị bài viết liên quan trong cùng 1 category

		 */
		$categories = get_the_category(get_the_ID());
		if ($categories){
		    echo '<ul class="menu-sidebar">';
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		    $args=array(
		        'category__in' => $category_ids,
		        'post__not_in' => array(get_the_ID()),
		        'posts_per_page' => 5,
		        'order'        => 'date',
		        
		    );
		    $my_query = new wp_query($args);
		    if( $my_query->have_posts() ):
		       
		        while ($my_query->have_posts()):$my_query->the_post();
		            ?>

		            <li>
	            		<a href="<?php the_permalink() ?>">
		                    <?php the_title() ?>
		                </a>
		            </li>

		            <?php
		        endwhile;
		        echo '';
		    endif; wp_reset_query();
		    echo '</ul>';
		}
	?>
</div>	

