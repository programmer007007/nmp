<div class="section-single-blog">
    <div class="pt_holder_blog">
        <?php if (has_post_thumbnail()) { ?>
            <div class="blog_featured_img_holder">
                <?php echo get_the_post_thumbnail(); ?>
            </div>
        <?php } ?>
        <h1 class="blog_title"><?php the_title(); ?></h1>
        <h3 class="blog_written_by_holder">By <?php the_author(); ?> | <?php echo get_the_date('d-m-Y'); ?></h3>
        <div class="blog_content"><?php the_content(); ?></div>
    </div>
</div>
<?php
