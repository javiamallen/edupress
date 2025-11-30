<?php
/*
Plugin Name: EduPress Core Functionality
Description: Plugin personalizado para funcionalidades core del proyecto EduPress Pro, incluyendo consumo de APIs y optimización.
Version: 1.0
Author: Javiera Allende
*/

if ( ! defined( 'ABSPATH' ) ) exit; 

// 1. FUNCIÓN PRINCIPAL PARA CONSUMIR LA API (JSONPLACEHOLDER)
function edu_press_obtener_datos_usuarios() {
    $api_url = 'https://jsonplaceholder.typicode.com/users?_limit=5';
    $respuesta = wp_remote_get( $api_url );

    if ( is_array( $respuesta ) && ! is_wp_error( $respuesta ) && $respuesta['response']['code'] == 200 ) {
        $cuerpo = wp_remote_retrieve_body( $respuesta );
        return json_decode( $cuerpo, true );
    }

    return [];
}


// 2. FUNCIÓN PARA CREAR EL SHORTCODE (La interfaz de usuario)
function edu_press_shortcode_lista_estudiantes() {
    // 🚨 Esto demuestra tu habilidad: El PHP llama a la API desde el Back End
    $estudiantes = edu_press_obtener_datos_usuarios();

    if ( empty( $estudiantes ) ) {
        return '<p>No fue posible cargar la lista de estudiantes en este momento.</p>';
    }

    $output = '<div class="edu-press-api-widget">';
    $output .= '<h3>Últimos 5 Estudiantes Inscritos (Datos Simulados vía API REST)</h3>';
    $output .= '<ul>';

    foreach ( $estudiantes as $estudiante ) {
        $output .= '<li>';
        $output .= '<strong>Estudiante:</strong> ' . esc_html( $estudiante['name'] ) . '<br>';
        $output .= '<strong>Web:</strong> <a href="http://' . esc_attr( $estudiante['website'] ) . '" target="_blank">' . esc_html( $estudiante['website'] ) . '</a>';
        $output .= '</li>';
    }

    $output .= '</ul>';
    $output .= '</div>';

    return $output;
}
// Registramos el shortcode: [lista_api_estudiantes]
add_shortcode( 'lista_api_estudiantes', 'edu_press_shortcode_lista_estudiantes' );