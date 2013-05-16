<?php
/* Template Name:  Portfolio */


get_header(); 

query_posts('post_type=portfolio&posts_per_page=9');


?>
<div class="row">
	
	<div id="content" class="group"> 

	<h2>Portfolio Work</h2>

	
		<div class="four columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php
				$title= str_ireplace('"', '', trim(get_the_title()));
				$desc= str_ireplace('"', '', trim(get_the_content()));
			?>	

			<div class="view view-first">
		        <img src="<?php the_post_thumbnail(); ?>" />
		        	<a href="../single-portfolio.php">
			            <div class="mask">
			                <h2><?=$title?></h2>
			                <p><?php print get_the_excerpt(); ?></p>
			                <a href="<?php more_fields('secondary_title') ?>" class="info">Read More</a>
			           </div>
		           </a>
		    </div>
		    <?php endwhile; endif; ?>
		</div>


	</div>
</div>

<?php footer(); ?>