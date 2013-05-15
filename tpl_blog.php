<?php
/**
 * Template Name: Blog Posts
 * The template for displaying all content.
 *
 * If there aren't any other templates present to
 * display content, it falls back to index.php
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.1.0
 */

get_header(); ?>


	<!-- Row for main content area -->
        <div class="page-title" >
            <div class="row">
                <div class="twelve columns">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
                
        </div>
            <div class="bottom-padding">
            </div>
        </div>
        <hr class="carved" />
	<div id="content" class="row">

        <aside id="sidebar" class="two columns" role="complementary">
            <div class="sidebar-box">
                <?php get_sidebar(); ?>
            </div>
        </aside><!-- /#sidebar -->

        <div id="main" class="ten columns" role="main">
            
			<div class="post-box">

			 <?php
                $temp = $wp_query;
                $wp_query= null;
                $wp_query = new WP_Query();
                $wp_query->query('posts_per_page=3'.'&paged='.$paged);
                while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
                       
                    
                    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'requiredfoundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
                    <h1 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'requiredfoundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h1>

                   
                    <?php get_template_part( 'content', 'excerpt'); ?>


                    
                    <hr class="carved">

                <?php endwhile; ?>


            <?php if ( function_exists( 'required_pagination' ) ) {
                required_pagination();
            } ?>
			</div>

		</div><!-- /#main -->

		

	</div><!-- End Content row -->

<?php get_footer(); ?>