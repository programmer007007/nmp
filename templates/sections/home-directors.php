<?php $pods_settings = pods('website_settings'); ?>
<section id="section-about-us <?php echo is_front_page() ? 'front-page-about-us' : 'about-us' ?>">
    <?php if (is_front_page()) { ?>
        <h3>About us</h3>
    <?php } else { ?>
        <h1>About us</h1>
    <?php } ?>
    <?php $content = get_page_by_title('About', OBJECT, 'post'); ?>
    <p class="about_us_wrapper">
        <?php echo $content; ?>
    </p>
</section>