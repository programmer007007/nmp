<?php $title = the_title('','',false);$check = Stringy\Stringy::create($title)->contains("our team",false);?>
<div class="section-pageheader py-3 mb-0 has-img-background <?php if($check){echo 'h_28vh';}?>">
	<img class="is-background" src="<?php the_post_thumbnail_url( 'brk_big' ); ?>" alt="<?php the_title(); ?>">
    <?php if(!$check){?>
	<div class="container my-5 py-3 text-center text-light">
		<h1 class="display-4"><?php the_title(); ?></h1>
	</div>
    <?php } ?>
</div>

