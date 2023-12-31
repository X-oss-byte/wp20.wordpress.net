<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-meta">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			}
			echo '</div><!-- .entry-meta -->';
		}
		?>
	</div>
	<div class="post-content">
		<header class="entry-header">
			<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} elseif ( is_front_page() && is_home() ) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					get_the_title()
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				)
			);

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . __( 'Previous <span>Post</span>', 'wp20' ),
					'next_text' => '<span class="nav-subtitle">' . __( 'Next <span>Post</span>', 'wp20' ),
				)
			);

			?>
		</div><!-- .entry-content -->
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
