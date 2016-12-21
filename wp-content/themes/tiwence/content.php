<div class="grid__item" data-size="1280x857">
	<a href="<?php the_post_thumbnail_url(); ?>" class="img-wrap"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
	
	<?php 
	$category_id = get_the_category()[0]->cat_ID; 
	if ($category_id == 1) {
		echo '<i class="fa fa-video-camera cat-icon"></i>';
	} else if ($category_id == 2) {
		echo '<i class="fa fa-internet-explorer cat-icon"></i>';
	} else if ($category_id == 4) {
		echo '<i class="fa fa-mobile cat-icon"></i>';
	}
	?>

		<div class="description description--grid">
			<h3><a href="<?php echo get_post_custom_values($key = 'url')[0] ?>"><?php the_title(); ?></a></h3>
			<p><?php the_content(); ?><!--<em>&mdash; <?php the_author(); ?></em>--></p>
			<div class="details">
				<ul>
					<li><i class="icon fa fa-calendar"></i><span><?php echo get_post_custom_values($key = 'date')[0] ?></span></li>
					<li><i class="icon icon-focal_length"></i><span><a href="<?php the_permalink(); ?>">Lien</span></li>

					<!--<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
					<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
					<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
					<li><i class="icon icon-iso"></i><span>80</span></li>-->
				</ul>
			</div>
		</div>
	</a>
</div>