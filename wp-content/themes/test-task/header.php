<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo">
        <?php
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
        ?>

    </div>
    <div class="menu">
        <?php wp_nav_menu( [
            'menu' => 'top',
        ] ); ?>
    </div>
    <div class="header__login">
        <? echo do_shortcode('[xoo_el_action type="login" display="link" text="Login" change_to="Login" change_to_text="Login"]');?>
        /
        <? echo do_shortcode('[xoo_el_action type="register" display="link" text="Register" change_to="Register" change_to_text="Register"]');?>
    </div>

    <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
        <div id="sidebar">
            <?php dynamic_sidebar( 'sidebar-5' ); ?>
        </div>
    <?php endif; ?>
</header>
<main>