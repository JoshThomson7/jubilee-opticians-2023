<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="UTF-8">
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php 
        $general_background_image = '';
        if(get_field('general_background_image')){
            $general_background_image = 'class="background-sphere"';
        }

        $logo = get_field('logo', 'options');

        $phone = get_field('contact_phone', 'options'); 
        $email = get_field('contact_email', 'options'); 
                                
    ?>

    <?php require_once('modules/off-canvas-nav/templates/oc-menu.php'); ?>

	<div id="page" <?php echo $general_background_image;?> >

		<header class="header">

            <div class="header__main">

                <div class="max__width">

                    <div class="header_logo_menu">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>">

                                <img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div><!-- logo -->
                    </div>

                    <div class="header__cta">

                        <ul class="contact">
                            <li><i class="fa fa-phone"></i><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                        </ul>

                        <div class="header__menu">
                            <?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => false)); ?>
                        </div><!-- header__right -->

                        <div class="oc__nav__trigger">
                            <a class="button outline primary small"><i class="fal fa-align-left"></i>Menu</a>
                        </div>
 
                    </div>

                </div><!-- max__width -->
            </div><!-- header__main -->
		</header><!-- header -->