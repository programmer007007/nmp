<section class="section-our-team">
    <div class="container-fluid">
        <div class="row team_m_holder">
            <?php
            $args = array(
                'post_type' => 'team',// your post type,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            ?>
            <?php
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="col-md-3 col-12">
                    <figure class="figure teams_fig">
                        <?php
                        $person_img = get_post_meta(get_the_ID(), "person_image")[0];
                        ?>
                        <img src="<?php echo isset($person_img) ? $person_img['guid']
                            : 'https://via.placeholder.com/400x400'; ?>" class="figure-img img-fluid rounded"
                             alt="<?php the_title(); ?>">
                        <figcaption
                                class="figure-caption">
                            <div class="team_name_txt">
                                <?php
                                $content = get_post_meta(get_the_ID(), "person_name")[0];
                                echo $content; ?>
                            </div>
                            <div class="team_desg_txt text-center">
                                <?php
                                $content = get_post_meta(get_the_ID(), "person_designation")[0];
                                echo $content; ?>
                            </div>
                            <div class="team_desc_txt">
                                <?php
                                $content = get_post_meta(get_the_ID(), "person_about")[0];
                                echo $content; ?>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <?php
            }
            wp_reset_query();
            ?>
        </div>
    </div>
</section>