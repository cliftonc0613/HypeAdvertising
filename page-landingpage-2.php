<?php
/**
 * Template Name: Landing Page
 * Description: A Page Template without a sidebar
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.2.0
 */

get_header(blank); ?>

	<!-- Row for main content area -->
	
		
			<div class="row">
				<div class="twelve columns LPcontainer">
					
											<h1 id="site-title" class="hide-for-small text-center"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?><img src="../wp-content/uploads/2013/04/HypeVec-4C-trans.png" width="300"></a></span></h1>
						<h1 id="site-title" class="show-for-small text-center"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?><img src="../wp-content/uploads/2013/04/HypeVec-4C-trans.png" ></a></span></h1>
					
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