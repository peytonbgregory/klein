<?php
/**
 * Template Name: Page - Intro
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				
					
			<div class="video-link">
				
				
			<div class="embed-responsive embed-responsive-16by9">
  <video playsinline class="embed-responsive-item" width="100%" poster="<?php echo get_template_directory_uri();?>/video/intro.jpg" autoplay="autoplay" preload="none" controls>

	  				<source src="<?php echo get_template_directory_uri();?>/video/intro.webm" type="video/webm" media="all and (max-width: 480px)">
					<source src="<?php echo get_template_directory_uri();?>/video/intro.ogv" type="video/ogg" media="all and (max-width: 480px)">
					<source src="<?php echo get_template_directory_uri();?>/video/intro.mp4" type="video/mp4" media="all and (max-width: 480px)">
					<source src="<?php echo get_template_directory_uri();?>/video/intro-hd.webm" type="video/webm">
					<source src="<?php echo get_template_directory_uri();?>/video/intro-hd.ogv" type="video/ogg">
					<source src="<?php echo get_template_directory_uri();?>/video/intro-hd.mp4" type="video/mp4">
				</video>
			</div>
				</div>
				
				
				<a class="btn btn-primary" href="http://kleinadr.com/" title="Enter Website">Enter Website</a></div>
		
		</div> 
		<div class="row">
			<div class="col-md-12">
				
				<div class="entry-content">
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					
				</div><!-- .entry-content -->
				
	
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
<script>var mainVideo = $('#the-video');

if ($(window).width() < 1200 && medQualVersion) {
  mainVideo.append("<source type='video/mp4' src='" + medQualVersionSrc + "' />");
} else {
  mainVideo.append("<source type='video/mp4' src='" + highQualVersionSrc + "' />");
}
mainVideo.append("<source type='video/webm' src='" + webMSrc + "' />");

// Wait until sources are appended to call MediaElements.js
mainVideo.mediaelementplayer();</script>
<?php get_footer(); ?>