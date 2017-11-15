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
                	<p><?php bloginfo( 'name' ); ?><br>
                    <?php the_field( 'address', 'options' ); ?></p>
                    <p>Blackfinch Investments Ltd is authorised and regulated by the Financial Conduct Authority.</p>
                </div>
            	<div class="col s3">
            		<?php if (get_field( 'phone', 'options' )): ?>
                	<p>T <?php the_field( 'phone', 'options' ); ?></p>
                	<?php endif; ?>
                    
                    <?php if (get_field( 'fax', 'options' )): ?>
                    <p>F <?php the_field( 'fax', 'options' ); ?></p>
					<?php endif; ?>
                    
                    <?php if (get_field( 'email', 'options' )): ?>
                    <p>E <?php the_field( 'email', 'options' ); ?></p>
                    <?php endif; ?>

                </div>
            	<div class="col s2">
                	<p><a href="<?php echo home_url( "/terms-and-conditions" ); ?>">Terms and Conditions</a></p>
                    <p><a href="<?php echo home_url( "/cookies-privacy" ) ;?>">Cookies &amp; Privacy</a></p>
                    <p><a href="<?php echo home_url( "/important-information" ) ;?>">Important Information</a></p>
                </div>
            	<div class="col s2">
                	<p><a href="<?php echo home_url( "/news" ); ?>">News</a></p>
                    <p><a href="<?php echo home_url( "/events" ); ?>">Events</a></p>
                    <p><a href="<?php echo home_url( "/careers" ); ?>">Careers</a></p>
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
