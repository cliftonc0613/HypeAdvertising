<?php
/**
 * The default template for displaying content single/search/archive
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.3.0
 */
?>
	<!-- START: content.php -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<?php the_post_thumbnail(); ?>
			<!--
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'requiredfoundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
		    -->
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->

	</article><!-- #post-<?php the_ID(); ?> -->
	<!-- END: content.php -->