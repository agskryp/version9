<?php
/**
 * Custom template tags for this theme
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package version9
 */

/**
 * Prints HTML with meta information for the current post-date/time and category.
 */
if ( !function_exists( 'version9_post_header_meta' ) ) :
  function version9_post_header_meta() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
      $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

	$time_string = sprintf( 
      $time_string,
      esc_attr( get_the_date( DATE_W3C ) ),
      esc_html( get_the_date() ),
      esc_attr( get_the_modified_date( DATE_W3C ) ),
      esc_html( get_the_modified_date() )
	);
      
    $categories_list = sprintf(
      '<span class="cat-links">' . esc_html__( '%1$s', 'version9' ) . '</span>',
      get_the_category_list( esc_html__( ', ', 'version9' ) )
    );
  
    $posted_on = sprintf(
      esc_html_x( 'Posted %s in ', 'post date', 'version9' ),
      '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
    
    $posted_date = get_the_time('F j, Y');
    $updated_date = get_the_modified_time('F j, Y');
	
    echo $posted_on . $categories_list;
    
    if( is_single() && $updated_date != $posted_date ) {
      echo '<br /><span>Last updated on <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $updated_date .  '</a></span>';
    }
  }
endif;

/**
 * Prints HTML with meta information for comments & post edit.
 */
if ( !function_exists( 'version9_post_footer_meta' ) ) :
  function version9_post_footer_meta() {
	if ( !is_single() && !post_password_required() && ( comments_open() || get_comments_number() ) ) {
      echo '<span class="comments-link">';
	
      comments_popup_link( sprintf(	wp_kses(
		/* translators: %s: post title */
		__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'version9' ),
		array(
		  'span' => array(
		    'class' => array(),
		  ),
		)
      ), get_the_title() ) );
      
	  echo '</span>';
    }

	edit_post_link(	sprintf( wp_kses(
      /* translators: %s: Name of current post. Only visible to screen readers */
      __( 'Edit <span class="screen-reader-text">%s</span>', 'version9' ),
      array(
		'span' => array(
          'class' => array(),
		),
      )
	), get_the_title() ), '<span class="edit-link">', '</span>'	);
  }
endif;

/**
 * Returns the navigation for next/previous list of posts, when applicable (i.e. index.php).
 */
function version9_posts_navigation( $args = array() ) {
  $navigation = '';

  // Don't print empty markup if there's only one page.
  if ( $GLOBALS[ 'wp_query' ] -> max_num_pages > 1 ) {
    $args = wp_parse_args( $args, array(
      'prev_text'          => esc_html__( 'View older posts', 'moltodestroyed' ),
      'next_text'          => esc_html__( 'View newer posts', 'moltodestroyed' ),
      'screen_reader_text' => esc_html__( 'Posts navigation', 'moltodestroyed' ),
    ) );

    $next_link = get_previous_posts_link( $args[ 'next_text' ] );
    $prev_link = get_next_posts_link( $args[ 'prev_text' ] );

    if ( $prev_link ) {
      $navigation .= '<div class="nav-previous">' . $prev_link . '</div>';
    }

    if ( $next_link ) {
      $navigation .= '<div class="nav-next">' . $next_link . '</div>';
    }

    $navigation = _navigation_markup( $navigation, 'posts-navigation', $args[ 'screen_reader_text' ] );
  }

  echo $navigation;
}

/**
 * Retrieves the navigation for next/previous post, when applicable.
 */
function version9_blog_navigation( $args = array() ) {
  $args = wp_parse_args( $args, array(
	'post_text'          => '%title',
	'in_same_term'       => false,
	'excluded_terms'     => '',
	'taxonomy'           => 'category',
	'screen_reader_text' => esc_html__( 'Post navigation', 'moltodestroyed' ),
  ) );

  $navigation = '';

  $previous = get_previous_post_link(
	'<div class="nav-previous"><small>View an older post</small><br> %link</div>',
    $args[ 'post_text' ],
	$args[ 'in_same_term' ],
	$args[ 'excluded_terms' ],
	$args[ 'taxonomy' ]
  );

  $next = get_next_post_link(
    '<div class="nav-next"><small>View a newer post</small><br> %link</div>',
    $args[ 'post_text' ],
    $args[ 'in_same_term' ],
    $args[ 'excluded_terms' ],
    $args[ 'taxonomy' ]
  );

  // Only add markup if there's somewhere to navigate to.
  if ( $previous || $next ) {
    $navigation = _navigation_markup( $previous . $next, 'post-navigation', $args[ 'screen_reader_text' ] );
  }

  echo $navigation;
}












/**
 * Display the archive title based on the queried object.
 */
function version9_archive_title( $before = '', $after = '' ) {
  $title = get_the_version9_archive_title();

  if ( ! empty( $title ) ) {
    echo $before . $title . $after;
  }
}

/**
 * Retrieve the archive title based on the queried object.
 */
function get_the_version9_archive_title() {
	if ( is_category() ) {
		/* translators: Category archive title. 1: Category name */
		$title = sprintf( __( '%s' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		/* translators: Tag archive title. 1: Tag name */
		$title = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		/* translators: Author archive title. 1: Author name */
		$title = sprintf( __( 'Author: %s' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		/* translators: Yearly archive title. 1: Year */
		$title = sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
	} elseif ( is_month() ) {
		/* translators: Monthly archive title. 1: Month name and year */
		$title = sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
	} elseif ( is_day() ) {
		/* translators: Daily archive title. 1: Date */
		$title = sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
	} elseif ( is_tax( 'post_format' ) ) {
		if ( is_tax( 'post_format', 'post-format-aside' ) ) {
			$title = _x( 'Asides', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			$title = _x( 'Galleries', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			$title = _x( 'Images', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			$title = _x( 'Videos', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			$title = _x( 'Quotes', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			$title = _x( 'Links', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			$title = _x( 'Statuses', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			$title = _x( 'Audio', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			$title = _x( 'Chats', 'post format archive title' );
		}
	} elseif ( is_post_type_archive() ) {
		/* translators: Post type archive title. 1: Post type name */
		$title = sprintf( __( 'Archives: %s' ), post_type_archive_title( '', false ) );
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} else {
		$title = __( 'Archives' );
	}

	/* Filters the archive title. */
	return apply_filters( 'get_the_version9_archive_title', $title );
}

/**
 * Display category, tag, term, or author description.
 *
 * @since 4.1.0
 *
 * @see get_the_archive_description()
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
//function the_archive_description( $before = '', $after = '' ) {
//	$description = get_the_archive_description();
//	if ( $description ) {
//		echo $before . $description . $after;
//	}
//}

/**
 * Retrieves the description for an author, post type, or term archive.
 *
 * @since 4.1.0
 * @since 4.7.0 Added support for author archives.
 * @since 4.9.0 Added support for post type archives.
 *
 * @see term_description()
 *
 * @return string Archive description.
 */
//function get_the_archive_description() {
//	if ( is_author() ) {
//		$description = get_the_author_meta( 'description' );
//	} elseif ( is_post_type_archive() ) {
//		$description = get_the_post_type_description();
//	} else {
//		$description = term_description();
//	}

	/**
	 * Filters the archive description.
	 *
	 * @since 4.1.0
	 *
	 * @param string $description Archive description to be displayed.
	 */
//	return apply_filters( 'get_the_archive_description', $description );
//}


















if ( ! function_exists( 'version9_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function version9_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'version9' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;



if ( ! function_exists( 'version9_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function version9_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'version9' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'version9_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function version9_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'version9' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'version9' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'version9' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'version9' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'version9' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'version9' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'version9_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function version9_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;
