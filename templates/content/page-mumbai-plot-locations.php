<?php $pods_settings = pods('website_settings'); ?>
<div class="mpl_wrapper">
    <div class="pt_holder">
        <a class="a_project_title"
           href="<?php echo get_permalink(get_the_ID()); ?>"><h2
                    class="project_title"><?php echo wrap_imp_word("projects", "span", "tg_hd", the_title('', '', false)); ?></h2>
        </a>
        <h4 class="project_sub_title text-center"><?php echo str_replace("free.", "free.<br>", wrap_imp_word($pods_settings->display("company_name"), "div", "tg_cmp_name", get_post_meta(get_the_ID(), "tag_line")[0])); ?></h4>
    </div>
    <div class="d-flex flex-sm-row flex-column align-items-stretch">
        <?php
        //$categories = get_terms( 'location', array('hide_empty' => true) );
        $categories = get_terms('location', array('hide_empty' => false));
        $i = 0;
        foreach ($categories as $category) {
            //echo '<a class="btn  btn-default " href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';?>
            <?php $template_img = get_term_meta($category->term_id, 'display_image', true); ?>
            <?php //var_dump($template_img);?>
            <div class="flex-grow-1" data-aos="fade-<?php
            if ($i % 2 == 0) {
                echo "right";} else {echo "left";}$i++;
             ?>">
                <a class="location_lnk_wrp" href="<?php echo get_category_link($category->term_id); ?>">
                    <div class="location_holder position-relative" style="background-image: url('<?php $item_img = isset($template_img["guid"]) ? $template_img["guid"] : '';
                    echo $item_img; ?>');background-size: cover;background-size: 100% 100%; ">
                        <div class="black-overlay">
                        </div>
                        <div class="show_over">
                            <div class="w-100 h-100 position-relative mt_Wrp"><div class="ov_wrp">View all our project of <?php echo $category->name;?></div></div>
                        </div>
<!--                        <span class="htxt">--><?php //echo $category->name;?><!--</span>-->
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>