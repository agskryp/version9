<?php
  /**
   * The template for displaying comments
   */

  if( post_password_required() ) return;
?>

<div id="comments" class="comments-area">
  <?php if( have_comments() ) : ?>
    <h2 class="comments-title text-center">Comments</h2>

    <?php the_comments_navigation(); ?>

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
      the_comments_navigation();

      // If comments are closed and there are comments, let's leave a little note, shall we?
      if( !comments_open() ) {
    ?>
      <p class="no-comments text-center font-weight-bold">
        <?php esc_html_e( 'Comments are closed.', 'version9' ); ?>
      </p>

    <?php
      }
    endif; // Check for have_comments().

    comment_form();
  ?>
</div>
