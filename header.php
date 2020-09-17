<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Joshua Generation</title>
    <?php wp_head(); ?>
</head>

<body class="preload">
    <section class="site__header">
        <div class="mobile__container">
            <header class="mobile__menu">
                <button class="header__button" id="btnNav" type="button">
                    <i class="material-icons">menu</i>
                </button>
            </header>
            <nav class="nav">
                <div class="nav--links">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mobile-menu'
                    ));
                    ?>
                </div>
                <div class="nav--overlay"></div>
            </nav>
        </div>
        <header>
            <div class="site__header--strip">
                <div class="ticker">
                    <div class="ticker--heading">
                        <h4>News</h4>
                    </div>
                    <?php get_template_part('template-parts/content', 'headlines') ?>
                </div>
            </div>
            <div class="site__header--brand row">
                <div class="logo">
                    <?php
                    the_custom_logo();
                    ?>
                </div>
                <div class="site__menu">
                    <nav aria-label="navigation" role="navigation">
                        <?php
                        wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => 'main__menu'));
                        ?>
                    </nav>
                </div>
                <div class="social__links--top">
                    <ul>
                        <li><a href="https://bit.ly/3hQU2hK"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://bit.ly/3i2bkby"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </header>
    </section>