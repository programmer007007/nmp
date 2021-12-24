<?php $pods_settings = pods('website_settings'); ?>
<?php
$query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
));
if ($query->post_count) { ?>
    <section id="section-blogs"
             class="blogs <?php is_front_page() ? 'front_page_blog_holder' : 'list_blog' ?>">
        <h3 class="blogs"><span class="heading_bottom">BLOGS</span></h3>
        <div class="row my-4">
            <?php

            while ($query->have_posts()) {
                $query->the_post();
                $post_id = get_the_ID();
                get_template_part('templates/content/page', 'blog');
                //  $show_in_front_page = get_post_meta($post_id, "show_in_front_page");
//            if (isset($show_in_front_page[0]) && $show_in_front_page[0] == "1") {
//
//            }
            }

            wp_reset_query();
            ?>
        </div>
    </section>
<?php } ?>