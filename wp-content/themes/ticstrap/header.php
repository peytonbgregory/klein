<?php
/*
 * The Header for our theme.
 */
 ?>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php the_title(); ?></title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/favicon.png" />
<?php wp_head(); ?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/upbootwp.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
</head>
<?php
//get theme options
$options = get_option( 'theme_settings' ); ?>
<?php flush(); ?><body <?php body_class(); ?>>

    <div id="page" class="hfeed site">
        <?php do_action( 'before' ); ?>

    <div class="container" id="home-page">
        <nav class="navbar navbar-default gradient">
         <div class="menu-text hidden-lg hidden-md hidden-sm"><!--<a href="/wp-content/themes/ticstrap/images/Daniel_1362401.vcf" target="_blank">Download vCard</a> |--> <a href="tel:4043230972" class="phone-link">404-323-0972</a> | <a href="mailto:dan@kleinadr.com" class="email-link">dan@kleinadr.com</a></div>
        	<div class="navbar-header">
            	<button class="navbar-toggle glyphicon glyphicon-align-justify" data-target=".navbar-collapse" data-toggle="collapse" type="button"></button>
            </div>
                        <?php $args = array('theme_location' => 'primary', 
                                            'container_class' => 'navbar-collapse collapse', 
                                            'menu_class' => 'nav navbar-nav',
                                            'fallback_cb' => '',
                                            'menu_id' => 'main-menu',
                                            'walker' => new Upbootwp_Walker_Nav_Menu()); 
                                            wp_nav_menu($args); ?>
                                            <div class="menu-text hidden-xs"><!--<a href="/wp-content/themes/ticstrap/images/Daniel_1362401.vcf" target="_blank">Download vCard</a> |--> <a href="tel:4043230972" class="phone-link">404-323-0972</a> | <a href="mailto:dan@kleinadr.com" class="email-link">dan@kleinadr.com</a></div>
    	</nav>
        <div class="row hide-home">
        	<div class="col-md-6 col-sm-6 col-xs-12">
            	<!-- <div class="mobile-title hidden-lg hidden-md hidden-sm"><h1>Klein Dispute Resolution</h1></div> -->
            	<a class="main-logo hidden-xs" href="<?php echo home_url(); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
            </div>
            <div class="col-md-3 text-center header-buttons hidden-xs" id="header-schedule-btn">
            <a href="/calendar/"><img src="/wp-content/themes/ticstrap/images/schedule-btn.png" class="" /></a>
        </div><!-- col md 3 -->
        <div class="col-md-3 text-center header-buttons hidden-xs" id="heaer-overview-btn">
            <a href="/wp-content/uploads/2015/02/Klein_ADR_2015_Overview.pdf" target="_blank"><img src="/wp-content/themes/ticstrap/images/download-pdf-btn.png" class="" /></a>
        </div><!-- col md 3 -->
        </div><!-- row -->