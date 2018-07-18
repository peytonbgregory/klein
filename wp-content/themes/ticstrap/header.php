<html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo( 'charset' ); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title><?php the_title(); ?></title><link rel="profile" href="http://gmpg.org/xfn/11"><link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><meta name="google-site-verification" content="2Ur5JZIFzDEs_eOHt9O8xhEwjgu2Vp4iRET-eZAhMrc" /><link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" /><?php wp_head(); ?></head><body <?php body_class(); ?>>    <div id="page" class="hfeed site">    <div class="container" id="home-page">        <nav class="navbar navbar-default gradient">         <div class="menu-text hidden-lg hidden-md hidden-sm"><!--<a href="<?php echo get_template_directory_uri();?>/images/Daniel_1362401.vcf" target="_blank">Download vCard</a> |--> <a href="tel:4043230972" class="phone-link">404-323-0972</a> | <a href="mailto:dan@kleinadr.com" class="email-link">dan@kleinadr.com</a></div>        	<div class="navbar-header">            	<button class="navbar-toggle glyphicon glyphicon-align-justify" data-target=".navbar-collapse" data-toggle="collapse" type="button"></button>            </div>                        <?php $args = array('theme_location' => 'primary',                                             'container_class' => 'navbar-collapse collapse',                                             'menu_class' => 'nav navbar-nav',                                            'fallback_cb' => '',                                            'menu_id' => 'main-menu',                                            'walker' => new Upbootwp_Walker_Nav_Menu());                                             wp_nav_menu($args); ?>                                            <div class="menu-text hidden-xs"><!--<a href="<?php echo get_template_directory_uri();?>/images/Daniel_1362401.vcf" target="_blank">Download vCard</a> |--> <a href="tel:4043230972" class="phone-link">404-323-0972</a> | <a href="mailto:dan@kleinadr.com" class="email-link">dan@kleinadr.com</a></div>    	</nav>        <div class="row hide-home">        	<div class="col-md-6 col-sm-6 col-xs-12">            	<!-- <div class="mobile-title hidden-lg hidden-md hidden-sm"><h1>Klein Dispute Resolution</h1></div> -->            	<a class="main-logo hidden-xs" href="<?php echo home_url(); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>            </div>            <div class="col-md-3 text-center header-buttons hidden-xs" id="header-schedule-btn">            <a href="/calendar/"><img src="<?php echo get_template_directory_uri();?>/images/schedule-btn.png" class="" /></a>        </div><!-- col md 3 -->        <div class="col-md-3 text-center header-buttons hidden-xs" id="heaer-overview-btn">            <a href="/wp-content/uploads/2015/02/Klein_ADR_2015_Overview.pdf" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/download-pdf-btn.png" class="" /></a>        </div><!-- col md 3 -->        </div><!-- row -->