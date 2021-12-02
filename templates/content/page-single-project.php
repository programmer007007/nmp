<div class="section-single-project">
    <h2 class="text-decoration-underline project_title"><?php the_title(); ?></h2>
    <h4 class="project_sub_title"><?php echo get_post_meta(get_the_ID(), "tag_line")[0]; ?></h4>
    <p><?php
        $content = get_post_meta(get_the_ID(), "project_description")[0];
        if (is_front_page()) {
            echo limitText($content, 1000, get_permalink(get_the_ID()), true);
        } else {
            echo $content;
        }
        ?></p>
    <div class="slider_holder">
        <h4 class="text-uppercase">Plot Images</h4>
        <div id="lightgallery" class="row">
            <?php
            $project_images = get_posts(array(
                'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_parent' => get_the_ID()
            ));
            ?>
            <?php foreach ($project_images as $item) { ?>
                <a class="col-md-6 col-12 proj_img" href="<?php echo $item->guid; ?>" data-lg-size="1600-2400">
                    <img src="<?php echo $item->guid; ?>"/>
                </a>
            <?php } ?>

        </div>

    </div>
</div>
<?php
