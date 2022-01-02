<?php
$project_images = get_post_meta(get_the_ID(), 'project_images');
if (count($project_images)) {
?>
<div class="slider_holder d-block">
    <h4 class="topic_holder">Plot Images</h4>
    <div id="lightgallery" class="row">

        <?php foreach ($project_images as $item) {
            if (isset($item['guid'])) { ?>
                <a class="col-md-3 col-12 proj_img" href="<?php echo $item['guid']; ?>">
                    <img src="<?php echo $item['guid']; ?>"/>
                </a>
            <?php }
        } ?>
    </div>
</div>
<?php } ?>
