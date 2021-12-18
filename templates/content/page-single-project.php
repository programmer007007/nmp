<div class="section-single-project">
    <?php if (is_front_page()) { ?>
        <a class="a_project_title"
           href="<?php echo get_permalink(get_the_ID()); ?>"><h2
                    class="project_title"><span
                        class="<?php echo is_front_page() ? '' : '' ?>"><?php the_title(); ?></span></h2></a>
        <h4 class="project_sub_title text-center"><?php echo get_post_meta(get_the_ID(), "tag_line")[0]; ?></h4>
        <?php
    } else {
        ?>
        <div class="pt_holder">
            <a class="a_project_title"
               href="<?php echo get_permalink(get_the_ID()); ?>"><h2
                        class="project_title"><span
                            class="<?php echo is_front_page() ? '' : '' ?>"><?php the_title(); ?></span></h2></a>
            <h4 class="project_sub_title text-center"><?php echo get_post_meta(get_the_ID(), "tag_line")[0]; ?></h4>
        </div>
    <?php } ?>

    <div class="single_content_holder">
        <div class="mt_single_holder">
        <?php
        $google_map_data = get_post_meta(get_the_ID(), 'google_map_link')[0];
        if (Stringy\Stringy::create($google_map_data)->contains('maps/embed')) {
            echo "<div class='map_holder float-start'><iframe src='" . $google_map_data . "'  style='width:100%;' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe></div>";
        }
        ?>
        <p><?php
            $content = get_post_meta(get_the_ID(), "project_description")[0];
            if (is_front_page()) {
                echo limitText($content, 1000, get_permalink(get_the_ID()), true);
            } else {
                echo $content;
            }
            ?></p>
        <div class="slider_holder">
            <h4 class="topic_holder">Plot Images</h4>
            <div id="lightgallery" class="row">
                <?php
                $project_images = get_posts(array(
                    'post_type' => 'attachment',
                    'posts_per_page' => -1,
                    'post_parent' => get_the_ID()
                ));
                ?>
                <?php foreach ($project_images as $item) { ?>
                    <a class="col-md-3 col-12 proj_img" href=" <?php echo $item->guid; ?>">
                        <img src="<?php echo $item->guid; ?>"/>
                    </a>
                <?php } ?>

            </div>

        </div>
        <div class="benefits_holder">
            <h4 class="topic_holder">Benefits</h4>
            <div class="row">
                <?php
                $term_list = get_the_terms(get_the_ID(), 'project_benefit');
                //var_dump($term_list);
                foreach ($term_list as $term_single) {
                    ?>
                    <div class="col-xl-3 col-md-4 col-12">
                        <div class="benefit_txt"><i
                                    class="far fa-star col-green"></i>&nbsp;<?php echo Stringy\Stringy::create(html_entity_decode($term_single->name))->toTitleCase(); ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
