<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (is_front_page()) : ?>
        <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory') ?>/vendor/FontAwesome.Pro.5.15.2.Web/css/all.css">

    <!-- carousel -->
    <link rel="stylesheet"
        href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

    <!-- font chữ -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;800&display=swap" rel="stylesheet" />

    <!-- ------------------------------------- -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- library animation -->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">
    <link rel="shortcut icon" type="image/png" type="text/css"
        href="<?php bloginfo('template_directory') ?>/images/logo-2.ico">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom-2.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

    <?php wp_head() ?>
</head>

<body>


    <!-- menu pc -->

    <div class="header-pc display-pc">
        <div class="container">
            <div class="bg-menu-pc">
                <?php $image = get_field('logo', 'option');

		        if( !empty( $image ) ): ?>

                <a href="<?php echo home_url(); ?>">
                    <img class="img_logo" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>

                <?php endif; ?>


                <?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

                <ul class="menu-icon">
                    <li>
                        <?php global $woocommerce; ?>
                        <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>"
                            title="<?php _e( 'Giỏ hàng ' ); ?>">
                            <span class="icon-cart"><i class="fal fa-shopping-cart"></i></span>

                            <span class="quantity-home">(
                                <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
                                )
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- menu mobile -->

    <div class="header-pc display-mobile">
        <div class="container">
            <div class="bg-menu-pc">
                <?php $image = get_field('logo', 'option');

		        if( !empty( $image ) ): ?>

                <a href="<?php echo home_url(); ?>">
                    <img class="img_logo" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>

                <?php endif; ?>

                <ul class="menu-icon">
                    <li>
                        <?php global $woocommerce; ?>
                        <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>"
                            title="<?php _e( 'Giỏ hàng ' ); ?>">
                            <span class="icon-cart"><i class="fal fa-shopping-cart"></i></span>

                            <span class="quantity-home">(
                                <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
                                )
                            </span>
                        </a>
                    </li>

                    <li class="icon-bar"><i class="far fa-bars"></i></li>
                </ul>
            </div>
        </div>

        <!-- ------------------ -->

        <div class="bg-menu-mobile">
            <?php wp_nav_menu (
		    array(
                'theme_location' => 'menu-1',
             'menu_class' => 'menu-mobile',
             'add_li_class' => 'menu-mobile-item',

             ));?>
        </div>
    </div>