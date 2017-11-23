<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blackfinch
 */

?>
<!-- 
Built by Martin Greenwood
Lead Deveoper @WEAREBEARD
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Maitree:200,300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">


<?php wp_head(); ?>


<?php
//custom fields
$headerBg = get_field('header_image');
$headerContent = get_field('header_content');

if(is_front_page()){
	$padding = '';
	$header = '';
} else {
	
	$padding = 'nopad';
	$header = '';	
	
	if($headerBg){
		$header = 'noLogo';	
	}
}

?>
</head>

<body <?php body_class("page-" . $pagename); ?>>


	<div class="termsOverlay" style="display:none;">
    	<div class="termsOverlayContent">
    		<h4>Terms &amp; Conditions</h4>
        
       		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>

			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>

			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>

			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
            
            <div class="feedbackForm">
            <span class="wpcf7-form-control-wrap radio-270">
            <span class="wpcf7-form-control wpcf7-radio">
            <span class="wpcf7-list-item first">
            <label>
            <input type="radio" name="radio-270" value="intermediary">
            <span class="wpcf7-list-item-label">intermediary</span>
            </label>
            
            </span><span class="wpcf7-list-item">
            <label>
            <input type="radio" name="radio-270" value="investor">
            <span class="wpcf7-list-item-label">investor</span>
            </label></span>
            
      </span></span>
            </div>
            
            
            
    	</div>
    </div>


<div id="page" class="site wrap <?php echo $header.' '.$padding; if(!$headerBg && !is_page('contact')){ echo ' nobg'; } ?>">


	<header id="masthead" class="site-header <?php echo $header.' '.$padding; if(!$headerBg){ echo ' nobg'; } ?>" >

        <?php if($headerBg){ ?>
            <div class="slickme">
                <?php foreach($headerBg as $headerImg) { ?>
                    <div>
                        <img src="<?php echo $headerImg['url']; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

    
    
		<?php if(is_front_page()){ ?>
            <div class="topBar hideOnMob">
                <div class="site-branding">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri() ; ?>/img/bf-logo-blue.svg" width="223" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
                    </a>
                </div>
                
                <div class="menuContainer">
                    <div class="menuWrapper">
                        <div class="menuDrop pa">
                            <p class="ca">Menu</p>       
                        </div>

                        <div class="menuChildren">
                            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu1' ) ); ?>
                        </div> 
                    </div>
                </div> 
                
                <div class="headerContent">
                    <?php echo $headerContent; ?> 
                </div>
          
            </div>
            
            <div class="homeSubBar">
                <?php include('subpagebar.php');?> 
            </div>
            
        <?php } else { ?> 
          
            <?php include('subpagebar.php');?>
          
        <?php } ?> 

	</header><!-- #masthead -->
    
   
	<?php if(is_front_page()){ ?>
    	<div class="infobar row homeBar">
			<div class="searchBar">
            	<div class="phoneIcon"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/phone.svg"></div>
                <div class="emailIcon2"><a href="<?php echo home_url("/contact"); ?>"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/email.svg"></a></div>
                
                <form class="searchForm" method="get" action="<?php echo home_url( "/"); ?>">
				<input type="text" placeholder="Search" class="searchExpand" value="" name="s" />
                
              </form> 
            </div>
            
            <div class="phoneWrap">
            	<div class="phoneNumber">Call us on 01684 571 255</div>
            </div>
            
            <div class="searchIcon"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/search.svg"></div> 
            <div class="emailIcon"><a href="<?php echo home_url("/contact"); ?>"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/email.svg"></a></div>
        </div>
	<?php } ?>
    
	<div id="content" class="site-content">