<div class="row">
<div class="twelve columns blog-post">
   <h5 class="content-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
   <?php the_content(); ?>
   <p class="blog-data">Posted <b><?php the_date(); ?></b> by <?php the_author(); ?>. View <a href="#">3 comments</a>.</p>
</div>
</div>