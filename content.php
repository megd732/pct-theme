<div class="row">
<div class="twelve columns blog-post">
   <h5 class="content-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
   <?php the_content(); ?>
   <p class="blog-data">Posted <b><?php the_date(); ?></b> by <?php the_author(); ?>.
 <a href="<?php comments_link(); ?>">
   <?php
   printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
</a></p>
</div>
</div>