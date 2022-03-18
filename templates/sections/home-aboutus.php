<?php $pods_settings = pods('website_settings'); ?>
<section id="section-about-us" class="<?php echo is_front_page() ? 'front-page-about-us' : 'about-us-page' ?>">
    <?php if (is_front_page()) { ?>
        <h3 class="text-center about_us_heading"><span class="heading_bottom">About us</span></h3>
    <?php } ?>
    <?php $content = get_page_by_path('about-us', OBJECT, 'page'); ?>
    <div class="about_us_wrapper">
        <div class="about_us_container">
            <div class="row">
                <div class="col-md-8 col-12 width_tab_100">
                    <div class="pt-3 about_us_space">
                        <p>
                            <?php
                            $query = get_post($content->ID);
                            $content = apply_filters('the_content', $query->post_content);
                            if (is_front_page()) {
                                echo limitText($content, 1200, get_permalink($query->ID), true);
                            } else {
                                echo $content;
                            }
                            ?>
                        </p>
                        <!--                        <img src="-->
                        <?php //echo get_template_directory_uri();?><!--/dist/img/logo-grayscale.png"/>-->
                    </div>
                </div>
                <div class="col-md-4 col-12 hide_tab">
                    <div class=""><img
                                src="<?php echo get_template_directory_uri() . '/dist/img/business_person.png'; ?>"
                                class="img-responsive about_building"/>
                        <!--                        <img src="-->
                        <?php //echo get_template_directory_uri() . '/dist/img/person.webp'; ?><!--"-->
                        <!--                             class="img-responsive about_person"/>--></div>
                </div>
            </div>
        </div>
    </div>
</section>
