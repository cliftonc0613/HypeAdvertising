<?php

/**
 * Template Name: Page Alt.
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.3.0
 */

get_header(); ?>

	<!-- Row for main content area -->
	<div class="page-header">
		<div class="row">
			<div class="twelve columns">	
				<h4><?php the_title(); ?></h4>
			</div>
		</div>
	</div>

	<div id="content" class="row">
		<div class="twelve columns">
		<aside id="sidebar" class="two columns" style="margin-top:15px;" role="complementary">
			<div class="sidebar-box">
				<?php get_sidebar(); ?>
			</div>
		</aside><!-- /#sidebar -->
		

		<div id="main" class="ten columns" role="main">

			<div class="post-box">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						/**
						 * Seriously I never used comments on a page, what for?
						 */
						//comments_template( '', true );
					?>

				<?php endwhile; // end of the loop. ?>

			</div>
		</div><!-- /#main -->
		</div>
		
		<!-- /#sidebar -->
		

	</div><!-- End Content row -->

<?php get_footer(); ?>