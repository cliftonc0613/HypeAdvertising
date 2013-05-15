

 <?php
/**
 * Template Name: HomePage 3
 * Description: This is a homepage that has has a slider, four widget area, and 
 * 				three widget areas in the footer
 */
/**
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 */

get_header(); ?>
	<div class="welcome">
		<div class="home-slider">
			<div class="row">
				<div class="twelve columns">

					
					<?php
					    /**
					     * Check for the responsive slider plugin
					     */
					    if ( class_exists( 'REQ_Orbit' ) ) : 
					 ?>
					
					

					<?php
					    /**
					     * Use the shortcode to create the slider
					     */
					    echo do_shortcode("[orbit include='22,23,24']");
					      // echo do_shortcode("[orbit id=28]");
					      //do_shortcode("[orbit include='7,8,9']");
					?>
					<?php endif; ?>
				
				</div>

			</div>
		</div>
		
	</div>
	




	<div class="hide welcome">
		<div class="row">
			<div class="twelve columns">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('welcome_panel')) : else : ?>  
		        <p><strong>Widget Ready</strong></p>  
		        <p>This left_column is widget ready! Add one in the admin panel.</p>  
		    	<?php endif; ?>  
			</div>
		</div>
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


