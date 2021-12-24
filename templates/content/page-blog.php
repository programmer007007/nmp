<div class="col-md-3 col-12">
    <div class="w-100 m_wrp_blog_holder">
        <div class="wrp_blog" style="
                background-size: cover !important;
                /* background-repeat: no-repeat; */
                background-position: unset;
                background: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), "post-thumbnail") : 'https://via.placeholder.com/1400x800'; ?>);
                height: 27vh;
                ">
            <div class="overlay">
                <div class="text"><a href="<?php the_permalink(get_the_ID()); ?>"><?php echo wp_trim_words( the_title(null,null,false), 10, '...' ) ?></a></div>
            </div>
        </div>
    </div>
</div>



