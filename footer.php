<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blackfinch
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<img class="footLogo" src="<?php echo get_template_directory_uri() ; ?>/img/bf-logo-black.svg" width="150" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />	
            
            <div class="row">
        		<div class="col s5">
                	<p>Blackfinch Investments Limited</p>
                    <p>Blackfinch House, Chequers Close, Malvern, Worcestershire WR14 1GP</p>
                    <p>Blackfinch Investments Ltd is authorised and regulated by the Financial Conduct Authority.</p>
                </div>
            	<div class="col s3">
                	<p>T 01684 571 255</p>
                    <!-- <p>F 02071 609 319</p> -->
                    <p>E enquiries@blackfinch.com</p>
                </div>
            	<div class="col s2">
                	<p><a href="<?php echo home_url( "/terms-and-conditions" ); ?>">Terms and Conditions</a></p>
                    <p><a href="<?php echo home_url( "/cookies-privacy" ) ;?>">Cookies &amp; Privacy</a></p>
                    <p><a href="<?php echo home_url( "/important-information" ) ;?>">Important Information</a></p>
                </div>
            	<div class="col s2">
                	<p><a href="<?php echo home_url( "/news" ); ?>">News</a></p>
                    <p><a href="<?php echo home_url( "/events" ); ?>">Events</a></p>
                </div>  
       		</div>

       		<div class="linkedin">
	       		<a href="<?php the_field( 'linkedin_url' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" width="40" height="40"></a>
       		</div>
            
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
