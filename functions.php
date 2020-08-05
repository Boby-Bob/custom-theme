<?php

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles() {
    // chargement de la feuille de style du thème
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', [] );
    wp_enqueue_style( 'my-theme-main', get_stylesheet_directory_uri().'/style.css', ['bootstrap'] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function enqueue_mon_script() {
    // chargement du script JS du thème
    wp_enqueue_script( 'script-perso', get_stylesheet_directory_uri().'/js/main.js', [] );
}
add_action( 'wp_enqueue_scripts', 'enqueue_mon_script' );

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


add_theme_support('nav-menus'); // je préviens wordpress que je veux utiliser les menus.
register_nav_menus(array(// enregistrement des menus
 'primary' => 'Navigation principale' // ici mon menu principal
));
// Menu de navigation spécial
register_nav_menus(array(
    'spécial' => 'Menu spécial)'
));