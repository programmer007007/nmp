<div class="benefits_holder">
    <h4 class="topic_holder">Benefits</h4>
    <div class="row">
        <?php
        $term_list = $args["term_list"];
        foreach ($term_list as $term_single) {
            ?>
            <div class="col-xl-3 col-md-4 col-12" data-aos="fade-up">
                <div class="benefit_txt row-eq-height">
                    <div class="d-flex"><i class="far fa-check-circle"
                                           style="font-size: 2rem;"></i>
                        <div class="benefit_txt_under"><?php echo Stringy\Stringy::create(html_entity_decode($term_single->name))->toTitleCase(); ?></div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<span class="readmore-link"></span>
