<?php

get_header();

do_action( 'hestia_before_single_post_wrapper' );
?>

<div class="<?php echo hestia_layout(); ?> model-3d-page">
	<div class="blog-post blog-post-wrapper">
		<div class="container">
			
            <div class="sketchfab-embed-wrapper"> 
                <?php
                    $Link = get_field('link');
                    if (!empty($Link)) :
                ?>
                    <iframe 
                        class="model-object-3d"
                        title="<?php echo get_the_title(); ?>" 
                        frameborder="0" 
                        allowfullscreen 
                        mozallowfullscreen="true" 
                        webkitallowfullscreen="true" 
                        allow="autoplay; fullscreen; xr-spatial-tracking" 
                        xr-spatial-tracking 
                        execution-while-out-of-viewport 
                        execution-while-not-rendered 
                        web-share 
                        src=" <?php echo $Link; ?>/embed"> 
                    </iframe> 
                    <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </p>
                <?php endif; ?>
                <div><?php the_content(); ?></div>
            </div>
		</div>
	</div>
</div>

<div class="footer-wrapper">
	<?php get_footer(); ?>