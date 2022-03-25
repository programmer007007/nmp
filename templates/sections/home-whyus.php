<?php $pods_settings = pods('website_settings');
$how_to_buy_content = $pods_settings->field('how_to_buy') ?>
<?php if (!empty($how_to_buy_content)): ?>
    <?php if ($pods_settings->display('hide_how_to_buy') == 'No') { ?>
        <div class="light_bg section-how-to-buy-lght">
            <section id="section-how-to-buy" class="mt-5">
                <h3 class="whyus"><span class="heading_bottom" data-aos="fade-down">How to buy?</span></h3>
                <div class="mt-5" data-aos="fade-up">
                    <?php echo $how_to_buy_content; ?>
                </div>
            </section>
            <div class="how_to_buy_img_holder">
                <img src="<?php echo get_template_directory_uri() . '/dist/img/relation.png' ?>"
                     class="w-100">
            </div>
        </div>
    <?php } ?>
<?php endif; ?>
<?php
$query = new WP_Query(array(
    'post_type' => 'legal_doc',
    'post_status' => 'publish',
    'posts_per_page' => -1,
));

if ($query->post_count) {
    if ($pods_settings->display('hide_why_us') == "No") { ?>
        <section id="section-whyus"
                 class="whyus mt-5 <?php is_front_page() ? 'front_page_blog_holder' : 'list_legal_doc' ?>">
            <h3 class="whyus"><span class="heading_bottom" data-aos="fade-down">WHY US</span></h3>
            <?php if ($pods_settings->display("why_us")) { ?>
                <div class="sub_text_holder"><?php echo $pods_settings->display("why_us"); ?></div>
            <?php } ?>
            <div class="img_slider_holder my-4">
                <i class="fa fa-angle-right right_arrow" aria-hidden="true"></i>
                <div class="swiper_whyus">
                    <div class="swiper-wrapper">
                        <?php
                        while ($query->have_posts()) {
                            $query->the_post();
                            $post_id = get_the_ID(); ?>
                            <div class="swiper-slide" data-swiper-autoplay="5000">
                                <figure class="figure view_pdf"
                                        data-link="<?php echo get_post_meta($post_id, 'pdf')[0]["guid"]; ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/dist/img/pdf_img.png' ?>"
                                         class="figure-img w-50 rounded">
                                    <figcaption
                                            class="figure-caption text-center"><?php echo get_post_meta($post_id, 'description')[0]; ?></figcaption>
                                </figure>
                            </div>
                            <?php
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
            <div class="preview_pdf">
                <button style="width: 120px;" class="btn btn-primary float-end text-white" type="button"
                        id="hidePdfViewerBtn"><i class="fa fa-times-circle mr-2"></i>Close Pdf
                </button>
                <iframe src="" id="pdf_iframe" class="preview_pdf_iframe"></iframe>
            </div>
        </section>
    <?php }
} ?>
<?php
$query = new WP_Query(array(
    'post_type' => 'demarcation',
    'post_status' => 'publish',
    'posts_per_page' => -1,
));

if ($query->post_count) {
    if ($pods_settings->display('hide_demarcation') == "No") {
        ?>
        <div class="light_bg">
            <section id="section-demarcation" class="mt-5">
                <h3 class="whyus"><span class="heading_bottom">DEMARCATION</span></h3>
                <?php if ($pods_settings->display("demarcation_text")) { ?>
                    <div class="sub_text_holder"><?php echo $pods_settings->display("demarcation_text"); ?></div>
                <?php } ?>
                <div class="img_slider_holder mt-5">
                    <i class="fa fa-angle-right right_arrow" aria-hidden="true"></i>
                    <div class="swiper_demarcation">
                        <div class="swiper-wrapper">
                            <?php
                            while ($query->have_posts()) {
                                $query->the_post();
                                $post_id = get_the_ID(); ?>
                                <div class="swiper-slide" data-swiper-autoplay="5000">
                                    <img src="<?php echo get_post_meta($post_id, 'images')[0]["guid"]; ?>"
                                         class="figure-img rounded">
                                </div>
                                <?php
                            }
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php }
} ?>
<?php
$query = new WP_Query(array(
    'post_type' => 'deed_registration',
    'post_status' => 'publish',
    'posts_per_page' => -1,
));

if ($query->post_count) {
    if ($pods_settings->display('hide_deed_registration') == "No") {
        ?>
        <section id="section-deed-registration" class="mt-5">
            <h3 class="whyus"><span class="heading_bottom">DEED REGISTRATION</span></h3>
            <?php if ($pods_settings->display("deed_registration_text")) { ?>
                <div class="sub_text_holder"><?php echo $pods_settings->display("deed_registration_text"); ?></div>
            <?php } ?>
            <div class="img_slider_holder mt-5">
                <i class="fa fa-angle-right right_arrow" aria-hidden="true"></i>
                <div class="swiper_deed_registration">
                    <div class="swiper-wrapper">
                        <?php
                        while ($query->have_posts()) {
                            $query->the_post();
                            $post_id = get_the_ID(); ?>
                            <div class="swiper-slide" data-swiper-autoplay="5000">
                                <img src="<?php echo get_post_meta($post_id, 'images')[0]["guid"]; ?>"
                                     class="figure-img rounded">
                            </div>
                            <?php
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php }
} ?>
