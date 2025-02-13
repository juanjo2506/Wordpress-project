<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/output.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'new-theme'); ?></a>

        <header id="masthead" class="bg-white shadow-md p-4">
            
            <div class=" mx-auto flex justify-between items-center">


                <div class="flex items-center ml-2 main-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="Logo" class="h-5">
                    </a>
                </div>



                <nav id="nav-menu" class="home hidden md:flex items-center space-x-4">
                    <a href="#" class="!text-black hover:!text-gray-900">About Me</a>
                    <a href="#" class="!text-black hover:!text-gray-900">My Offerings</a>
                    <a href="#" class="!text-black hover:!text-gray-900">Blog</a>
                    <a href="#" class="!text-black hover:!text-gray-900">Media</a>
                    <a href="#" class="!text-black hover:!text-gray-900">Testimonials</a>

                    
                    <a href="#" class="font-bold border-2 border-yellow-600 !text-black px-4 py-2 rounded-lg hover:bg-yellow-600 hover:text-white transition">
                        Work with Me
                    </a>
                </nav>






                <!-- Botón Hamburguesa -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700 text-2xl">
                    ☰
                </button>

                <!-- Menú móvil (oculto por defecto) -->
                <div id="mobile-menu" class="hidden absolute top-16 left-0 w-full bg-white shadow-md p-4 space-y-4 md:hidden">
                    <a href="#" class="block !text-black hover:!text-gray-900">About Me</a>
                    <a href="#" class="block !text-black hover:!text-gray-900">My Offerings</a>
                    <a href="#" class="block !text-black hover:!text-gray-900">Blog</a>
                    <a href="#" class="block !text-black hover:!text-gray-900">Media</a>
                    <a href="#" class="block !text-black hover:!text-gray-900">Testimonials</a>
                    <a href="#" class="block font-bold border-2 border-yellow-600 !text-black px-4 py-2 rounded-lg hover:bg-yellow-600 hover:text-white transition">
                        Work with Me
                    </a>
                </div>
                
                
                <script>
                    document.getElementById('mobile-menu-button').addEventListener('click', function() {
                        document.getElementById('mobile-menu').classList.toggle('hidden');
                    });
                </script>
        </header>