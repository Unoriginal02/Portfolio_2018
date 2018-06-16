<?php get_header(); ?>

<div class="row mr-0 ml-0">

  <div class="col-lg-12 mb-4">
    <div class="hero-statement text-center pf-velo-slideIn">
      <h2>Pensaba que <b>Ariana Grande</b> era una tipografía.</h2>
      <p>- Alguien, en internet</p>
    </div>

  </div>
  	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="col-lg-4 col-md-6 col-sm-12 mb-4  d-flex align-items-stretch">
		<div class="card pf-velo-slideIn">
			<div class="card-image">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"/>
					</a>
				<?php endif; ?>
			</div>

			<div class="card-body">
				<a href=""><h5 class="card-title"><?php the_title(); ?></h5></a>
				<p class="card-text"><?php foreach((get_the_tags()) as $tags){ echo $tags->name."<br>"; } ?></p>
			</div>
		</div>
	</div>
	<?php endwhile; else: ?>
	<p><?php _e('oops'); ?></p>
	<?php endif; ?>
		

<?php get_footer(); ?>