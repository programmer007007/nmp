<!doctype html>
<html <?php language_attributes(); ?>>
<?php $pods_settings = pods('website_settings'); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="site-wrapper" class="d-flex flex-column min-vh-100">
    <div id="main_first_top" class="d-flex flex-row-reverse toppest_menu_wrp">
        <div class="d-flex m-10 top_sub_menu_wrp">
            <button type="button" data-bs-toggle="modal" data-bs-target="#calendar" class="top_menu zoom_btn"><i
                        class="fas fa-video mr-7p"></i>Zoom Meeting
            </button>
            <a target="_blank"
               href="https://api.whatsapp.com/send?phone=<?php echo $pods_settings->display('whatsapp_nos'); ?>&text=Hi"
               class="top_menu sale_btn"><i class="fab fa-whatsapp mr-7p"></i>Sales Support</a>
        </div>
    </div>
    <header id="header-wrapper" class="sticky-top bg-dark">
        <?php
        get_template_part('templates/header/header', 'simple');
        ?>
    </header> <!-- #header-wrapper -->
    <div id="page-wrapper" class="flex-grow-1">
