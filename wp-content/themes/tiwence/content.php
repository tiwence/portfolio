<div class="grid__item" data-size="1280x857">
	<a href="<?php the_post_thumbnail_url(); ?>" class="img-wrap"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
	
	<?php 
	$category_id = get_the_category()[0]->cat_ID; 
	if ($category_id == 1) {
		echo '<i class="cat-icon fa fa-film "></i>';
	} else if ($category_id == 2) {
		echo '<i class="cat-icon fa fa-link"></i>';
	} else if ($category_id == 4) {
		echo '<i class="cat-icon fa fa-mobile"></i>';
	}
	?>

		<div class="description description--grid">
			<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_content(); ?></p>
			<div class="details">
				<ul>
					<li><i class="icon fa fa-calendar"></i><span><?php echo get_post_custom_values($key = 'date')[0] ?></span></li>
					<li><i class="icon icon-focal_length"></i><span><a href="<?php get_post_custom_values($key = 'url')[0] ?>">Lien</span></li>
				</ul>
			</div>
		</div>
	</a>
</div>