<?php $pods_settings = pods('website_settings'); ?>
<section id="section-properties" class="properties <?php is_front_page() ? 'front_page_property' : 'list_properties' ?>"
         >
    <h3 class="properties"><span class="heading_bottom" data-aos="fade-down">LATEST LAUNCHES</span></h3>
    <div class="row m-0 my-4" data-aos="fade-up">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'project',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        ));

        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $show_in_front_page = get_post_meta($post_id, "show_in_front_page");
            $simple=true;
            if (isset($show_in_front_page[0]) && $show_in_front_page[0] == "1") {
                get_template_part('templates/content/page', 'single-project');
            }
        }

        wp_reset_query();
        ?>
    </div>
</section>
