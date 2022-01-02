<?php get_header(); ?>
<?php $pods_settings = pods('website_settings'); ?>
    <main id="content-wrapper">

        <?php
        $current_category = get_queried_object(); ////getting current category
        $args = array(
            'post_type' => 'project',// your post type,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'location',
                    'field' => 'term_id',
                    'terms' => $current_category->term_id,
                )
            )
        );
        $the_query = new WP_Query($args);

        ?>

        <div class="container-fluid">
            <?php brk_breadcrumbs(); ?>
            <div class="row">
                <div id="article-wrapper">
                    <div class="mpl_wrapper">
                        <div class="pt_holder">
                            <a class="a_project_title"
                               href="<?php var_dump(get_category(get_the_ID())); ?>">
                                <h2 class="project_title"><?php echo "Project's at <span id='tg_hd'>$current_category->name</span>"; ?></h2>
                            </a>
                            <h4 class="project_sub_title text-center"><?php echo $current_category->description; ?></h4>
                        </div>
                        <div class="d-flex flex-sm-row flex-row align-items-stretch tax-list">
                            <?php
                            if (have_posts()) {
                                while (have_posts()) :
                                    the_post();
                                    ?>
                                    <div class="section-single-project">
                                        <?php get_template_part('templates/single/partial', 'frontheader'); ?>
                                        <div class="">
                                            <div class="mt_single_holder readmore">
                                                <?php
                                                $google_map_data = get_post_meta(get_the_ID(), 'google_map_link')[0];
                                                if (Stringy\Stringy::create($google_map_data)->contains('maps/embed')) {
                                                    echo "<div class='map_holder float-start'><iframe src='" . $google_map_data . "'  style='width:100%;' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe></div>";
                                                }
                                                ?>
                                                <div class="content_single_holder clearfix"><?php
                                                    $content = get_post_meta(get_the_ID(), "project_description")[0];
                                                    echo $content;
                                                    ?>
                                                </div>
                                                <?php
                                                get_template_part('templates/single/partial', 'images');
                                                $term_list = get_the_terms(get_the_ID(), 'project_benefit');
                                                if (count($term_list)) {
                                                    get_template_part('templates/single/partial', 'benefit', ["term_list" => $term_list]);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                                wp_reset_query();
                            } else {
                                ?>
                                <div class="col-12 no-project">
                                    No projects exit for the selected location. <a
                                            href="<?php echo get_permalink(get_page_by_path('mumbai-plot-locations')); ?>">List
                                        all locations</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>


                </div> <!-- #article-wrapper -->

                <?php get_sidebar(); ?>

            </div>

        </div>


    </main> <!-- #content-wrapper -->
    <style>
        <?php $width = get_term_meta($current_category->term_id,"width",true);
        if($width){
            ?>
        .mpl_wrapper .pt_holder .project_sub_title {
            width: <?php echo $width;?>%;
        }

        <?php
            }
            ?>
    </style>
<?php
get_footer();
