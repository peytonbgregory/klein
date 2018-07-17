<?php
/**
 * Template Name: Page - Home Page
 * The template used for displaying page content in page.php
 */
get_header(); ?>
<?php $options = get_option( 'theme_settings' ); ?>
    <div class="row" id="home-header">
        <div class="col-md-5 col-sm-5 col-xs-12">
            <a class="main-logo" href="<?php echo home_url(); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
        </div><!-- col md 4 -->
        <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="header-thin">Dan Klein is passionate about his mediation work.</div>
            <div class="header-thick">So are the attorneys who engage him.</div>
        </div><!-- col md 8 -->
    </div><!-- row / home-header -->
    <div class="row" id="slideshow-container">
        <div class="col-md-12 slideshow hidden-xs hidden-sm">
            <?php dynamic_sidebar ('slideshow'); ?>
        </div><!-- col md 12 -->
        <div class="col-md-12 slideshow hidden-lg hidden-md">
           <?php echo do_shortcode("[metaslider id=186]"); ?>
        </div><!-- col md 12 -->
    </div><!-- row / slideshow -->
    <div class="row" id="sub-container">
        <div class="col-md-3 text-center hidden-xs" id="social-icons">
            <a href="mailto:dan@kleinadr.com" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-mail.png" class="" /></a>
            <a href="http://www.linkedin.com/pub/dan-klein/9/36a/819/es" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-linkedin.png" class="" /></a>
            <a href="https://plus.google.com/113209358323275380817/about" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-google.png" class="" /></a>
        </div><!-- col md 3 -->
        <div class="col-md-3 text-center" id="schedule-btn">
            <a href="/calendar/"><img src="/wp-content/themes/ticstrap/images/schedule-btn.png" class="" /></a>
        </div><!-- col md 3 -->
        <div class="col-md-3 text-center" id="overview-btn">
            <a href="/wp-content/uploads/2015/02/Klein_ADR_2015_Overview.pdf" target="_blank"><img src="/wp-content/themes/ticstrap/images/download-pdf-btn.png" class="" /></a>
        </div><!-- col md 3 -->
        <div class="col-md-3 text-center" id="best-firm">
            
        </div><!-- col md 3 -->
        
        
        <div class="col-md-3 text-center hidden-lg hidden-md hidden-sm hidden-xs" id="social-icons">
            <a href="mailto:dan@kleinadr.com" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-mail.png" class="" /></a>
            <a href="http://www.linkedin.com/pub/dan-klein/9/36a/819/es" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-linkedin.png" class="" /></a>
            <a href="https://plus.google.com/113209358323275380817/about" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-google.png" class="" /></a>
        </div><!-- col md 3 -->
    </div><!-- row / sub container -->

<?php get_footer(); ?>