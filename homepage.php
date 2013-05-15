

 <?php
/**
 * Template Name: HomePage
 * Description: A description of your page template
 */
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * 
 */

get_header(); ?>


	<div class="row">

		<?php
		    /**
		     * Check for the responsive slider plugin
		     */
		    if ( class_exists( 'REQ_Orbit' ) ) : 
		 ?>

		<div class="hide-for-small home-slider">

		<?php
		    /**
		     * Use the shortcode to create the slider
		     */
		    echo do_shortcode("[orbit include='22,23,24']");
		      // echo do_shortcode("[orbit id=28]");
		      //do_shortcode("[orbit include='7,8,9']");
		?>
		<hr>
		</div>

		

		<?php endif; ?>

	</div>
	<div class="welcome">
			
	</div>

	<div class="row">
		<div class="four columns">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('left_column')) : else : ?>  
        <p><strong>Widget Ready</strong></p>  
        <p>This left_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
		</div>
		<div class="four columns">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('center_column')) : else : ?>  
        <p><strong>Widget Ready</strong></p>  
        <p>This center_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
		</div>
		<div class="four columns">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('right_column')) : else : ?>  
        <p><strong>Widget Ready</strong></p>  
        <p>This right_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
		</div>
	</div>




<?php get_footer(); ?>


