<?php get_header(); ?>
<?php $glb_pods_settings = pods('website_settings'); ?>
    <main id="content-wrapper">
        <?php get_template_part('templates/sections/home', 'slider-video'); ?>
        <?php get_template_part('templates/sections/home', 'welcomemsg'); ?>
        <?php //get_template_part('templates/sections/home', 'aboutus'); ?>
        <?php get_template_part('templates/sections/home', 'whatwestandfor'); ?>
        <?php get_template_part('templates/sections/home', 'properties'); ?>
        <?php get_template_part('templates/sections/home', 'testimonial'); ?>
        <?php get_template_part('templates/sections/home', 'whyus'); ?>
        <?php get_template_part('templates/sections/home', 'contactus'); ?>
        <?php if ($glb_pods_settings->display('hide_blogs') == 'No') { ?>
            <?php get_template_part('templates/sections/home', 'blog'); ?>
        <?php } ?>
    </main>
<?php
get_footer();
