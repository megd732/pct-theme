<?php if ( post_password_required() ) {
    return;
  } ?>
<div class="row">
  <div id="comments" class="comments-area twelve columns">
    <?php if ( have_comments() ) : ?>
      <h6 class="comments-title">
	 <?php
	 printf( _nx( 'One comment on "%2$s"', '%1$s comments on "%2$s"', get_comments_number(), 'comments title'), number_format_i18n( get_comments_number() ), get_the_title() );
         ?>
      </h6>
      <ul class="comment-list">
        <?php
    wp_list_comments( array( 
			    'short_ping' => true,
			    'avatar-size' => 50,
			     ) );
        ?>
      </ul
      <?php endif; ?>
      <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	  <p class="no-comments">
	     <?php _e('Comments are closed.'); ?>
          </p>
	  <?php endif; ?>

	  <?php
	  $comments_args = array(
				  // change title of send button
				 'class_form' => 'comment-form twelve columns',
				  );
	  
	  comment_form($comments_args); ?>
	</div>