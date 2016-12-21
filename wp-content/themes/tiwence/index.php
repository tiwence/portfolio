<?php get_header(); ?>

<div class="content">

	<div class="grid">
	<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() );

	endwhile; endif; 
	?>
	</div>

	<div class="preview">
		<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
		<div class="description description--preview"></div>
	</div>

</div>

<?php get_footer() ?>
