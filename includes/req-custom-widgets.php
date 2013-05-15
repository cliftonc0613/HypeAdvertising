<?php


if (function_exists('register_sidebar')) {  


		register_sidebar( array(
		   'name' => __( 'Header Right Top'),
		   'id' => 'mycustomwidgetarea',
		   'description' => __( 'An optional widget area for your site' ),
		   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		   'after_widget' => "</aside>",
		   'before_title' => '<h3 class="widget-title">',
		   'after_title' => '</h3>',
		) );
      
        register_sidebar(array(  
            'name' => 'Left Column',  
            'id'   => 'left_column',  
            'description'   => 'Widget area for home page left column',  
            'before_widget' => '<div id="%1$s" class="widget %2$s">',  
            'after_widget'  => '</div>',  
            'before_title'  => '<h4>',  
            'after_title'   => '</h4>'  
        ));  
        register_sidebar(array(  
            'name' => 'Center Column',  
            'id'   => 'center_column',  
            'description'   => 'Widget area for home page center column',  
            'before_widget' => '<div id="%1$s" class="widget %2$s">',  
            'after_widget'  => '</div>',  
            'before_title'  => '<h4>',  
            'after_title'   => '</h4>'  
        ));  
        register_sidebar(array(  
            'name' => 'Right Column',  
            'id'   => 'right_column',  
            'description'   => 'Widget area for home page right column',  
            'before_widget' => '<div id="%1$s" class="widget %2$s">',  
            'after_widget'  => '</div>',  
            'before_title'  => '<h4>',  
            'after_title'   => '</h4>'  
        ));  

        
}  




?>