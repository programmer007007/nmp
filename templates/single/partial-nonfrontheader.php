<div class="pt_holder">
    <a class="a_project_title"
       href="<?php echo get_permalink(get_the_ID()); ?>"><h2
            class=""><span
                class="<?php echo is_front_page() ? '' : '' ?>"><?php the_title(); ?></span></h2></a>
    <h4 class="project_sub_title text-center"><?php echo get_post_meta(get_the_ID(), "tag_line")[0]; ?></h4>
</div>
