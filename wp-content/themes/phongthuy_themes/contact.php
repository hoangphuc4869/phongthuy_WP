<?php
/**
 * template name: contact
 */
get_header();
 ?>
<div class="heading-bg overflow-hidden">
    <img src="<?php echo get_field('contact-heading-img');?>" alt="" />
    <div class="contact_title"><?php the_title();?></div>
</div>

<div class="contact-wrap overflow-hidden">
    <div class="container contact">
        <div class="row">
            <div class="col-lg-7 left" data-aos="slide-left">
                <div class="left-contact">
                    <p>
                        <?php echo get_field('slogan1');?>
                    </p>
                    <p><?php echo get_field('slogan2');?></p>
                    <div class="address">
                        <p><?php echo get_field('address-txt');?></p>

                        <ul>
                            <li>

                                <p>
                                    <?php echo get_field('address');?>
                                </p>
                            </li>
                            <li>
                                <span class="call">
                                    <a
                                        href="tel:<?php echo get_field('phone_number');?>"><strong><?php echo get_field('phone_number');?></strong></a>
                                </span>
                            </li>
                            <li>
                                <span class="mail">
                                    <a
                                        href="mailto: <?php echo get_field('email');?>"><strong><?php echo get_field('email');?></strong></a>
                                </span>
                            </li>
                            <li>
                                <span class="opening"><strong><?php echo get_field('opening');?></strong></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 right" data-aos="zoom-in">
                <div class="right-contact">
                    <?php echo do_shortcode('[contact-form-7 id="c53bfbe" title="contact"]');?>
                    <!-- <input type="text" class="form-control custom-form" name="name" id="name"
                        placeholder="Tên đầy đủ (*)" />
                    <input type="text" class="form-control custom-form" name="email" id="email"
                        placeholder="Email (*)" />
                    <input type="text" class="form-control custom-form" name="phone" id="phone"
                        placeholder="Số điện thoại (*)" />
                    <textarea name="message" id="message" class="form-control custom-form" rows="6"
                        placeholder="Nội dung (*)"></textarea>
                    <input type="submit" value="gửi thông tin" class="form-control submit-btn" />
                </div> -->
                </div>
            </div>
        </div>

        <div class="container branches">
            <div class="row">
                <?php if(have_rows('branches')): ?>
                <?php while(have_rows('branches')): the_row(); ?>
                <div class="col-lg-6 col-sm-6 d-flex flex-column" data-aos="zoom-out">
                    <div class="branch">
                        <div class="branch-img">
                            <a href="#"><img src="<?php echo get_sub_field('branch-img');?>" alt="" /></a>
                        </div>
                        <div class="branch-title">
                            <a href="3"><?php echo get_sub_field('branch-name');?></a>
                        </div>
                        <div class="branch-addr">
                            <a href="#"><?php echo get_sub_field('branch-address');?></a>
                        </div>
                        <div class="map">
                            <a href="#"><?php echo get_sub_field('txt');?>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </div>

    <?php get_footer() ?>