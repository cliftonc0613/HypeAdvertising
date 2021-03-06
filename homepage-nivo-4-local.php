

 <?php
/**
 * Template Name: HomePage 4 - Local Machine
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
		<div class="row">
			<div class=" twelve">
				<?php
		    /**
		     * Use the shortcode to create the slider
		     */
		    echo do_shortcode("[nivoslider id='100']");
		      
				?> 
			</div>

			<div class="twelve columns">
				<div class="picNav hide-for-small">
					<div >
						<ul class="inline-list right">
						    <li><a href="#"><img src="../comdevhypeadvertising/wp-content/uploads/2013/05/design.png" alt="" width="30" height="30"><br/>Design</a></li>
						    <li><a href="#"><img src="../comdevhypeadvertising/wp-content/uploads/2013/05/World-01.png" alt="" width="30" height="30"><br/>Web</a></li>
						    <li><a href="#"><img src="../comdevhypeadvertising/wp-content/uploads/2013/05/seo.png" alt="" width="30" height="30"><br/>SEO</a></li>
						    <li><a href="#"><img src="../comdevhypeadvertising/wp-content/uploads/2013/05/ppc.png" alt="" width="30" height="30"><br/>PPC</a></li>
						    <li><a href="#"><img src="../comdevhypeadvertising/wp-content/uploads/2013/05/social-media.png" alt="" width="30" height="30"><br/>Social Media</a></li>
						    <li><a href="#"><img src="../comdevhypeadvertising/wp-content/uploads/2013/05/print.png" alt="" width="30" height="30"><br/>Print</a></li>
					    </ul>
					</div>
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



