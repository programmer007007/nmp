<?php $pods_settings = pods('website_settings'); ?>
<section id="section-slider">
    <div class="m_slider_wrp">
        <div class="d-flex" id="video_holder">
            <video onloadstart="this.volume=0.5" id="v" autoplay muted="" loop="" playsinline="" width="100%" poster="">
                <source type="video/mp4" src="<?php echo $pods_settings->display('background_video'); ?>">
            </video>

            <div class="video_overlay"></div>
        </div>
        <?php
        $mainTitle = $pods_settings->display('page_video_main_title');
        $subTitle = $pods_settings->display('page_video_under_title');
        if (!empty($mainTitle) || !empty($subTitle)) {
            ?>
            <div class="first_message_holder">
                <?php if (!empty($mainTitle)) { ?>
                    <h2 class="playfair text-center f1"><?php echo $mainTitle; ?></h2>
                <?php } ?>
                <?php if (!empty($subTitle)) { ?>
                    <h4 class="opensan text-center f2"><?php echo $subTitle; ?></h4>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
