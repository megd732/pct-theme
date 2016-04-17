<?php get_header(); ?>
  <section class="content">
    <div class="container">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();

	  get_template_part( 'content', get_post_format() ); 
        endwhile; ?>
	<div class="container pagbar-container">
	  <?php next_posts_link( '< Older posts' ); ?>
   	  <?php previous_posts_link( 'Newer posts >' ); ?>
	</div>
        <?php endif; ?>
    </div>

  </section>

<?php get_footer(); ?>

