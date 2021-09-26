<div class="page__main-menu">
    <nav id="site-navigation" class="page__nav">     
        <div class="page__nav-container">   
            <div class="page__nav-header">
                <?php if (has_nav_menu('main_menu')) : ?>
                    <div id="main-menu-panel" class="open-panel page__nav-open" data-panel="main-menu-panel">
                        <span class="page__nav-span page__nav-span--1"></span>
                        <span class="page__nav-span page__nav-span--2"></span>
                        <span class="page__nav-span page__nav-span--3"></span>
                    </div>
                <?php endif; ?>
                <div class="page__site-header" >
                    <div class="page__site-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="page__site-text">
                        <?php if (is_front_page()) : ?>
                            <h1 class="page__site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php else : ?>
                            <p class="page__site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php endif; ?>

                        <?php
                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) :
                            ?>
                            <p class="page__site-description">
                                <?php echo esc_html($description); ?>
                            </p>
                        <?php endif; ?>
                    </div><!-- .site-branding-text -->
                </div>
            </div>  
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'depth' => 5,
                'container' => 'div',
                'container_class' => 'page__menu-container',
                'menu_class' => 'page__menu-lists',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker(),
            ));
            ?>
        </div>    
    </nav> 
</div>
<?php if (has_header_image() && is_home()) { ?>
    <div class="page__custom-header">

        <div class="page__custom-media">
            <?php the_custom_header_markup(); ?>
        </div>

        <div class="page__site-branding-text">

            <p class="page__site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>

            <?php
            $description = get_bloginfo('description', 'display');
            if ($description || is_customize_preview()) :
                ?>
                <p class="page__site-description">
                    <?php echo $description; ?>
                </p>
            <?php endif; ?>
            <?php do_action('page__bulk_after_header'); ?>
        </div><!-- .site-branding-text -->

    </div><!-- .custom-header -->
<?php } ?>