<?php get_header(); ?>

    <main id="content-wrapper">


        <?php get_template_part('templates/sections/home', 'slider-video'); ?>
        <?php //get_template_part('templates/sections/home', 'floating-contact'); ?>
        <?php get_template_part('templates/sections/home', 'welcomemsg'); ?>
        <?php get_template_part('templates/sections/home', 'aboutus'); ?>
        <?php get_template_part('templates/sections/home', 'whatwestandfor'); ?>
        <?php get_template_part('templates/sections/home', 'properties'); ?>

    </main> <!-- #content-wrapper -->

<?php
get_footer();
