<?php $pods_settings = pods('website_settings'); ?>
<?php
$query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
));
if ($query->post_count) { ?>
    <div class="light_bg blog_lbg">
        <section id="section-blogs"
                 class="blogs <?php echo is_front_page() ? 'front_page_blog_holder' : 'list_blog' ?>">
            <h3 class="blogs text-center"><span class="heading_bottom">BLOGS</span></h3>
            <?php if ($pods_settings->display("blog_text")) { ?>
                <div class="sub_text_holder"><?php echo $pods_settings->display("blog_text"); ?></div>
            <?php } ?>
            <div class="img_slider_holder my-4">
                <i class="fa fa-angle-right right_arrow" aria-hidden="true"></i>
                <div class="swiper_blog">
                    <div class="swiper-wrapper">
                        <?php

                        while ($query->have_posts()) {
                            $query->the_post();
                            $post_id = get_the_ID(); ?>
                            <div class="swiper-slide" data-swiper-autoplay="5000">
                                <?php
                                get_template_part('templates/content/page', 'blog');
                                ?>
                            </div>
                            <?php
                            //  $show_in_front_page = get_post_meta($post_id, "show_in_front_page");
//            if (isset($show_in_front_page[0]) && $show_in_front_page[0] == "1") {
//
//            }
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } ?>
