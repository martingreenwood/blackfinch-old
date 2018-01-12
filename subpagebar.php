<div class="desktopNav">

    <div class="subPageBarContain">
        <div class="infobar row subPageBar">
            <div class="searchBar">
                <div class="phoneIcon"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" /></div>
                <div class="emailIcon2"><a href="<?php echo home_url("/contact"); ?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/email.svg" /></a></div>
                <div class="loginIcon2"><a href="<?php echo home_url("/adviser-portal"); ?>"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/login.svg"></a></div>

                <form class="search-form" role="search" method="get" action="<?php echo home_url( "/" ); ?>">
                    <input type="text" placeholder="Search" class="searchExpand" value="<?php echo get_search_query(); ?>" name="s" />
                    <input type="submit" style="position: absolute; left: -9999px"/>    
                </form>
            </div>
            
            <div class="phoneWrap">
                <div class="phoneNumber">Call us on 01684 571 255</div>
            </div>
            <div class="homeIcon"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/bf-icon-white.svg"></a></div>
            <div class="menuPhoneIcon"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" /></div>
            <div class="searchIcon"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" /></div> 
            <div class="loginIcon"><a href="<?php echo home_url("/adviser-portal"); ?>"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/login.svg"></a></div>
            <div class="emailIcon"><a href="<?php echo home_url("/contact"); ?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/email.svg"></a></div>
            
            <div class="smallMenu">
                <div class="smallHome"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/home.svg"></a></div>
                <div class="smallPhone"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/phone.svg"></div>
                <div class="smallEmail"><a href="<?php echo home_url("/contact"); ?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/email.svg"></a></div>
                <div class="smallLogin"><a href="<?php echo home_url("/adviser-portal"); ?>"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/login.svg"></a></div>
                <div class="smallSearch"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/search.svg"></div> 
                <div class="smallMenu"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/menu.svg"></div>
            </div>

        </div>
    </div>
                    
    <div class="menuContainer">
        <div class="menuWrapper">
            <div class="menuDrop pa">
                <p class="ca mainNav">Menu <img class="mobileMenu" src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" /></p>
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

<div class="mobileNav">

    <div class="subPageBarContain">
        <div class="infobar row subPageBar">
            <div class="searchBar">
                <div class="phoneIcon"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" /></div>
                <div class="emailIcon2"><a href="<?php echo home_url("/contact"); ?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/email.svg" /></a></div>
                <div class="loginIcon2"><a href="<?php echo home_url("/adviser-portal"); ?>"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/login.svg"></a></div>

                <form method="get" action="<?php echo home_url( "/" ); ?>">
                    <input type="text" placeholder="Search" class="searchExpand" value="" name="s" />
                    <input type="submit" style="position: absolute; left: -9999px"/>            
                </form>
            </div>

            <div class="smallMenu">
                <div class="smallHome"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/bf-icon-white.svg" /></a></div>
                <div class="smallPhone"><a href="tel:01684 571 255"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" /></a></div>
                <div class="smallEmail"><a href="<?php echo home_url("/contact"); ?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/email.svg" /></a></div>
                <div class="smallLogin"><a href="<?php echo home_url("/adviser-portal"); ?>"><img class="" src="<?php echo get_template_directory_uri() ; ?>/img/login.svg"></a></div>
                <div class="smallSearch"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" /></div> 
                <div class="smallBurger"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" /></div>
            </div>

            
            <div class="smallSearchContain">
                <form method="get" action="<?php echo home_url( "/" ); ?>">
                    <input type="text" placeholder="Search" class="" value="" name="s" />
                </form>
            </div> 
        </div>
    </div>

    <div class="menuChildren">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu1' ) ); ?>
            </div> 
            

    <div class="headerContent">
        <?php echo $headerContent; ?> 
    </div>

</div>
