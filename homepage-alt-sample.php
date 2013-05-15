

 <?php
/**
 * Template Name: HomePage 5
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

    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/toystory.jpg" data-thumb="images/toystory.jpg" alt=""title="#htmlcaption"/>
                <img src="images/walle.jpg" data-thumb="images/walle.jpg" alt="" title="#htmlcaption"/>
                <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption"/>
                
                </div>
            <div id="htmlcaption" class="nivo-html-caption foo">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>
    <script type="text/javascript" src="javascripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="javascripts/jquery.nivo.slider.js"></script>
   <script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'random', /*The effect parameter can be any of the following:sliceDown,sliceDownLeft,sliceUp,sliceUpLeft,sliceUpDown sliceUpDownLeft,fold, fade,random, slideInRight, slideInLeft,boxRandom,boxRain,boxRainReverse, boxRainGrow, boxRainGrowReverse */
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 2500, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>


<?php get_footer(); ?>


