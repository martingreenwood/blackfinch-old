<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blackfinch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		
			the_title( '<h3>', '</h3>' );
		
			echo '<h4>'.get_the_author_meta('display_name', $author_id).'</h4>';
			
			
			
			
					$images = get_field('images');
	
		foreach( $images as $image ){
    	
    	//	echo '<a href="'.$image['url'].'"><img src="'.$image['sizes']['large'].'" alt="'.$image['alt'].'" /></a>';

		}
		
			
		
		
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'blackfinch' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blackfinch' ),
				'after'  => '</div>',
			) );
			
			
	
			
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php blackfinch_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
