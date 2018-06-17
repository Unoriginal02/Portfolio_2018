<?php get_header(); ?>

<div class="row mr-0 ml-0 justify-content-center">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="col-12 post-wrapper pf-velo-slideIn-content">
			<div class="post-title"><h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
			</div>
			<div class="post-content mb-4">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; else: ?>
	<p><?php _e('oops'); ?></p>
	<?php endif; ?>
		

<?php get_footer(); ?>