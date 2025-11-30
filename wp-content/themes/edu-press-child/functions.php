<?php
// Seguridad: Evita que el archivo sea accedido directamente
if ( ! defined( 'ABSPATH' ) ) exit; 

// --- 1. ENQUEUE STYLES (Carga el CSS del tema padre y del tema hijo) ---
function edu_press_enqueue_styles() {
    // Carga el estilo del tema padre
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Carga el estilo del tema hijo (tu estilo personalizado)
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'), 
        wp_get_theme()->get('Version') 
    );
}
add_action( 'wp_enqueue_scripts', 'edu_press_enqueue_styles' );


// --- 2. ENQUEUE SCRIPTS (Carga el JavaScript de forma óptima) ---
function edu_press_enqueue_scripts() {
    // Carga el JavaScript del tema hijo de forma NO BLOQUEANTE (el 'true' final)
    wp_enqueue_script( 'edu-press-main-js', 
        get_stylesheet_directory_uri() . '/assets/main.js',
        array(), 
        wp_get_theme()->get('Version'),
        true // CLAVE DE OPTIMIZACIÓN: Carga el script al final del <body> para mejorar el rendimiento
    );
}
add_action( 'wp_enqueue_scripts', 'edu_press_enqueue_scripts' );

// Nota de seguridad: No se requiere la etiqueta de cierre ?>