<?php $pods_settings = pods('website_settings'); ?>
<section id="section-who-we-are" class="<?php echo is_front_page() ? 'front-page-who-we-are' : 'who-we-are-page' ?>">
    <?php $content = get_page_by_path('about-us', OBJECT, 'page'); ?>
    <div class="who_we_are_wrapper">
        <div class="who_we_are_container">
            <div class="row">
                <div class="col-md-6 col-12 width_tab_100">
                    <img src="<?php echo $pods_settings->display("who_we_are_image"); ?>" data-aos="fade-right"
                         class="img-fluid whoweare_img"/>
                </div>
                <div class="col-md-6 col-12 hide_tab who_are_are_txt_holder">
                    <div class="d-block" data-aos="fade-up">
                        <?php echo $pods_settings->display("who_we_are_text"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
