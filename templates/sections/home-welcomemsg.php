<?php $pods_settings = pods('website_settings'); ?>
<?php $content = get_page_by_path('welcome-content', OBJECT, 'page'); ?>
<section id="section-welcome">
    <div class="welcome_wrapper">
        <div class="welcome_container">
            <div class="row">
                <div class="col-md-4 col-12 hide_tab">
                    <div class="swiper mySwiper" data-aos="fade-left">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php $images = explode(" ", $pods_settings->display("welcome_images")); ?>
                            <?php foreach ($images as $image) { ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image; ?>"/>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <!-- If we need pagination -->
                        <div class="swiper-button-next swp_nav_btn"></div>
                        <div class="swiper-button-prev swp_nav_btn"></div>
                    </div>
                </div>
                <div class="col-md-8 col-12 width_tab_100">
                    <div class="pt-3 welcome_content_holder">

                        <h3 class="welcome_txt" data-aos="fade-down">WELCOME TO <span
                                    class="cmp_name"><?php echo strtoupper($pods_settings->display("company_name")); ?></span>
                        </h3>
                        <div class="welcome_dy_txt_holder" data-aos="fade-right">
                            <?php
                            $query = get_post($content->ID);
                            $content = apply_filters('the_content', $query->post_content);
                            echo $content;
                            ?>
                        </div>
                        <!--                        <img src="-->
                        <?php //echo get_template_directory_uri();?><!--/dist/img/logo-grayscale.png"/>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
