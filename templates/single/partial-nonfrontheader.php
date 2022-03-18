<?php
$google_map_data = get_post_meta(get_the_ID(), 'google_map_link')[0];
?>
<div>
    <?php if (Stringy\Stringy::create($google_map_data)->contains('maps/embed')) { ?>
        <iframe src='<?php echo $google_map_data; ?>' height='800' style='width:100%;border:0;position:relative;'
                allowfullscreen='' loading='lazy'></iframe>
    <?php }; ?>
    <div class="pt_holder pt_holder_new">
        <a class="a_project_title"
           href="<?php echo get_permalink(get_the_ID()); ?>"><h2
                    class=""><span
                        class="<?php echo is_front_page() ? '' : '' ?>"><?php the_title(); ?></span></h2></a>
        <h4 class="project_sub_title text-center"><?php echo get_post_meta(get_the_ID(), "tag_line")[0]; ?></h4>
    </div>
</div>
