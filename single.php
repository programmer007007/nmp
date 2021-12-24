<?php get_header(); ?>

    <main id="content-wrapper">

        <?php
        while (have_posts()) :
            the_post();
            ?>

            <div class="container-fluid">

                <?php brk_breadcrumbs(); ?>

                <div class="row">

                    <div id="article-wrapper">
                        <?php
                       // var_dump(get_post_type(get_the_ID()));

                        if (get_post_type(get_the_ID()) == 'post') {
                            get_template_part('templates/content/page', 'single-blog');
                        } else {
                            get_template_part('templates/content/page', 'single-project'); ?>
                        <?php } ?>
                        <nav class="nav">
                            <?php
                            previous_post_link('<span class="nav-link me-auto">&laquo; %link</span>');
                            next_post_link('<span class="nav-link ms-auto">%link &raquo;</span>');
                            ?>
                        </nav>

                        <?php
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                        ?>

                    </div> <!-- #article-wrapper -->

                    <?php get_sidebar(); ?>

                </div>

            </div>

        <?php endwhile ?>

    </main> <!-- #content-wrapper -->

<?php
get_footer();
