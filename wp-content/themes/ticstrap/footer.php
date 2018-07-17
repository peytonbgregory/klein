<?php
/**
 * The Footer.
 */
?>
    
	

<div class="container hidden-xs" id="footer">
    <div class="row">
    	<div class="col-md-12 text-center" id="footer-social-icons">
             <a href="mailto:dan@kleinadr.com" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-mail.png" class="" /></a>
            <a href="http://www.linkedin.com/pub/dan-klein/9/36a/819/es" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-linkedin.png" class="" /></a>
            <a href="https://plus.google.com/113209358323275380817/about" target="_blank"><img src="/wp-content/themes/ticstrap/images/icon-google.png" class="" /></a>
        </div><!-- col md 3 -->
         <div class="col-md-12 text-center"> 
        	<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?>
         </div>
         <div class="col-md-12 text-center"> 
        	&copy; Klein Dispute Resolution <?php echo date("Y"); ?>
        </div><!-- .col-md-12 -->
    </div><!-- .row -->
</div><!-- container / footer -->

<script type="text/html" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>   
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stickUp.min.js"></script>
<script type="text/javascript">
              //initiating jQuery
              jQuery(function($) {
                $(document).ready( function() {
                  //enabling stickUp on the '.navbar-wrapper' class
                  $('.sticky-header').stickUp();
                });
              });
</script>
<script type="text/javascript">
 $(document).on('click', function () {
            $('.navbar-collapse').collapse('hide');
        });
</script>
<script>
	var $mcGoal = {'settings':{'uuid':'a8fcf4897095def84bd9057db','dc':'us14'}};
	(function() {
		 var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
		sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
	})(); 
</script>
</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>