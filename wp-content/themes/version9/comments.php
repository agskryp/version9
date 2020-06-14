<?php
  /**
   * The template for displaying comments
   */

  if( post_password_required() ) return;
?>

<div class="comments-area">
  <?php if( have_comments() ) { ?>
    <h2 class="comments-title text-center">Comments</h2>

    <ol class="comment-list">
      <?php
        wp_list_comments( array(
          'style'       => 'ol',
          'short_ping'  => true,
          'avatar_size' => 64,
          'walker'      => new version9_Walker_Comment()
        ) );
      ?>
    </ol>
  <?php 
    }

    comment_form();
  ?>
</div>
