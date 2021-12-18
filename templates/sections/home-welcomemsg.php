<?php $pods_settings = pods('website_settings'); ?>
<section id="section-welcome">
    <div class="welcome_wrapper">
        <div class="welcome_container">
            <div class="row">
                <div class="col-md-4 col-12 hide_tab">
                    <div class="swiper mySwiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="http://atmiyaproperties.com/wp-content/uploads/2017/08/a1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="http://atmiyaproperties.com/wp-content/uploads/2017/08/a2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="http://atmiyaproperties.com/wp-content/uploads/2017/08/a3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="http://atmiyaproperties.com/wp-content/uploads/2017/08/a4.jpg" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <!-- If we need pagination -->
                        <div class="swiper-button-next swp_nav_btn"></div>
                        <div class="swiper-button-prev swp_nav_btn"></div>
                    </div>
                </div>
                <div class="col-md-8 col-12 width_tab_100">
                    <div class="pt-3 welcome_content_holder">
                        <h3 class="welcome_txt">WELCOME TO <span class="cmp_name"><?php echo strtoupper($pods_settings->display("company_name")); ?></span></h3>
                        <div class="welcome_dy_txt_holder">
                            <?php
                            $query = get_post($content->ID);
                            $content = apply_filters('the_content', $query->post_content);
                            if(is_front_page()) {
                                echo limitText($content, 1200, get_permalink($query->ID), true);
                            }else{
                                echo $content;
                            }
                            ?>
                        </div>
                        <!--                        <img src="--><?php //echo get_template_directory_uri();?><!--/dist/img/logo-grayscale.png"/>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>