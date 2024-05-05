<?php
// Votre code pour charger les styles du thème parent
function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Vos autres modifications ou ajouts de fonctions vont ici
