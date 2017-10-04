<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blackfinch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content searchResults">
    
        <header class="entry-header">
            <h3><a href="<?php the_permalink();?>"><?php the_title( ); ?></a></h3>
    
            <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php blackfinch_posted_on(); ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
    
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    </div>
    
</article><!-- #post-## -->
