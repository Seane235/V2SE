<?php get_header(); ?>


<div class="row">
	<div class="contain">
		<div class="col-sm-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>


<?php get_footer(); ?>