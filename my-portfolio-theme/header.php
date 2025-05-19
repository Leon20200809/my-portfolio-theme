<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- グーグルフォント Poppins と Noto Sans JP　-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header">
        <div id="mask">
            <nav class="main-nav">
                <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
            </nav>
        </div>

        <div class="pc">
            <div class="site-header">
                <h1 class="site-title">
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                </h1>
                <nav class="main-nav">
                    <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
                </nav>
            </div>
        </div>

        <div class="sp">
            <h1 class="site-title">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <div id="hamburger-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        
        
    </header>