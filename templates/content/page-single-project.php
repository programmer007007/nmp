<?php
$print = $args['index'] % 2 == 0 && $args['index'] == ($args['count'] - 1);
?>
<div class="section-single-project <?php echo is_front_page() ? ($print ? 'col-md-12 col-12' : 'col-md-6 col-12') : ''; ?>">
    <?php if (is_front_page()) {
        get_template_part('templates/single/partial', 'frontheader');
        ?>
        <?php
    } else {
        get_template_part('templates/single/partial', 'nonfrontheader');
    } ?>

    <div class="<?php echo is_single() ? 'single_content_holder' : '' ?>">
        <div class="mt_single_holder <?php echo is_front_page() ? 'readmore' : 'single_page_project_content' ?>">
            <?php
            if (is_front_page()) {
                $google_map_data = get_post_meta(get_the_ID(), 'google_map_link')[0];
                if (Stringy\Stringy::create($google_map_data)->contains('maps/embed')) {
                    echo "<div class='map_holder float-start'><iframe src='" . $google_map_data . "'  style='width:100%;' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe></div>";
                }
            }
            ?>
            <div class="content_single_holder clearfix"><?php
                $content = get_post_meta(get_the_ID(), "project_description")[0];
                $content = str_replace('<img', '<img data-aos="flip-left" ', $content);
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
