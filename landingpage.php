<?php
/**
 * Template Name: Landing Page (No Logo)
 * Description: A Page Template without a sidebar
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.2.0
 */

get_header(blank); ?>

	<!-- Row for main content area -->
	
		
			<div class="row">
				<div class="twelve columns LPcontainer">
						<div class="six columns ">
							<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('landing_left')) : else : ?>
								<p><strong>Widget Ready</strong></p>
								<p>This left_column is widget ready! Add one in the admin panel.</p>
							<?php endif; ?>	
						</div> <!-- End First .Six .Column -->
						
						
						<div class="six columns">
							<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('landing_right')) : else : ?>
								<p><strong>Widget Ready</strong></p>
								<p>This left_column is widget ready! Add one in the admin panel.</p>
							<?php endif; ?>			
						</div> <!-- End Secound .Six .Column -->
				</div><!-- End .Twelve .Column .LPcontainer -->
					
			</div><!-- End .Row -->
	

<?php get_footer(landingpage); ?>