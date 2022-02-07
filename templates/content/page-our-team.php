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
                <div class="col-md-2 col-12" data-aos="fade-up" style="background-color: #cccccc;margin-bottom: 2%;">

                    <?php
                    $person_img = get_post_meta(get_the_ID(), "person_image")[0];
                    ?>
                    <img src="<?php echo isset($person_img) ? $person_img['guid']
                        : 'https://via.placeholder.com/400x400'; ?>" class="figure-img img-fluid rounded"
                         alt="<?php the_title(); ?>">
                </div>
                <div class="col-md-4 col-12 team_desc_col_holder" data-aos="fade-up" style="margin-bottom: 2%;">
                    <div class="team_desc_holder">
                    <div class="team_name_txt">
                        <?php
                        $content = get_post_meta(get_the_ID(), "person_name")[0];
                        echo $content; ?>
                    </div>
                    <div class="team_desg_txt">
                        <?php
                        $content = get_post_meta(get_the_ID(), "person_designation")[0];
                        echo $content; ?>
                    </div>
                    <div class="team_desc_txt">
                        <?php
                        $content = get_post_meta(get_the_ID(), "person_about")[0];
                        echo $content; ?>
                    </div>
                    </div>
                </div>

                <?php
            }
            wp_reset_query();
            ?>
        </div>
    </div>
    </div>
</section>